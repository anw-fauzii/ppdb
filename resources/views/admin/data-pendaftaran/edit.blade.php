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
            <form  method="post" action="{{route('data-pendaftaran.edit', $pendaftaran->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="tahun_ajaran_id" class="">Nama Siswa</label>
                            <input name="tahun_ajaran_id" disabled ="tahun_ajaran_id" placeholder="Masukkan NIK Ayah" type="text" class="form-control @error('tahun_ajaran_id') is-invalid @enderror" value="{{ $pendaftaran->formulir->nama_lengkap}}">
                            @error('tahun_ajaran_id')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="bukti_pembayaran">Bukti Pembayaran</label>
                            <input type="file" id="myDropify" class="border" name="bukti_pembayaran"/>
                            @if ($errors->has('bukti_pembayaran'))
                                <div id="bukti_pembayaran-error" class="error text-danger pt-1" for="bukti_pembayaran" style="display: block;">
                                    <strong>{{ $errors->first('bukti_pembayaran') }}</strong>
                                </div>
                            @endif  
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