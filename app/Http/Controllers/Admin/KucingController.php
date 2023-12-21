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
        $kucing = Kucing::all();
        $kondisi = Kondisi::all();
        $jenis = Jenis::all();
        return view('admin.kucing.index', compact('kucing', 'kondisi', 'jenis'));
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
        $user = Kucing::create($request->all());

        // Redirect to the index page or show a success message
        return redirect()->route('user')->with('success', 'User created successfully');
    }
}
