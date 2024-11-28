@extends('layouts.app2')

@section('title')
    <title>Beranda</title>
@endsection

@section('content')
<link href="{{ asset('dropify/css/dropify.min.css') }}" rel="stylesheet" />
<script src="{{ asset('dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('js/dropify.js') }}"></script>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-date icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Tambah Tahun Ajaran
                    <div class="page-title-subheading">
                        Membuat tahun ajaran yang baru
                    </div>
                </div>
            </div>  
        </div> 
    </div>

    <div class="main-card card">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form  method="post" action="{{route('tahun-ajaran.store')}}">
                @csrf
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="nama_tahun_ajaran" class="">Tahun Ajaran</label>
                            <input name="nama_tahun_ajaran" id="nama_tahun_ajaran" placeholder="Masukkan Tahun Ajaran" type="text" class="form-control @error('nama_tahun_ajaran') is-invalid @enderror" value="{{ old('nama_tahun_ajaran') }}">
                            @error('nama_tahun_ajaran')
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
