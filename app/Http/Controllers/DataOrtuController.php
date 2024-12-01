<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataOrtuController extends Controller
{
    public function index(){
        $formulir= Formulir::where('user_id', Auth::user()->id)->first();
        return view('data-ortu.create',compact('formulir'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik_ayah' => 'required',
            'nama_ayah' => 'required',
            'lahir_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nik_ibu' => 'required',
            'nama_ibu' => 'required',
            'lahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
        ]);

        $formulir = Formulir::where('user_id', Auth::user()->id)->firstOrFail();
        $validated['nama_wali'] = $request->nama_wali;
        $validated['nik_wali'] = $request->nik_wali;
        $validated['pekerjaan_wali'] = $request->pekerjaan_wali;
        $validated['lahir_wali'] = $request->lahir_wali;
        $validated['pekerjaan_wali'] = $request->pekerjaan_wali;
        $validated['penghasilan_wali'] = $request->penghasilan_wali;
        if ($formulir) {
            $formulir->update($validated);
            return redirect()->route('dokumen.index')->with('success', 'Formulir Berhasil disimpan!');
        } else {
            return redirect()->route('formulir.index')->with('error', 'Data Orang Tua tidak ditemukan!');
        }
    }

}
