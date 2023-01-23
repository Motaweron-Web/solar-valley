<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;
use Yajra\DataTables\Facades\DataTables;

class QuoteController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $quotes = Quote::select('*');
            return DataTables::of($quotes)
                ->addColumn('action', function ( $quotes) {
                    return '
                            <button type="button" data-id="' .  $quotes->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' .  $quotes->id . '" data-title="' .  $quotes->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.quote.index');
        }
    }

    public function edit(Quote $quote)
    {
        return view('Admin.quote.show', compact('quote'));
    }
}
