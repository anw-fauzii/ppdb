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
                    <i class="pe-7s-home icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Dokumen Pendukung
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
            <a href="{{route('dokumen.create')}}" class="btn btn-primary mb-3">Isi Formulir</a>
            <table class="mb-0 table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dokumen</th>
                        <th>Lihat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. </td>
                        <td>Kartu Keluarga</td>
                        <td>
                            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                            </button>
                            @include('dokumen.modal')
                        </td>
                    </tr>
                    <tr>
                        <td>2. </td>
                        <td>Akta Kelahiran</td>
                        <td>Lihat</td>
                    </tr>
                    <tr>
                        <td>3. </td>
                        <td>KTP Ayah</td>
                        <td>Lihat</td>
                    </tr>
                    <tr>
                        <td>4. </td>
                        <td>KTP Ibu</td>
                        <td>Lihat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
