<?php

namespace App\Http\Controllers;

use App\Models\AppFeature;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AppFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appFeatures = AppFeature::all();
        return response()->json($appFeatures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appFeature = AppFeature::create($request->all());
        return response()->json($appFeature, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appFeature = AppFeature::findOrFail($id);
        return response()->json($appFeature);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appFeature = AppFeature::findOrFail($id);
        $appFeature->update($request->all());
        return response()->json($appFeature, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AppFeature::destroy($id);
        return response()->json(null, 204);
    }
}
