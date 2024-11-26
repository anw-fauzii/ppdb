<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pendaftaran;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\text;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahun_ajarana = TahunAjaran::latest()->whereStatus(TRUE)->first();
        if(!$tahun_ajarana){
            return redirect()->route('dashboard')->with('warning', 'Mohon maaf, PPDB tahun ini sudah ditutup!');
        }else{
            $tahun_ajaran = TahunAjaran::latest()->first();
            $kategori = Kategori::whereStatus(TRUE)->get();
            $pendaftaran = Pendaftaran::where('user_id', Auth::user()->id)->get();
            $text = Pendaftaran::whereTahunAjaranId($tahun_ajaran->id)->whereUserId(Auth::user()->id)->whereStatus(!NULL)->first();
            if ($pendaftaran->isNotEmpty()) {
                return view('pendaftaran.index', compact('pendaftaran','text'));
            }else{
                return view('pendaftaran.create', compact('tahun_ajaran','kategori'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tahun_ajaran = TahunAjaran::latest()->whereStatus(TRUE)->first();
        if(!$tahun_ajaran){
            return redirect()->route('daftar.index')->with('warning', 'Mohon maaf, PPDB tahun ini sudah ditutup!');
        }else{
            $pendaftaran = Pendaftaran::whereTahunAjaranId($tahun_ajaran->id)->whereUserId(Auth::user()->id)->first();
            $text = Pendaftaran::whereTahunAjaranId($tahun_ajaran->id)
                    ->whereUserId(Auth::user()->id)
                    ->where(function($query) {
                        $query->where('status', 'Diterima')
                            ->orWhere('status', 'Ditolak');
                    })
                    ->first();
            $kategori = Kategori::whereStatus(TRUE)->get();
            if($text){
                return redirect()->route('daftar.index')->with('warning', 'Mohon maaf, Anda sudah mendaftar ditahun ini!');
            }else{
                if($pendaftaran){
                    return view('pendaftaran.edit', compact('tahun_ajaran','kategori','pendaftaran'));
                }else{
                    return view('pendaftaran.create', compact('tahun_ajaran','kategori'));
                }
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tahun_ajaran = TahunAjaran::latest()->first();
        $validated = $request->validate([
            'kategori_id' => 'required',
            'bukti_pembayaran' => 'required'
        ]);
        $validated['user_id'] = Auth::user()->id;
        $validated['tahun_ajaran_id'] = $tahun_ajaran->id;
        $validated['status'] = "Pending";
        $validated['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('BuktiPembayaran', 'public');
        Pendaftaran::create($validated);
        return redirect()->route('dashboard')->with('success', 'Pendaftaran Berhasil Diajukan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kategori_id' => 'required'
        ]);
        $pendaftaran = Pendaftaran::findOrFail($id);

        if ($request->hasFile('bukti_pembayaran')) {
            if ($pendaftaran->bukti_pembayaran && file_exists(public_path('storage/' . $pendaftaran->bukti_pembayaran))) {
                unlink(public_path('storage/' . $pendaftaran->bukti_pembayaran));
            }
            $validated['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('BuktiPembayaran', 'public');
        }
        $pendaftaran->update($validated);
        return redirect()->route('dashboard')->with('success', 'Pendaftaran Berhasil Diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
