<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumen= Dokumen::where('user_id', Auth::user()->id)->first();
        if($dokumen){
            return view('dokumen.index', compact('dokumen'));
        }else{
            return view('dokumen.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kartu_keluarga' => 'required|mimes:jpg,jpeg,png',
            'akta_kelahiran' => 'required|mimes:jpg,jpeg,png',
            'ktp_ayah' => 'required|mimes:jpg,jpeg,png',
            'ktp_ibu' => 'required|mimes:jpg,jpeg,png',
        ]);
        $model = new Dokumen();
        $model->user_id = Auth::user()->id;
        $model->kartu_keluarga = $request->file('kartu_keluarga')->store('FotoKartuKeluarga', 'public');
        $model->akta_kelahiran = $request->file('akta_kelahiran')->store('FotoAktaKelahiran', 'public');
        $model->ktp_ayah = $request->file('ktp_ayah')->store('FotoKTPAyah', 'public');
        $model->ktp_ibu = $request->file('ktp_ibu')->store('FotoKTPIbu', 'public');
        $model->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokumen $dokumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokumen $dokumen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokumen $dokumen)
    {
        //
    }
}
