<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
  

    public function index()
    {
        $members = Member::all();
        return response()->json(['data' => $members], 200);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:members,email',
            'phone' => 'required|unique:members,phone',
            'states' => 'nullable|in:active,suspend',
            'note' => 'nullable',
            'phoneActive' => 'required|boolean',
            'emailActive' => 'required|boolean',
        ], [
                'email.unique' => 'Email is duplicate',
                'phone.unique' => 'Phone number is duplicate',
            ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'code' => 422,
                'message' => 'Error Validation',
                'errors' => $validator->errors()
            ]);
        }

        $member = Member::create($validator->validated());

        return response()->json(['message' => 'Member created successfully', 'data' => $member], 201);
    }




    public function show($id)
    {
        $member = Member::find($id);

        if ($member === null) {
            return response()->json(['message' => 'Member not found'], 404);
        }

        return response()->json(['data' => $member], 200);
    }




    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members,email,' . $member->id,
            'phone' => 'required|unique:members,phone,' . $member->id,
        ], [
                'email.unique' => 'Email is duplicate',
                'phone.unique' => 'Phone number is duplicate',
            ]);

        $member->update($request->all());

        return response()->json(['message' => 'Member updated successfully', 'data' => $member], 200);
    }


 
    public function destroy(string $id)
    {
        $member = Member::find($id);
        if ($member === null) {
            return response()->json(['message' => 'Member not found'], 404);
        }
        $member->delete();

        return response()->json(['message' => 'Member deleted successfully'], 200);
    }

}