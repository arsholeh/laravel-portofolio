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
}
