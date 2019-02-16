<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(9);
        $categories = Category::paginate(15);
        return view('frontend.index',compact('products','categories'));
    }

    public function productDetails($slug)
    {
       $product = Product::where('slug',$slug)->first();
       return view('frontend.productDetails',compact('product'));
    }
}
