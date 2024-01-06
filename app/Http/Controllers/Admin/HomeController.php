<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Pesan;
use App\Models\Reservasi;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dataUser = User::all();
        $dataReservasi = Reservasi::all();
        $dataPesan = Pesan::all();
        return view('admin/home', compact('dataUser', 'dataReservasi', 'dataPesan'));
    }
}
