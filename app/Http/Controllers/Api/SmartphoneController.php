<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Smartphone;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pokemon = new Smartphone;
        //Declarem el nom amb el request
        $pokemon->name = $request->name;
        //Desem els canvis
        $pokemon->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Smartphone::where('id', $id)->get();

        // $pokemon= auth()->user()->pokemons()->find($id);

        // if (!$pokemon) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Pokemon with id ' . $id . ' not found'
        //     ], 200);
        // }

        // return response()->json([
        //     'success' => true,
        //     'data' => $pokemon->toArray()
        // ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
