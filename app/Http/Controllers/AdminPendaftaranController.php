<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Formulir;
use App\Models\Pendaftaran;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPendaftaranController extends Controller
{
    public function index()
    {
        $total = TahunAjaran::all();
        $tahun_ajaran = TahunAjaran::latest()->first();
        $pendaftaran = Pendaftaran::where('tahun_ajaran_id', $tahun_ajaran->id)->get();
        $dokumen = Dokumen::all();
        return view('admin.data-pendaftaran.index', compact('total','pendaftaran', 'dokumen','tahun_ajaran'));
    }

    public function show($id)
    {
        $total = TahunAjaran::all();
        $tahun_ajaran = TahunAjaran::find($id);
        $pendaftaran = Pendaftaran::where('tahun_ajaran_id', $id)->get();
        $dokumen = Dokumen::all();
        return view('admin.data-pendaftaran.index', compact('total','pendaftaran', 'dokumen','tahun_ajaran'));
    }

    public function detail()
    {
        $formulir= Formulir::where('user_id', Auth::user()->id)->first();
        return view('formulir.index', compact('formulir'));
    }
}
