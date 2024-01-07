<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Grooming;
use App\Models\Reservasi;

class PetHotelController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $dataKamar = Kamar::all();
        $dataGrooming = Grooming::all();
        return view('customer.pethotel', compact('dataKamar', 'dataGrooming'));
    }

    public function detail($id)
    {
        $detail = Kamar::where('id', $id)->first();
        return view('customer.detailkamar', compact('detail'));
    }

    public function info($id)
    {
        $info = Reservasi::where('id_customer', auth()->id())->latest()->first();
        return view('customer.inforeservasi', compact('info'));
        // return view('customer.template.navlink', compact('info'));
    }
}
