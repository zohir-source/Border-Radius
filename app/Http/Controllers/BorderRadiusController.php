<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorderRadiusController extends Controller
{
    public function index()
    {
        return view('border-radius.index');
    }
}