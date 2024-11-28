<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahun_ajaran = TahunAjaran::all();
        return view('admin.tahun-ajaran.index', compact('tahun_ajaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tahun-ajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_tahun_ajaran' => 'required',
        ]);
        $validated['tahun_pendaftaran'] = str_replace('-','',$request->input('nama_tahun_ajaran'));
        $validated['status'] = FALSE;
        TahunAjaran::create($validated);
        return redirect()->route('tahun-ajaran.index')->with('success', 'Tahun ajaran baru berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tahun_ajaran = TahunAjaran::findOrFail($id);
        if($tahun_ajaran->status == FALSE){
            $tahun_ajaran->update([
                'status' => TRUE
            ]);
            return redirect()->route('tahun-ajaran.index')->with('success', 'Tahun ajaran baru berhasil dibuka');
        }else{
            $tahun_ajaran->update([
                'status' => FALSE
            ]);
            return redirect()->route('tahun-ajaran.index')->with('success', 'Tahun ajaran baru berhasil ditutup');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tahun_ajaran = TahunAjaran::findOrFail($id);
        return view('admin.tahun-ajaran.edit', compact('tahun_ajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_tahun_ajaran' => 'required',
        ]);
        $validated['tahun_pendaftaran'] = str_replace('-','',$request->input('nama_tahun_ajaran'));
        $validated['status'] = FALSE;
        $tahun_ajaran = TahunAjaran::findOrFail($id);
        $tahun_ajaran->update($validated);
        return redirect()->route('tahun-ajaran.index')->with('success', 'Tahun ajaran baru berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tahun_ajaran = TahunAjaran::findOrFail($id);
        $tahun_ajaran->delete();
        return redirect()->route('tahun-ajaran.index')->with('success', 'Tahun ajaran baru berhasil dihapus');
    }
}
