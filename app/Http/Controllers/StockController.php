<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{

    public function index()
    {
        return view('Official-Content/Stock');
    }

    public function wood()
    {
        return view('Official-Content/Stock/wood');
    }

    public function plastic()
    {
        return view('Official-Content/Stock/plastic');
    }

    public function concrete()
    {
        return view('Official-Content/Stock/concrete');
    }

    public function metal()
    {
        return view('Official-Content/Stock/metal');
    }

    public function others()
    {
        return view('Official-Content/Stock/others');
    }
}
