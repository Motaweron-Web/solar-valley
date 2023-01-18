<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SingleController extends Controller
{
    public function index()
    {
        return view('Front.single');
    }

    public function getProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('Front.single', compact('product'));
    }
}
