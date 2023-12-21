<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PethotelController extends Controller
{
    public function index()
    {
        return view('pethotel');
    }
}
