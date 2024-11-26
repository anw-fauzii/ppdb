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
                <div>Pengajuan Ananda
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
            <a href="{{route('daftar.create')}}" class="btn btn-primary mb-3">
                @if ($text)
                   Perbarui Pengajuan
                @else
                Pengajuan Baru 
                @endif
            </a>
            <div class="table-responsive">
                <table class="mb-0 table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tahun Ajaran</th>
                            <th>Tingkat Sekolah</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftaran as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->tahun_ajaran->nama_tahun_ajaran}}</td>
                                <td>{{$item->kategori->nama_kategori}}</td>
                                <td>
                                    <button type="button" class="btn mr-1 mb-1 btn-primary" data-toggle="modal"
                                        data-target="#buktiPembayaran{{$item->id}}">
                                        Lihat
                                    </button>
                                </td>
                                <td>
                                    @if ($item->status == "Pending")
                                        <button class="mb-2 mr-2 btn-pill btn btn-warning">Pending</button>
                                    @elseif($item->status == "Diterima")
                                        <button class="mb-2 mr-2 btn-pill btn btn-info">Diterima</button>
                                    @else
                                        <button class="mb-2 mr-2 btn-pill btn btn-danger">Ditolak</button>
                                    @endif
                                </td>
                            </tr>
                            @include('pendaftaran.modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
