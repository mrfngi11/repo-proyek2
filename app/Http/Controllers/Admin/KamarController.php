<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kamar;
use Illuminate\Support\Facades\File;

class KamarController extends Controller
{
    public function index()
    {
        $dataKamar = Kamar::all();
        return view('admin.kamar.index', compact('dataKamar'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'no_kamar' => 'required|string|max:15',
            'image' => 'nullable|mimes:png,jpeg,jpg|max:2048',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);


        $image = $request->file('image');

        if ($image) {
            $filename = time() . '-' .  $image->getClientOriginalName();
            $image->move(public_path('kamar-image'), $filename);
        }

        $data['no_kamar'] = $request->no_kamar;
        $data['image'] = $filename;
        $data['deskripsi'] = $request->deskripsi;
        $data['harga'] = $request->harga;

        // Create a new user
        $kamar = Kamar::create($data);



        // Redirect to the index page or show a success message
        return redirect()->route('kamar')->with('success', 'User created successfully');
    }

    public function update(Request $request, Kamar $kamar)
    {
        // Validate the request data
        $request->validate([
            'no_kamar' => 'required|string|max:15',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'mimes:png,jpeg,jpg|max:2048'
            ]);

            $oldImagePath = public_path('kamar-image') . '/' . $kamar->image;

            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Hapus gambar lama jika ada
            }

            $image = $request->file('image');
            $filename = time() . '-' . $image->getClientOriginalName();

            $image->move(public_path('kamar-image'), $filename);

            $data_image = Kamar::where('no_kamar', $kamar->no_kamar)->first();
            File::delete(public_path('kamar-image') . '/' . $data_image->image);

            $data['image'] = $filename;
        }

        $data['no_kamar'] = $request->no_kamar;
        $data['deskripsi'] = $request->deskripsi;
        $data['harga'] = $request->harga;

        // Update the user
        Kamar::where('no_kamar', $kamar->no_kamar)->update($data);

        // Redirect with success message
        return redirect()->route('kamar')->with('success', 'Kucing updated successfully');
    }

    public function destroy(Kamar $kamar)
    {
        // Delete the user
        $data = Kamar::where('no_kamar', $kamar->no_kamar)->first();
        File::delete(public_path('kamar-image') . '/' . $data->image);

        Kamar::where('no_kamar', $kamar->no_kamar)->delete();


        // Redirect to the index page or show a success message
        return redirect()->route('kamar')->with('success', 'Kucing deleted successfully');
    }
}
