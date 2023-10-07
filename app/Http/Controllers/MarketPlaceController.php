<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketPlaceController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('marketplace.index');
    }

    public function details(Request $request)
    {

        return view('marketplace.details');
    }
    public function create(Request $request)
    {

        return view('marketplace.create-project');
    }
}
