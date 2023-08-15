<?php

namespace App\Http\Controllers;

use App\Models\Product;
use illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function registrer_function(Request $request)
    {
        $product = new product();
        $product->name = "ekis";
        $product->descripcion = 'aja';
        $product->cantidad = 10;
        $product->precio_unitario = 4000;
        $product->save();

        return response()->json([
            'message' => 'Product created Successfully!',
            'data'=>$product,
        ], 201);
    }

    public function registrer_profile(Request $request)
    {
       return 'profile';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Product::all();

        return response()->json([
            'datos' => $productos,
        ]);
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
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
