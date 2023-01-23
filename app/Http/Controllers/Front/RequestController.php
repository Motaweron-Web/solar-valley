<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuote;
use Illuminate\Http\Request;
use App\Models\Quote;

class RequestController extends Controller
{
    public function index()
    {
        return view('Front.request');
    }

    public function store(StoreQuote $storeQuote)
    {
        $inputs = $storeQuote->all();

        if(Quote::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }
}
