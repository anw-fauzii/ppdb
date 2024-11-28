<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required',
        ]);
        $validated['status'] = FALSE;
        Kategori::create($validated);
        return redirect()->route('kategori.index')->with('success', 'Tingkat Pendidikan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        if($kategori->status == FALSE){
            $kategori->update([
                'status' => TRUE
            ]);
            return redirect()->route('kategori.index')->with('success', 'Tingkat Pendidikan berhasil dibuka');
        }else{
            $kategori->update([
                'status' => FALSE
            ]);
            return redirect()->route('kategori.index')->with('success', 'Tingkat Pendidikan berhasil ditutup');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required',
        ]);
        $validated['status'] = FALSE;
        $kategori = Kategori::findOrFail($id);
        $kategori->update($validated);
        return redirect()->route('kategori.index')->with('success', 'Tahun ajaran baru berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Tingkat Pendidikan berhasil dihapus');
    }
}