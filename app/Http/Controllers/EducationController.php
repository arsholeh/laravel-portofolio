<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
{

    protected $_tipe;
    function __construct()
    {
        $this->_tipe = 'education';
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Riwayat::where('tipe', $this->_tipe)->orderBy('tgl_akhir', 'desc')->get();
        return view('dashboard.education.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('info1', $request->info1);
        Session::flash('info2', $request->info2);
        Session::flash('info3', $request->info3);
        Session::flash('tgl_mulai', $request->tgl_mulai);
        Session::flash('tgl_akhir', $request->tgl_akhir);

        $request->validate([
            'judul' => 'required',
            'info1' => 'required',
            'tgl_mulai' => 'required',

        ], [
            'judul.required' => 'Judul wajib diisi',
            'info1' => 'Nama Perusahaan wajib diisi',
            'tgl_mulai.required' => 'Tanggal Mulai wajib diisi',
        ]);

        $data = [
            'judul' => $request->judul,
            'info1' => $request->info1,
            'info2' => $request->info2,
            'info3' => $request->info3,
            'tipe' => $this->_tipe,
            'tgl_akhir' => $request->tgl_akhir,
            'tgl_mulai' => $request->tgl_mulai,
        ];

        Riwayat::create($data);

        return redirect()->route('education.index')->with('success', 'Berhasil menambahkan data education');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Riwayat::where('id', $id)->where('tipe', $this->_tipe)->first();

        return view('dashboard.education.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Session::flash('judul', $request->judul);
        Session::flash('info1', $request->info1);
        Session::flash('info2', $request->info2);
        Session::flash('info3', $request->info3);
        Session::flash('tgl_mulai', $request->tgl_mulai);
        Session::flash('tgl_akhir', $request->tgl_akhir);

        $request->validate([
            'judul' => 'required',
            'info1' => 'required',
            'tgl_mulai' => 'required',

        ], [
            'judul.required' => 'Judul wajib diisi',
            'info1' => 'Nama Perusahaan wajib diisi',
            'tgl_mulai.required' => 'Tanggal Mulai wajib diisi',
        ]);

        $data = [
            'judul' => $request->judul,
            'info1' => $request->info1,
            'info2' => $request->info2,
            'info3' => $request->info3,
            'tipe' => $this->_tipe,
            'tgl_akhir' => $request->tgl_akhir,
            'tgl_mulai' => $request->tgl_mulai,
        ];

        Riwayat::where('id', $id)->where('tipe', $this->_tipe)->update($data);

        return redirect()->route('education.index')->with('success', 'Berhasil melakukan update data experience');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Riwayat::where('id', $id)->where('tipe', $this->_tipe)->delete();

        return redirect()->route('education.index')->with('success', 'Berhasil menghapus data experience');
    }
}
