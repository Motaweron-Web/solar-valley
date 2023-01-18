<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();
        $related = Product::latest()->take(3)->get();
        return view('Front.product', compact('products', 'categories', 'related'));
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output = '';

            $products = Product::where('title_en', 'LIKE', '%' .$request->search . '%')->get();

            if($products)
            {
                foreach ($products as $key => $product) {
                    $output .='<tr>'.
                    '<tr>'.$product->id.'</tr>'.
                    '<td>'.$product->title.'</td>'.
                    '<td>'.$product->description.'</td>'.
                    '<td>'.$product->price.'</td>'.
                    '</tr>';
                }

                return Response($output);
            }
        }
    }
}
