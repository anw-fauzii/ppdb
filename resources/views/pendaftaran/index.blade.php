@extends('layouts.app2')

@section('title')
    <title>Beranda</title>
@endsection

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-cloud-upload icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Pendaftaran
                    <div class="page-title-subheading">
                        Isi setiap formulir dengan benar dan sesuai dengan identitas diri ananda.
                    </div>
                </div>
            </div>  
        </div> 
    </div>

    <div class="main-card card">
        <div class="card-header">
            ISI Formulir
        </div>
        <div class="card-body">
            <form  method="post" action="{{route('daftar.store')}}">
                @csrf
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="tahun_ajaran_id" class="">Tahun Ajaran</label>
                            <input name="tahun_ajaran_id" disabled ="tahun_ajaran_id" placeholder="Masukkan NIK Ayah" type="text" class="form-control @error('tahun_ajaran_id') is-invalid @enderror" value="{{ $tahun_ajaran->nama_tahun_ajaran }}">
                            @error('tahun_ajaran_id')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="kategori_id">Pilih Tingkat Sekolah</label>
                            <select name="kategori_id" id="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Tingkat Sekolah --</option>
                                @foreach ($kategori as $item)
                                    <option value="{{$item->id}}" {{ old('kategori_id') == $item->id ? 'selected' : '' }}>{{$item->nama_kategori}}</option>
                                @endforeach
                            </select>
                    
                            @error('kategori_id')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="signup" value="Simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
