<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll(){

        $products = Product::paginate(5);

        return view('products.all',compact('products'));
    }

    public function addProductGet()
    {
        $categories = Category::all();

        return view('products.add',compact('categories'));
    }

    public function addProductPost(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;

        $product->quantity = $request->quantity;

        $product->image = $request->image;

        $product->description = $request->description;

        $product->price = $request->price;

        $product->category_id = $request->categories;

        $product->save();

        return redirect('/products');
    }

    public function deleteProductGet(Product $product)
    {
        return view('products.delete',compact('product'));
    }

    public function deleteProductPost(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }

    public function updateProductGet(Product $product)
    {
        $categories = Category::all();

        return view('products.update',compact('product','categories'));
    }

    public function updateProductPost(Request $request , Product $product)
    {
        $product->name = $request->name;

        $product->quantity = $request->quantity;

        $product->category_id = $request->categories;

        $product->update();

        return redirect('/products');
    }

    public function viewProduct(Product $product)
    {
        return view('products.view',compact('product'));
    }
}
