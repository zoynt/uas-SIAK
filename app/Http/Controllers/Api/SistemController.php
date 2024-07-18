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
        $sistem = Sistem::with('pekerjaan')->get();
        return SistemResource::collection($sistem);  
    }
    // $user = $request->user();
    // $sistems = Sistem::where('id', '=', $user->id)->get();
    // return SistemResource::collection($sistems->load('sistem'));

    // $user = $request->user();
    // $sistem = Sistem::where('id', '=', $user->id)->get();
    // return SistemResource::collection($sistem->load('sistem'));


    // $sistem = Sistem::with('pekerjaan')->where('id', '=', $user->id)->get();
    // $asalSekolah = AsalSekolah::with('JurusanSekolah')->get();
    // $sistem = Sistem::with('pekerjaan')->get();

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
    public function show($id)
    {
        $sistem = Sistem::find($id);
        return response()->json($sistem);
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
