<?php
namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        echo $users;
       // return response()->json(['data' => $users], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            // Add any other fields and their validation rules
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'code' => 422,
                'message' => 'Error Validation',
                'errors' => $validator->errors()
            ]);
        }

        $validatedData = $validator->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);

        return response()->json(['message' => 'User created successfully', 'data' => $user], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json(['data' => $user], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required',
            'email' => 'sometimes|required|email|unique:users,email,' . $id,
            'password' => 'sometimes|required|min:8',
            // Add any other fields and their validation rules
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'code' => 422,
                'message' => 'Error Validation',
                'errors' => $validator->errors()
            ]);
        }

        $validatedData = $validator->validated();
        if (isset($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        $user->update($validatedData);

        return response()->json(['message' => 'User updated successfully', 'data' => $user], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }

    public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'code' => 422,
            'message' => 'Error Validation',
            'errors' => $validator->errors()
        ]);
    }

 

    if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        return response()->json([
            'status' => false,
            'code' => 401,
            'message' => 'Unauthorized',
        ]);
    }
  
    $user = Auth::user();
    $token = $user->createToken('authToken')->accessToken;
    
    $now = new \DateTime();
    $start_date = new \DateTime($user->start_date);
    $end_date = $start_date->modify('+' . $user->duration . ' days');
    
    if ($now > $end_date) {
        return response()->json([
            'status' => false,
            'code' => 403,
            'message' => 'Subscription expired',
        ]);
    }

    return response()->json([
        'status' => true,
        'code' => 200,
        'message' => 'Authenticated successfully',
        'data' => $user,
    ]);
}

}
