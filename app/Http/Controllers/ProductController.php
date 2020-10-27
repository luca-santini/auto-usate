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
        $prodotti = Product::all();
        return view('products.index', compact('prodotti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0.01'
        ]);
        $dati = $request->all();
        $nuovo_prodotto = new Product();
        $nuovo_prodotto->fill($dati);
        $nuovo_prodotto->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodotto = Product::find($id);
        return view('products.show', compact('prodotto'));
    }

    public function edit($id)
       {
           $product = Product::find($id);
           if($product) {
               return view('products.edit', compact('product'));
           }
           return abort('404');
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
           $request->validate([
               'name' => 'required|max:255',
               'price' => 'required|numeric|min:0.01'
           ]);
           $dati = $request->all();
           $product = Product::find($id);
           if($product) {
               $product->update($dati);
           }
           return redirect()->route('products.index');
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
           if($product) {
               $product->delete();
           }
           return redirect()->route('products.index');
       }
}
