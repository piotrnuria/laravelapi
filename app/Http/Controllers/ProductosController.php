<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=Productos::all();

        return $product;
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
        return Productos::create($request->all());
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Productos $productos)
    // {
    //     return Productos::findOrFail($id);
    // }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        return Productos::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $product = Productos::findOrFail($id);
        $product->update($request->all());
        // dd($product);

        return $product;
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Productos $productos)
    // {
    //     $product = Productos::findOrFail($id);
    //     $product->update($request->all());

    //     return $product;
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Productos $productos)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $product = Productos::findOrFail($id);
        $product->delete();


        return response()->json(null, 204);
    }
}
