<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Reservasi;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class ReservasiController extends Controller
{
    public function index()
    {
        $dataUser = User::all();
        $dataKamar = Kamar::all();
        $dataReservasi = Reservasi::latest()->paginate(3);
        return view('admin.informasireservasi.index', compact('dataKamar', 'dataReservasi', 'dataUser'));
    }

    public function add()
    {
        $dataUser = User::all();
        $dataKamar = Kamar::all();
        $dataReservasi = Reservasi::all();
        return view('admin.informasireservasi.add', compact('dataKamar', 'dataReservasi', 'dataUser'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'id_customer' => 'required',
            'id_kamar' => 'required',
            'jumlah_kucing' => 'required|integer|max:2',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

        $existingReservation = Reservasi::where('id_customer', $request->id_customer)
            ->where('status', 'Belum Bayar')
            ->first();

        if ($existingReservation) {
            // Handle case where user has an existing reservation with "Belum Dibayar" status
            Alert::error('Gagal!', 'Anda sudah memiliki reservasi dengan status pembayaran "Belum Dibayar".')->persistent(true);
            return redirect()->back();
        }

        $kamar = Kamar::find($request->id_kamar);

        if ($kamar && $request->jumlah_kucing > 0) {

            $tanggalCheckIn = \Carbon\Carbon::parse($request->check_in);
            $tanggalCheckOut = \Carbon\Carbon::parse($request->check_out);

            $selisihHari = $tanggalCheckIn->diffInDays($tanggalCheckOut);

            $data['total'] = $request->jumlah_kucing * $kamar->harga * $selisihHari;
        } else {

            $data['total'] = 0;
        }

        $data['id_customer'] = $request->input('id_customer');
        $data['id_kamar'] = $request->input('id_kamar');
        $data['jumlah_kucing'] = $request->input('jumlah_kucing');
        $data['check_in'] = $request->input('check_in');
        $data['check_out'] = $request->input('check_out');

        // Create a new user
        $reservasi = Reservasi::create($data);

        if (auth()->user()->role->name == 'admin') {
            Alert::success('Berhasil!', 'Reservasi berhasil ditambahkan!');
            return redirect()->route('reservasi');
        } else {
            Alert::success('Berhasil!', 'Reservasi berhasil!');
            return redirect()->route('pethotel-info', ['id' => $reservasi->id_customer]);
        }
    }

    public function update(Request $request, Reservasi $reservasi)
    {
        // Validate the request data
        $request->validate([
            'id_customer' => 'required',
            'id_kamar' => 'required',
            'jumlah_kucing' => 'required|integer|max:2',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        $data['id_customer'] = $request->id_customer;
        $data['id_kamar'] = $request->id_kamar;
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
