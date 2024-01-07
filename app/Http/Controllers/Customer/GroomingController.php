<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grooming;
use App\Models\Kondisi;
use App\Models\Jenis;
use App\Models\Layanan;
use App\Models\Kamar;
use App\Models\Pesan;

class GroomingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $dataGrooming = Grooming::all();
        $dataKondisi = Kondisi::all();
        $dataJenis = Jenis::all();
        $dataLayanan = Layanan::all();
        $dataKamar = Kamar::all();
        return view('customer.grooming', compact('dataGrooming', 'dataKondisi', 'dataJenis', 'dataLayanan', 'dataKamar'));
    }

    public function detail($id)
    {
        $dataKondisi = Kondisi::all();
        $dataJenis = Jenis::all();
        $dataLayanan = Layanan::all();
        $detail = Grooming::where('id', $id)->first();
        return view('customer.detailgrooming', compact('detail', 'dataKondisi', 'dataJenis', 'dataLayanan'));
    }

    public function info($id)
    {
        $info = Pesan::where('id', $id)->first();

        return view('customer.infopesan', compact('info'));
    }

    public function nav($id)
    {
        $info = Pesan::where('id_customer', auth()->id())->first();
        return view('customer.template.navlink', compact('info'));
    }
}
