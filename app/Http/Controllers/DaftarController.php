<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pendaftaran;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahun_ajaran = TahunAjaran::latest()->first();
        $pendaftaran = Pendaftaran::whereTahunAjaranId($tahun_ajaran->id)->whereUserId(Auth::user()->id)->first();
        dd($pendaftaran);
        $kategori = Kategori::whereStatus(TRUE)->get();
        return view('pendaftaran.index', compact('tahun_ajaran','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tahun_ajaran = TahunAjaran::latest()->first();
        $validated = $request->validate([
            'kategori_id' => 'required'
        ]);
        $validated['user_id'] = Auth::user()->id;
        $validated['tahun_ajaran_id'] = $tahun_ajaran->id;
        Pendaftaran::create($validated);
        return redirect()->route('dashboard')->with('success', 'Pendaftaran Berhasil Diajukan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
