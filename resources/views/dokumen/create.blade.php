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
                    <i class="pe-7s-home icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Dokumen Pelengkap
                    <div class="page-title-subheading">
                        Isi setiap formulir dengan benar dan sesuai dengan identitas diri ananda.
                    </div>
                </div>
            </div>  
        </div> 
    </div>

    <div class="main-card card">
        <div class="card-header">
            Data Ananda
        </div>
        <div class="card-body">
            <form  method="post" action="{{route('dokumen.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="kartu_keluarga">Kartu Keluarga</label>
                            <input type="file" id="myDropify1" class="border" name="kartu_keluarga"/>
                            @if ($errors->has('kartu_keluarga'))
                                <div id="kartu_keluarga-error" class="error text-danger pt-1" for="kartu_keluarga" style="display: block;">
                                    <strong>{{ $errors->first('kartu_keluarga') }}</strong>
                                </div>
                            @endif  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="akta_kelahiran" class="">Akta Kelahiran</label>
                            <input type="file" id="myDropify2" class="border" name="akta_kelahiran"/>
                            @if ($errors->has('akta_kelahiran'))
                                <div id="akta_kelahiran-error" class="error text-danger pt-1" for="akta_kelahiran" style="display: block;">
                                    <strong>{{ $errors->first('akta_kelahiran') }}</strong>
                                </div>
                            @endif  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="ktp_ayah" class="">KTP Ayah</label>
                            <input type="file" id="myDropify3" class="border" name="ktp_ayah"/>
                            @if ($errors->has('ktp_ayah'))
                                <div id="ktp_ayah-error" class="error text-danger pt-1" for="ktp_ayah" style="display: block;">
                                    <strong>{{ $errors->first('ktp_ayah') }}</strong>
                                </div>
                            @endif 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="ktp_ibu" class="">KTP Ibu</label>
                            <input type="file" id="myDropify" class="border" name="ktp_ibu"/>
                            @if ($errors->has('ktp_ibu'))
                                <div id="ktp_ibu-error" class="error text-danger pt-1" for="ktp_ibu" style="display: block;">
                                    <strong>{{ $errors->first('ktp_ibu') }}</strong>
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
