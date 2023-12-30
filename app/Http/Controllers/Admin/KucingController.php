<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kucing;
use App\Models\Kondisi;
use App\Models\Jenis;

class KucingController extends Controller
{
    public function index()
    {
        $dataKucing = Kucing::all();
        $dataKondisi = Kondisi::all();
        $dataJenis = Jenis::all();
        return view('admin.kucing.index', compact('dataKucing', 'dataKondisi', 'dataJenis'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'kucing_nama' => 'required|string|max:255',
            'id_kondisi' => 'nullable|exists:kondisi,id',
            'id_jenis' => 'nullable|exists:jenis,id',
        ]);

        // Create a new user
        $kucing = Kucing::create($request->all());

        // Redirect to the index page or show a success message
        return redirect()->route('kucing')->with('success', 'User created successfully');
    }

    public function update(Request $request, Kucing $kucing)
    {
        // Validate the request data
        $request->validate([
            'kucing_nama' => 'required|string|max:255',
            'id_kondisi' => 'nullable|exists:kondisi,id',
            'id_jenis' => 'nullable|exists:jenis,id',
        ]);

        // Check if the email has been modified

    // Update the user
    $kucing->update($request->all());

    // Redirect with success message
    return redirect()->route('kucing')->with('success', 'Kucing updated successfully');

        // Update the user
        $kucing->update($request->all());

        // Redirect to the index page or show a success message
        return redirect()->route('user', ['user' => $kucing->id])->with('success', 'Kucing updated successfully');
    }

    public function destroy(Kucing $kucing)
    {
        // Delete the user
        $kucing->delete();

        // Redirect to the index page or show a success message
        return redirect()->route('kucing')->with('success', 'Kucing deleted successfully');
    }
}
