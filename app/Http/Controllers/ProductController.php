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

    public function autoComplete(Request $request)
    {
       if($request->get('query'))
       {
           $query = $request->get('query');
           $data = Product::where('name','LIKE',"%{$query}%")->paginate(15);

           $product = '<ul class="list-group" style="display: block;position: absolute;z-index: 10000;background: #ddd;width: 98%; max-height: 400px; overflow: scroll;overflow-x:auto"><p class="itemlist">PRODUCTS</p>';
               foreach ($data as $row) {
                   $product .='<li href="" class="list-group-item">
                            <a href="/product/'.$row->slug.'" style=" text-decoration: none;">
                            <span class="item-thumbnail">  <img src="'.$row->image.'" style="max-width:60px;max-height:60px; display: inline" alt=""></span>
                            <span class="item-overhidden">
                                <span class="item-title">'.$row->name.'</span>
                                <span class="item-description">'.str_limit($row->description,50,'').'</span>
                                <span class="item-price">Tk.'.$row->price.'</span>
                            </span>          
                             </li><li style="margin: 4px 0; list-style-type: none"></li>';
               }
               $product .='<a href="/category/'.$query.'" style="display: block; text-align: center;font-size: 18px; padding: 10px; background: lightseagreen;color: #fff;font-weight: 700;text-decoration: none;">View all '.$data->total().' items</a>';
               $product .='</ul>';
               echo $product;
       }
    }

    public function categorySearch(Request $request)
    {
        dump($request);
    }
}
