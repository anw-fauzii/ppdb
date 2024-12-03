<?php

namespace App\Http\Controllers;

use App\Exports\FormulirExport;
use App\Models\Formulir;
use App\Models\Kategori;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::where('user_id', Auth::user()->id)->first();
        if($pendaftaran){
            $formulir= Formulir::where('user_id', Auth::user()->id)->first();
            if($formulir){
                return view('formulir.index', compact('formulir'));
            }else{
                return view('formulir.create');
            }
            
        }else{
            return redirect()->route('daftar.index')->with('warning', 'Isi terlebih dahulu tingkat pendaftaran');
        }
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
        $validated['agama'] = "1";
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
        $validated['agama'] = "1";
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

    public function exportFormulir($id)
    {
        $kategori = Kategori::findOrFail($id);
        return Excel::download(new FormulirExport($id), 'Formulir PPDB_' . $kategori->nama_kategori . '.xlsx');
    }
}
