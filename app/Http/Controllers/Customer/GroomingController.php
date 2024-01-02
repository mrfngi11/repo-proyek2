<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grooming;
use App\Models\Kondisi;
use App\Models\Jenis;
use App\Models\Layanan;

class GroomingController extends Controller
{
    public function index()
    {
        $dataGrooming = Grooming::all();
        $dataKondisi = Kondisi::all();
        $dataJenis = Jenis::all();
        $dataLayanan = Layanan::all();
        return view('customer.grooming', compact('dataGrooming', 'dataKondisi', 'dataJenis', 'dataLayanan'));
    }

    public function detail($id)
    {
        $dataKondisi = Kondisi::all();
        $dataJenis = Jenis::all();
        $dataLayanan = Layanan::all();
        $detail = Grooming::where('id', $id)->first();
        return view('customer.detailgrooming', compact('detail', 'dataKondisi', 'dataJenis', 'dataLayanan'));
    }
}
