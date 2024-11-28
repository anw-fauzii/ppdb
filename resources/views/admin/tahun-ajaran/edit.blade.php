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
                <div>Upddate Tingkat Sekolah
                    <div class="page-title-subheading">
                        Mengupdate tingkat sekolah
                    </div>
                </div>
            </div>  
        </div> 
    </div>

    <div class="main-card card">
        <div class="card-header">
            Update Data
        </div>
        <div class="card-body">
            <form  method="post" action="{{route('kategori.update', $kategori->id)}}">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="nama_kategori" class="">Tingkat Sekolah</label>
                            <input name="nama_kategori" id="nama_kategori" placeholder="Masukkan Tingkat Sekolah" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" value="{{ $kategori->nama_kategori ?? old('nama_kategori') }}">
                            @error('nama_kategori')
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
