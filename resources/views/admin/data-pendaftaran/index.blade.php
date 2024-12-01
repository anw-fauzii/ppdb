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
                    <i class="pe-7s-mail-open-file icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Data Pendaftaran {{$tahun_ajaran->nama_tahun_ajaran}}
                    <div class="page-title-subheading">
                        Tahun ajaran yang ditampilkan
                    </div>
                </div>
            </div>  
        </div> 
    </div>

    <div class="main-card card">
        <div class="card-header">
            Data Pendaftaran
        </div>
        <div class="card-body">
            <button class="btn btn-info dropdown mb-3" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="metismenu-icon pe-7s-refresh-2"></i> PERIODE
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                @foreach($total as $item)
                <li><a href="{{route('data-pendaftaran.show', $item->id)}}" class="dropdown-item">{{$item->nama_tahun_ajaran}}</a></li>
                @endforeach
            </ul> 
            <div class="table-responsive">
                <table class="mb-0 table table-hover table-striped" id="myTable2">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nama Siswa</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pendaftaran as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->kategori->nama_kategori}}</td>
                                <td>{{$item->status}}</td>
                                <td class="d-flex">
                                    <button type="button" class="btn btn-sm mr-1 btn-primary" data-toggle="modal"
                                        data-target="#buktiPembayaran">
                                        <i class="pe-7s-diskette" style="font-size: 1rem;"></i>
                                    </button>
                                    @foreach ($dokumen->where('user_id', $item->user_id) as $dok)
                                        <button type="button" class="btn btn-sm mr-1 btn-success" data-toggle="modal"
                                            data-target="#dokumen{{$dok->id}}">
                                            <i class="pe-7s-id" style="font-size: 1rem;"></i>
                                        </button>
                                        @include('admin.data-pendaftaran.modalFoto')
                                    @endforeach
                                    <a href="{{ route('data-pendaftaran.detail') }}" class="btn btn-sm btn-warning"><i class="pe-7s-note" style="font-size: 1rem;"></i></a>
                                </td>
                            </tr>
                            @include('admin.data-pendaftaran.modalPembayaran')
                        @empty
                            <tr>
                                <th class="text-center" colspan="5">Belum ada yang mendaftar</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
@endsection
