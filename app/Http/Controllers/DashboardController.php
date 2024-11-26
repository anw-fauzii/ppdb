<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $tahun_ajaran = TahunAjaran::latest()->first();
        $pendaftaran = Pendaftaran::where('tahun_ajaran_id', $tahun_ajaran->id)->get();
        return view('dashboard', compact('pendaftaran'));
    }
}
