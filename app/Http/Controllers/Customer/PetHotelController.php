<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kamar;

class PetHotelController extends Controller
{
    public function index()
    {
        $dataKamar = Kamar::all();
        return view('customer.pethotel', compact('dataKamar'));
    }

    public function detail($id)
    {
        $detail = Kamar::where('id', $id)->first();
        return view('customer.detailkamar', compact('detail'));
    }
}
