<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique',
            'price' => 'required',
            'tax' => 'required'
        ]);
        
        $clinic = new Product();
        $clinic->name = trim($request->name);
        $clinic->price = $request->price;
        $clinic->tax = $request->tax;
        $clinic->save();
        
        session()->flash('msg', 'Product created successfully.');
        return redirect('/clinic');
        
        $product = new Product();
        $product->name = trim($request->name);
        $product->price = $request->price;
        $product->tax = $request->tax;
        $product->save();
        
        session()->flash('msg', 'Product created successfully.');
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product',$product);
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
        $product = Product::find($id);
        
        $product->name = trim($request->name);
        $product->price = $request->price;
        $product->tax = $request->tax;
        $product->save();
        
        session()->flash('msg', 'Product updated successfully.');
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        
        $product->delete();
        
        return response()->json(['success'=>true]);
    }
    
    public function productDetail($productId)
    {
        $product = \App\Product::find($productId);
        
        return response()->json(['success'=>true, 'product'=>$product]);
    }
}
