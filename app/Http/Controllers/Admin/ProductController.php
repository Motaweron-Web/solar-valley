<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Models\Category;
use App\Models\Product;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    use PhotoTrait;
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::select('*');
            return DataTables::of($products)
                ->addColumn('action', function ($products) {
                    return '
                            <button type="button" data-id="' . $products->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $products->id . '" data-title="' . $products->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin.product.index');
        }
    }

    public function create()
    {
        $products = Product::get();
        $ids = ($products->count() > 0) ? Product::latest()->first()->id + 1 : 1;
        $sku = "00" . $ids;
        $categoreis = Category::get();
        return view('Admin.product.create', compact('categoreis', 'products', 'sku'));
    }

    public function store(StoreProduct $request)
    {
        $inputs = $request->all();

        if($request->has('files')){
            foreach($request->file('files') as $file)
            {
                $inputs['images'][] = $this->saveImage($file,'assets/uploads/products','photo');
            }
        }
        unset($inputs['files']);
//        dd($inputs);

        $tags = [];
        if ($request->has('tags') && $request->tags != null) {
            foreach ($request->tags as $tag) {
                $tags[] = $tag;
            }
        }
        $inputs['tags'] = json_encode($tags);

        if (Product::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Product $product)
    {
        $categoreis = Category::get();
        return view('Admin.product.edit', compact('product', 'categoreis'));
    }

    public function update(StoreProduct $request)
    {
        $product = Product::findOrFail($request->id);

        $inputs = $request->all();

        if ($request->has('image')) {

            if (file_exists(public_path('assets/uploads/admins/images/') . $product->image)) {
                unlink(('assets/uploads/admins/images/') . $product->image);
            }
            $inputs['image'] = $request->image != null ? $this->saveImage($request->image, 'assets/uploads/admins/images') : $inputs['image'];
        }

        $tags = [];
        if ($request->has('tags') && $request->tags != null) {

            foreach ($request->tags as $tag) {

                $tags = $tag;

            }
        }


        $inputs['tags'] = $request->tags != null ? json_encode($tags) : $product->tags;

        if ($product->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }

    public function destroy(Request $request)
    {
        $categories = Product::where('id', $request->id)->first();
        $categories->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
