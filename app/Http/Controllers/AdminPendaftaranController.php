<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Formulir;
use App\Models\Kategori;
use App\Models\Pendaftaran;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminPendaftaranController extends Controller
{
    public function index()
    {
        $total = TahunAjaran::all();
        $kategori = Kategori::all();
        $tahun_ajaran = TahunAjaran::latest()->first();
        $pendaftaran = Pendaftaran::where('tahun_ajaran_id', $tahun_ajaran->id)
            ->whereHas('formulir')->whereHas('dokumen')
            ->get();
        foreach ($pendaftaran as $p) {
            if ($p->formulir) {
                $p->formulir->nama_lengkap; 
            } else {
                $p->formulir = null;
            }
        }
        $dokumen = Dokumen::all();
        return view('admin.data-pendaftaran.index', compact('total','pendaftaran', 'dokumen','tahun_ajaran', 'kategori'));
    }

    public function show($id)
    {
        $total = TahunAjaran::all();
        $tahun_ajaran = TahunAjaran::find($id);
        $pendaftaran = Pendaftaran::where('tahun_ajaran_id', $id)->get();
        $dokumen = Dokumen::all();
        return view('admin.data-pendaftaran.index', compact('total','pendaftaran', 'dokumen','tahun_ajaran'));
    }

    public function detail($id)
    {
        $formulir= Formulir::whereUserId($id)->firstOrFail();
        return view('formulir.index', compact('formulir'));
    }

    public function edit(Request $request, $id)
    {
        $validated = $request->validate([
            'bukti_pembayaran' => 'mimes:jpg,jpeg,png',
        ]);
        $pendaftaran = Pendaftaran::findOrFail($id);
        if ($request->hasFile('bukti_pembayaran')) {
            if ($pendaftaran->bukti_pembayaran && file_exists(public_path('storage/' . $pendaftaran->bukti_pembayaran))) {
                unlink(public_path('storage/' . $pendaftaran->bukti_pembayaran));
            }
            $validated['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('BuktiPembayaran', 'public');
        }
        $pendaftaran->update($validated);
        return redirect()->route('data-pendaftaran.index')->with('success', 'Pendaftaran Berhasil Diperbarui!');
    }

    public function bayar($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
            if ($pendaftaran->formulir) {
                $pendaftaran->formulir->nama_lengkap; 
            } else {
                $pendaftaran->formulir = null;
            }
        return view('admin.data-pendaftaran.edit', compact('pendaftaran'));
    }

}
