<?php

namespace App\Http\Controllers\Api;

use App\Models\Sistem;
use App\Http\Resources\SistemResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $sistem = Sistem::where('id', '=', $user->id)->get();
        return SistemResource::collection($sistem->load('sistem'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
