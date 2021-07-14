<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    public function search(Request $request, Product $product)
    {
        $data = Product::where('name', 'like', '%' . $request->input('query') . '%')->get();

        return view('product.search', ['products' => $data]);
    }
}
