<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grooming;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class GroomingController extends Controller
{
    public function index()
    {
        $dataGrooming = Grooming::paginate(2);
        return view('admin.grooming.index', compact('dataGrooming'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'grooming_nama' => 'required|string|max:255',
            'image' => 'nullable|mimes:png,jpeg,jpg|max:2048',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);

        $image = $request->file('image');
        $filename = date('Y-m-d') . $image->getClientOriginalName();

        $image->move(public_path('grooming-image'), $filename);

        $data['image'] = $filename;
        $data['grooming_nama'] = $request->grooming_nama;
        $data['deskripsi'] = $request->deskripsi;
        $data['harga'] = $request->harga;

        // Create a new user
        $kamar = Grooming::create($data);

        // Redirect to the index page or show a success message
        Alert::success('Berhasil!', 'Grooming berhasil ditambahkan!');
        return redirect()->route('grooming');
    }

    public function update(Request $request, Grooming $grooming)
    {
        // Validate the request data
        $request->validate([
            'grooming_nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'mimes:png,jpeg,jpg|max:2048'
            ]);

            $oldImagePath = public_path('grooming-image') . '/' . $grooming->image;

            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Hapus gambar lama jika ada
            }

            $image = $request->file('image');
            $filename = time() . '-' . $image->getClientOriginalName();

            $image->move(public_path('grooming-image'), $filename);

            $data_image = Grooming::where('id', $grooming->id)->first();
            File::delete(public_path('grooming-image') . '/' . $data_image->image);

            $data['image'] = $filename;
        }

        $data['grooming_nama'] = $request->grooming_nama;
        $data['deskripsi'] = $request->deskripsi;
        $data['harga'] = $request->harga;

        // Update the user
        Grooming::where('id', $grooming->id)->update($data);

        // Redirect with success message
        return redirect()->route('grooming')->with('success', 'Grooming updated successfully');
    }

    public function destroy(Grooming $grooming)
    {
        // Delete the user
        $data = Grooming::where('id', $grooming->id)->first();
        File::delete(public_path('grooming-image') . '/' . $data->image);

        Grooming::where('id', $grooming->id)->delete();


        // Redirect to the index page or show a success message
        Alert::success('Sukses!', 'Data Grooming berhasil dihapus!');
        return redirect()->route('grooming');
    }
}
