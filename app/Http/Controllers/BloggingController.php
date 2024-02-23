<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloggingController extends Controller
{
    public function index()
    {
        return view('services.blogging');
    }
}
