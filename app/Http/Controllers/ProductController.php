<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
        $newProduct = Product::create($data);
        return redirect(route('products.index'));
    }
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
        $product->update($data);
        return redirect(route('products.index'))->with('success', 'Product updated successfully');
    }
    public function delete(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product deleted successfully');
    }
}
