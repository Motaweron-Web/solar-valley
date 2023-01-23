<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Setting;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::get();
        $settings = Setting::get();
        return view('Front.service', compact('services', 'settings'));
    }
}
