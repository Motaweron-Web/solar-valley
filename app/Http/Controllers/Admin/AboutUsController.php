<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAbout;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

class AboutUsController extends Controller
{

    public function index()
    {
        $about_us = AboutUs::find(1);
        return view('Admin.about_us.index', compact('about_us'));
        // if($request->ajax()) {
        //     $about_us = AboutUs::select('*');
        //     return DataTables::of( $about_us)
        //         ->addColumn('action', function ($about_us) {
        //             return '
        //                     <button type="button" data-id="' . $about_us->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-edit"></i></button>
        //                     <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
        //                             data-id="' . $about_us->id . '" data-title="' . $about_us->name . '">
        //                             <i class="fas fa-trash"></i>
        //                     </button>
        //                ';
        //         })
        //         ->escapeColumns([])
        //         ->make(true);
        // }else{
        //     return view('Admin.about_us.index');
        // }
    }

    public function show()
    {
        return view('Admin.about_us.index');
    }

    public function update(StoreAbout $request, AboutUs $about_us)
    {
        try {
            if ($about_us->where('id', $request->id)->update($request->except('_token', '_method'))) {
                return response()->json(['status' => 200]);

            }
        } catch (\Exception $exception) {

            return response()->json(['status' => 405]);

        }
    }
}
