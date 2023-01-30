<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $data = ['products' => $products];
        return view('products.index')->with($data);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([
            "name"          => $request->get('name'),
            "price"         => $request->get('price'),
            "quantity"      => $request->get('quantity'),
            "description"   => $request->get('description'),
            "image"         => $request->get('image')
        ]);

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = Product::FindOrFail($id);
        $data = ['product' => $product];

        return view('products.show')->with($data);
    }

    public function edit($id)
    {
        $product = Product::FindOrFail($id);
        $data = ['product' => $product];

        return view('products.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $product = Product::FindOrFail($id);
        $product->fill($request->all())->save();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::FindOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
