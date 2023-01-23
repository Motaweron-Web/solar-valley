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
