<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Reservasi;
use App\Models\Tipe;
use RealRashid\SweetAlert\Facades\Alert;

class ReservasiController extends Controller
{
    public function index()
    {
        $dataUser = User::all();
        $dataKamar = Kamar::all();
        $dataTipe = Tipe::all();
        $dataReservasi = Reservasi::latest()->paginate(3);
        return view('admin.informasireservasi.index', compact('dataKamar', 'dataReservasi', 'dataUser', 'dataTipe'));
    }

    public function add()
    {
        $dataUser = User::all();
        $dataKamar = Kamar::all();
        $dataTipe = Tipe::all();
        $dataReservasi = Reservasi::all();
        return view('admin.informasireservasi.add', compact('dataKamar', 'dataReservasi', 'dataUser', 'dataTipe'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'id_customer' => 'required',
            'id_kamar' => 'required',
            'id_tipe' => 'required',
            'jumlah_kucing' => 'required|integer|max:2',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        $data['id_customer'] = $request->input('id_customer');
        $data['id_kamar'] = $request->input('id_kamar');
        $data['id_tipe'] = $request->input('id_tipe');
        $data['jumlah_kucing'] = $request->input('jumlah_kucing');
        $data['check_in'] = $request->input('check_in');
        $data['check_out'] = $request->input('check_out');

        // Create a new user
        $reservasi = Reservasi::create($data);

        if (auth()->user()->role->name == 'admin') {
            Alert::success('Berhasil!', 'Reservasi berhasil ditambahkan!');
            return redirect()->route('reservasi');
        }else {
            Alert::success('Sukses!', 'Reservasi berhasil!');
            return redirect()->route('home-customer')->with('success', 'User created successfully');
        }

    }

    public function update(Request $request, Reservasi $reservasi)
    {
        // Validate the request data
        $request->validate([
            'id_customer' => 'required',
            'id_kamar' => 'required',
            'id_tipe' => 'required',
            'jumlah_kucing' => 'required|integer|max:2',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        $data['id_customer'] = $request->id_customer;
        $data['id_kamar'] = $request->id_kamar;
        $data['id_tipe'] = $request->id_tipe;
        $data['jumlah_kucing'] = $request->jumlah_kucing;
        $data['check_in'] = $request->check_in;
        $data['check_out'] = $request->check_out;

        // Create a new user
        $reservasi->where('id', $reservasi->id)->update($data);


        // Redirect to the index page or show a success message
        return redirect()->route('reservasi')->with('success', 'User created successfully');
    }

    public function destroy(Reservasi $reservasi)
    {
        // Hapus data Pesan berdasarkan id
        $reservasi->where('id', $reservasi->id)->delete();

        // Redirect dengan pesan sukses
        Alert::success('Sukses!', 'Data Reservasi berhasil dihapus!');
        return redirect()->route('reservasi');
    }
}
