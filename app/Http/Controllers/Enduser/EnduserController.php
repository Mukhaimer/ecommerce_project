<?php

namespace App\Http\Controllers\Enduser;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnduserController extends Controller
{
    public function index()
    {
        // 
        $categories = Category::all();
        $trending_products = Product::where('trending', '1')->take(16)->get();
        $allproducts = Product::where('status', '0')->get();
        return view('enduser.index', compact('categories', 'trending_products', 'allproducts'));
    }
    public function viewcategory($slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('cate_id', $category->id)->where('status', '0')->get();
            return view('enduser.viewcategory', compact('category', 'products'));
        } else {
            redirect('/')->with('alert', "slug doesn't exist");
        }
    }
    public function viewproduct($cate_slug, $prod_slug)
    {
        if (Category::where('slug', $cate_slug)->exists()) {
            if (Product::where('slug', $prod_slug)->exists()) {
                $products = product::where('slug', $prod_slug)->first();
                return view('enduser.viewproduct', compact('products'));
            } else {
                redirect('/')->with('alert', "the link was broken");
            }
        } else {
            redirect('/')->with('alert', "no such category found");
        }
    }
}

