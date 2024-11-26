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
                    <i class="pe-7s-note2 icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Formulir Pendaftaran
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
            @if ($formulir)
            <a href="{{route('formulir.create')}}" class="btn btn-primary mb-3">Perbarui Formulir</a>
                @include('formulir.table')
            @else
                <p>Formulir belum diisi. Silakan mengisi formulir untuk melanjutkan.</p>
                <a href="{{route('formulir.create')}}" class="btn btn-primary">Isi Formulir</a>
            @endif
        </div>
    </div>
</div>

@endsection
