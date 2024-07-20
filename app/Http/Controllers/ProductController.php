<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
    
    public function store(Request $resquest)
    {
        $pro = new Product;
        $pro->fill($resquest->all());
        $pro->save();

        return redirect('/show');
    }

    public function show()
    {
        $product = Product::all();
        return view('products.show',compact('product'));
    }
    public function destroy(Product $product)
    {       
        $product->delete();
        return redirect('/show');

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));

    }

    public function update(Request $resquest,$id)
    {
        $product = Product::findOrFail($id);
        $product->fill($resquest->all());
        $product->save();

        return redirect('/show');
    }
}
