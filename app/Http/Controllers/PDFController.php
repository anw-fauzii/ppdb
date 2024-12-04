<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Formulir;
use App\Models\Pendaftaran;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class PDFController extends Controller
{
    public function formulir($id){
        $formulir = Formulir::whereUserId($id)->firstOrFail();
        $pendaftaran = Pendaftaran::latest()->whereUserId($id)->firstOrFail();
        $pdf = FacadePdf::loadView('pdf.formulir', compact('formulir','pendaftaran'));
        return $pdf->stream('Formulir_'.$formulir->nama_lengkap.'.pdf');
    }
    public function persyaratan($id){
        $formulir = Formulir::whereUserId($id)->firstOrFail();
        $dokumen = Dokumen::latest()->whereUserId($id)->firstOrFail();
        $pdf = FacadePdf::loadView('pdf.dokumen', compact('formulir','dokumen'));
        return $pdf->stream('Dokumen_'.$formulir->nama_lengkap.'.pdf');
    }
}
