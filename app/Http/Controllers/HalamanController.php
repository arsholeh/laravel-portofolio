<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halaman = Halaman::all();
        return view('dashboard.halaman.index', compact('halaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.halaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('judul', $request->judul);
        Session::flash('isi', $request->isi);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',

        ], [
            'judul.required' => 'Judul wajib diisi',
            'isi.required' => 'Tulisan wajib diisi'
        ]);

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi
        ];

        Halaman::create($data);

        return redirect()->route('halaman.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $halaman = Halaman::where('id', $id)->first();
        return view('dashboard.halaman.edit', compact('halaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',

        ], [
            'judul.required' => 'Judul wajib diisi',
            'isi.required' => 'Tulisan wajib diisi'
        ]);

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi
        ];

        $halaman = Halaman::findOrFail($id);
        $halaman->update($data);

        return redirect()->route('halaman.index')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $halaman = Halaman::findOrFail($id);
        $halaman->delete();

        return redirect()->route('halaman.index')->with('success', 'Berhasil menghapus data');
    }
}
