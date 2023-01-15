<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use BinaryCats\Sku\Concerns\SkuGenerator;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $products = Product::select('*');
            return DataTables::of( $products)
                ->addColumn('action', function ( $products) {
                    return '
                            <button type="button" data-id="' .  $products->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' .  $products->id . '" data-title="' .  $products->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.product.index');
        }
    }

    public function create()
    {
        $categoreis = Category::all();
        return view('Admin.product.create', compact('categoreis'));
    }

    public function store(StoreProduct $request)
    {
        $inputs = $request->all();

        if($request->has('image'))
        {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $inputs['image'] = $filename;
        }

        if(Product::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }
}
