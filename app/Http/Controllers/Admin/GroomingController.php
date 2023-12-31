<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grooming;
use Illuminate\Support\Facades\File;

class GroomingController extends Controller
{
    public function index()
    {
        $dataGrooming = Grooming::all();
        return view('admin.grooming.index', compact('dataGrooming'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'image' => 'nullable|mimes:png,jpeg,jpg|max:2048',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);

        $image = $request->file('image');
        $filename = date('Y-m-d') . $image->getClientOriginalName();

        $image->move(public_path('grooming-image'), $filename);

        $data['image'] = $filename;
        $data['deskripsi'] = $request->deskripsi;
        $data['harga'] = $request->harga;

        // Create a new user
        $kamar = Grooming::create($data);

        // Redirect to the index page or show a success message
        return redirect()->route('grooming')->with('success', 'User created successfully');
    }

    public function update(Request $request, Grooming $grooming)
    {
        // Validate the request data
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'mimes:png,jpeg,jpg|max:2048'
            ]);

            $image = $request->file('image');
            $filename = date('Y-m-d') . $image->getClientOriginalName();

            $image->move(public_path('grooming-image'), $filename);

            $data_image = Grooming::where('id', $grooming->id)->first();
            File::delete(public_path('grooming-image') . '/' . $data_image->image);

            $data['image'] = $filename;
        }

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
        return redirect()->route('grooming')->with('success', 'Kucing deleted successfully');
    }

}
