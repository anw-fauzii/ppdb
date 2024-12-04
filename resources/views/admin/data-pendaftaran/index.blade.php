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
            <button class="btn btn-warning dropdown mb-3" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="metismenu-icon pe-7s-print"></i> DOWNLOAD
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    @foreach($kategori as $item)
                        <li><a href="{{route('export-formulir', $item->id)}}" class="dropdown-item">{{$item->nama_kategori}}</a></li>
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
                                @if ($item->formulir)
                                    <td>{{ $item->formulir->nama_lengkap }}</td>
                                @else
                                    <td>--</td>
                                @endif
                                <td>{{$item->kategori->nama_kategori}}</td>
                                <td>{{$item->status}}</td>
                                <td class="d-flex">
                                    @if ($item->bukti_pembayaran)
                                        <button type="button" class="btn btn-sm mr-1 btn-primary" data-toggle="modal"
                                            data-target="#buktiPembayaran{{$item->id}}">
                                            <i class="pe-7s-diskette" style="font-size: 1rem;"></i>
                                        </button>
                                    @endif
                                    <a href="{{ route('pdf-persyaratan', $item->user_id) }}" target="_blank" class="btn btn-sm mr-1 btn-success"><i class="pe-7s-id" style="font-size: 1rem;"></i></a>
                                    <a href="{{ route('pdf-formulir', $item->user_id) }}" target="_blank" class="btn btn-sm mr-1 btn-warning"><i class="pe-7s-note" style="font-size: 1rem;"></i></a>
                                    @if (!$item->bukti_pembayaran)
                                        <a href="{{ route('data-pendaftaran.bayar', $item->id) }}" class="btn btn-sm btn-info"><i class="pe-7s-wallet" style="font-size: 1rem;"></i></a>
                                    @endif
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
