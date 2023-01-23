<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Setting;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();
        $settings = Setting::get();
        $related = Product::latest()->take(3)->get();
        return view('Front.product', compact('categories', 'related', 'settings','products'));
    }

   
}
