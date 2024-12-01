<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Formulir;
use App\Models\Pendaftaran;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $tahun_ajaran = TahunAjaran::latest()->firstOrFail();
        $pendaftaran = Pendaftaran::where('tahun_ajaran_id', $tahun_ajaran->id)->get();
        $daftar = Pendaftaran::where('user_id', Auth::user()->id)->first();
        $formulir = Formulir::where('user_id', Auth::user()->id)->first();
        $dokumen = Dokumen::where('user_id', Auth::user()->id)->first();
        return view('dashboard', compact('pendaftaran', 'tahun_ajaran', 'daftar','formulir','dokumen'));
    }
}
