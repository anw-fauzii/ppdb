<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formulir= Formulir::where('user_id', Auth::user()->id)->first();
        return view('formulir.index', compact('formulir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formulir= Formulir::where('user_id', Auth::user()->id)->first();
        if($formulir){
            return view('formulir.edit',compact('formulir'));
        }else{
            return view('formulir.create');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'jumlah_saudara' => 'required',
            'anak_ke' => 'required',
            'asal_sekolah' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'jenis_tinggal' => 'required',
            'penerima_pks' => 'required',
            'kewarganegaraan' => 'required',
            'telepon' => 'required',
            'whatsapp' => 'required',
        ]);
        $validated['user_id'] = Auth::user()->id;
        Formulir::create($validated);
        return redirect()->route('data-ortu.index')->with('success', 'Sekarang isi identisas Orangtua/Wali');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulir $formulir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulir $formulir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'jumlah_saudara' => 'required',
            'anak_ke' => 'required',
            'asal_sekolah' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'jenis_tinggal' => 'required',
            'penerima_pks' => 'required',
            'kewarganegaraan' => 'required',
            'telepon' => 'required',
            'whatsapp' => 'required',
        ]);
        $formulir = Formulir::where('user_id', Auth::user()->id)->firstOrFail();
        $formulir->update($validated);
        return redirect()->route('data-ortu.index')->with('success', 'Sekarang isi identisas Orangtua/Wali');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulir $formulir)
    {
        //
    }
}
