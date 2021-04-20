<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("products.index", [ "products" => $products ]);
    }

    public function create()
    {
        $product = new Product;
        return view("products.create", ["product" => $product]);
    }

    public function store(Request $request)
    {
        $product = new Product;

        $product->title = $request->title;
        $product->pricing = $request->pricing;
        $product->description = $request->description;
        $product->user_id = Auth::user()->id;
        
        if($product->save()){
            return redirect("/products");
        }else{
            return view("products.create", ['product' => $product]);
        }

    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view("products.edit", ['product' => $product]);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->title = $request->title;
        $product->pricing = $request->pricing;
        $product->description = $request->description;
        
        if($product->save()){
            return redirect("/products");
        }else{
            return view("products.edit", ['product' => $product]);
        }
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/products');
    }
}
