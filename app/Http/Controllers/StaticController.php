<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return view('static.index');
    }

    public function list()
    {
        return view('static.list');
    }

    public function detail()
    {
        return view('static.detail');
    }
}
