<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResupplyController extends Controller
{
    public function index()
    {
        return view('Official-Content/Resupply');
    }

    public function wood()
    {
        return view('Official-Content/Resupply/wood');
    }

    public function plastic()
    {
        return view('Official-Content/Resupply/plastic');
    }

    public function concrete()
    {
        return view('Official-Content/Resupply/concrete');
    }

    public function metal()
    {
        return view('Official-Content/Resupply/metal');
    }

    public function others()
    {
        return view('Official-Content/Resupply/others');
    }
}
