<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kondisi;
use App\Models\Jenis;
use App\Models\Pesan;
use App\Models\User;
use App\Models\Grooming;
use App\Models\Keterangan;
use PhpParser\Node\Expr\New_;
use RealRashid\SweetAlert\Facades\Alert;

class PesanController extends Controller
{
    public function index()
    {
        $dataKondisi = Kondisi::all();
        $dataJenis = Jenis::all();
        $dataPesan = Pesan::latest()->paginate(3);
        $dataUser = User::all();
        $dataGrooming = Grooming::all();
        $dataKeterangan = Keterangan::all();
        return view('admin.informasipesan.index', compact('dataKondisi', 'dataJenis', 'dataPesan', 'dataGrooming', 'dataUser', 'dataKeterangan'));
    }

    public function add()
    {
        $dataKondisi = Kondisi::all();
        $dataJenis = Jenis::all();
        $dataPesan = Pesan::all();
        $dataUser = User::all();
        $dataGrooming = Grooming::all();
        $dataKeterangan = Keterangan::all();
        return view('admin.informasipesan.add', compact('dataKondisi', 'dataJenis', 'dataPesan', 'dataUser', 'dataGrooming', 'dataKeterangan'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'id_customer' => 'required',
            'kucing_nama' => 'required|string|max:100',
            'id_grooming' => 'required|exists:grooming,id',
            'id_kondisi' => 'nullable|exists:kondisi,id',
            'id_jenis' => 'nullable|exists:jenis,id',
            'id_keterangan' => 'nullable|exists:keterangan,id',
            'kucing_berat' => 'required|integer|max:25',
            'total' => 'required',
        ]);

        $keterangan = New Keterangan();

        if ($request->kucing_berat <= 2) {
            $id = $keterangan->id = 3;
            $data['id_keterangan'] = $id;
        }elseif ($request->kucing_berat > 6) {
            $id = $keterangan->id = 1;
            $data['id_keterangan'] = $id;
        }else {
            $id = $keterangan->id = 2;
            $data['id_keterangan'] = $id;
        }

        $grooming = Grooming::find($request->id_grooming);

        if ($grooming && $data['id_keterangan'] == 3) {

            $data['total'] = $grooming->harga;

        }elseif ($grooming && $data['id_keterangan'] == 1) {

            $data['total'] = $grooming->harga + 20000;

        }else {
            $data['total'] = $grooming->harga + 10000;
        }

        $data['id_customer'] = $request->input('id_customer');
        $data['kucing_nama'] = $request->input('kucing_nama');
        $data['id_grooming'] = $request->input('id_grooming');
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
            return redirect()->route('groooming-info', ['id_customer' => $pesan->id_customer]);
        }
        // Redirect to the index page or show a success message
        
    }

    public function update(Request $request, Pesan $pesan)
    {
        // Validate the request data for Pesan
        $request->validate([
            'id_customer' => 'required',
            'id_grooming' => 'required',
            'kucing_nama' => 'required',
            'id_kondisi' => 'nullable|exists:kondisi,id',
            'id_jenis' => 'nullable|exists:jenis,id',
            'kucing_berat' => 'required|integer|max:20',
        ]);

        // Update data for Pesan model
        $data['id_customer'] = $request->id_customer;
        $data['kucing_nama'] = $request->kucing_nama;
        $data['id_grooming'] = $request->id_grooming;
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
