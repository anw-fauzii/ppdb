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
                    <i class="pe-7s-date icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Tahun Ajaran
                    <div class="page-title-subheading">
                        Tahun ajaran yang ditampilkan
                    </div>
                </div>
            </div>  
        </div> 
    </div>

    <div class="main-card card">
        <div class="card-header">
            <a href="{{route('kategori.create')}}" class="btn btn-primary">Tambah Baru</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="mb-0 table table-hover table-striped" id="myTable2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tahun Ajaran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kategori as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nama_kategori}}</td>
                                <td>
                                    @if ($item->status == TRUE)
                                        Dibuka
                                    @else
                                        Ditutup
                                    @endif
                                </td>
                                <td class="d-flex">
                                    @if ($item->status == FALSE)
                                        <a href="{{ route('kategori.show', $item->id) }}" class="btn btn-sm btn-danger mx-1"><i class="pe-7s-unlock" style="font-size: 1rem;"></i></a>
                                    @else
                                        <a href="{{ route('kategori.show', $item->id) }}" class="btn btn-sm btn-success mx-1"><i class="pe-7s-lock" style="font-size: 1rem;"></i></a>
                                    @endif
                                
                                    <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-sm btn-primary mx-1"><i class="pe-7s-note" style="font-size: 1rem;"></i></a>
                                
                                    <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-warning delete-button mx-1"><i class="pe-7s-trash" style="font-size: 1rem;"></i></a></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4" class="text-center"> Belum Ada Data</th>
                            </tr>
                        @endforelse 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah yakin akan dihapus?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    this.closest('form').submit();
                }
            });
        });
    });
</script>
@endsection
