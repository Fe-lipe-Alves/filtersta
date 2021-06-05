<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function filter()
    {
        return view('apply-filter');
    }

    public function applyFilter(Request $request)
    {
        dd($request->all());
    }
}
