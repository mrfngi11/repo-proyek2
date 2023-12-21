<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroomingController extends Controller
{
    public function index()
    {
        return view('grooming');
    }
}
