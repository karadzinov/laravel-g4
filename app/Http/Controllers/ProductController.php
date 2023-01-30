<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

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

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('products/create')
                ->withErrors($validator)
                ->withInput();
        }

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

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('products/'. $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }


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
