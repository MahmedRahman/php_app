<?php

namespace App\Http\Controllers;

use App\Models\Version;
use Illuminate\Http\Request;

class VersionsController extends Controller
{
    // Display a listing of the versions.
    public function index()
    {
        $versions = Version::all();
        return response()->json($versions);
    }

    // Store a newly created version in storage.
    public function store(Request $request)
    {
        $version = Version::create($request->all());
        return response()->json($version, 201);
    }

    // Display the specified version.
    public function show($id)
    {
        $version = Version::findOrFail($id);
        return response()->json($version);
    }

    // Update the specified version in storage.
    public function update(Request $request, $id)
    {
        $version = Version::findOrFail($id);
        $version->update($request->all());
        return response()->json($version, 200);
    }

    // Remove the specified version from storage.
    public function destroy($id)
    {
        Version::destroy($id);
        return response()->json(null, 204);
    }

    public function getLastVersion()
    {
        $version = Version::latest()->first();
        return response()->json($version);
    }

}