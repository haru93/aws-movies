<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index()
    {
        return view('parts.top');
    }

    public function show()
    {
        return view('parts.about', [
            "current_time" => date("Y-m-d H:i:s")
        ]);
    }
}
