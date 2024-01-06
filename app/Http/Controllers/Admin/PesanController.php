<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kondisi;
use App\Models\Jenis;
use App\Models\Pesan;
use App\Models\User;
use App\Models\Layanan;
use RealRashid\SweetAlert\Facades\Alert;

class PesanController extends Controller
{
    public function index()
    {
        $dataKondisi = Kondisi::all();
        $dataJenis = Jenis::all();
        $dataPesan = Pesan::latest()->paginate(3);
        $dataUser = User::all();
        $dataLayanan = Layanan::all();
        return view('admin.informasipesan.index', compact('dataKondisi', 'dataJenis', 'dataPesan', 'dataLayanan', 'dataUser'));
    }

    public function add()
    {
        $dataKondisi = Kondisi::all();
        $dataJenis = Jenis::all();
        $dataPesan = Pesan::all();
        $dataUser = User::all();
        $dataLayanan = Layanan::all();
        return view('admin.informasipesan.add', compact('dataKondisi', 'dataJenis', 'dataPesan', 'dataUser', 'dataLayanan'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'id_customer' => 'required',
            'kucing_nama' => 'required|string|max:100',
            'id_layanan' => 'required|exists:layanan,id',
            'id_kondisi' => 'nullable|exists:kondisi,id',
            'id_jenis' => 'nullable|exists:jenis,id',
            'kucing_berat' => 'required|integer|max:20',
        ]);


        $data['id_customer'] = $request->input('id_customer');
        $data['kucing_nama'] = $request->input('kucing_nama');
        $data['id_layanan'] = $request->input('id_layanan');
        $data['id_kondisi'] = $request->input('id_kondisi');
        $data['id_jenis'] = $request->input('id_jenis');
        $data['kucing_berat'] = $request->input('kucing_berat');


        // Create a new user
        $pesan = Pesan::create($data);


        if (auth()->user()->role->name == 'admin') {
            Alert::success('Berhasil!', 'Pesanan berhasil ditambahkan!');
            return redirect()->route('pesan');
        }else {
            Alert::success('Sukses!', 'Pesan Grooming berhasil!');
            return redirect()->route('home-customer');
        }
        // Redirect to the index page or show a success message
        
    }

    public function update(Request $request, Pesan $pesan)
    {
        // Validate the request data for Pesan
        $request->validate([
            'id_customer' => 'required',
            'id_layanan' => 'required',
            'kucing_nama' => 'required',
            'id_kondisi' => 'nullable|exists:kondisi,id',
            'id_jenis' => 'nullable|exists:jenis,id',
            'kucing_berat' => 'required|integer|max:20',
        ]);

        // Update data for Pesan model
        $data['id_customer'] = $request->id_customer;
        $data['kucing_nama'] = $request->kucing_nama;
        $data['id_layanan'] = $request->id_layanan;
        $data['id_kondisi'] = $request->id_kondisi;
        $data['id_jenis'] = $request->id_jenis;
        $data['kucing_berat'] = $request->kucing_berat;

        $pesan->where('id', $pesan->id)->update($data);


        // Redirect with success message
        Alert::success('Berhasil!', 'Data Pesanan berhasil diperbarui!');
        return redirect()->route('pesan');
    }

    public function destroy(Pesan $pesan)
    {
        // Hapus data Pesan berdasarkan id
        $pesan->where('id', $pesan->id)->delete();

        // Redirect dengan pesan sukses
        Alert::success('Sukses!', 'Data Pesan berhasil dihapus!');
        return redirect()->route('pesan');
    }
}
