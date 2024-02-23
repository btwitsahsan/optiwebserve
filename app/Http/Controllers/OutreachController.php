<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutreachController extends Controller
{
    public function index()
    {
        return view('services.outReach');
    }
}
