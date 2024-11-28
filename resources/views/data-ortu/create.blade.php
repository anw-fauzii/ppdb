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
                <div>Data Orangtua
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
            <form  method="post" action="{{route('data-ortu.store')}}">
                @csrf
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="nik_ayah" class="">NIK Ayah</label>
                            <input name="nik_ayah" id="nik_ayah" placeholder="Masukkan NIK Ayah" type="number" class="form-control @error('nik_ayah') is-invalid @enderror" value="{{ $formulir->nik_ayah ?? old('nik_ayah') }}">
                            @error('nik_ayah')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="nama_ayah" class="">Nama Ayah</label>
                            <input name="nama_ayah" id="nama_ayah" placeholder="Masukkan Nama Ayah" type="text" class="form-control @error('nama_ayah') is-invalid @enderror" value="{{ $formulir->nama_ayah ?? old('nama_ayah') }}">
                            @error('nama_ayah')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="lahir_ayah" class="">Tahun Lahir Ayah</label>
                            <input name="lahir_ayah" id="lahir_ayah" placeholder="Masukkan Tahun Lahir Ayah" type="number" class="form-control @error('lahir_ayah') is-invalid @enderror" value="{{ $formulir->lahir_ayah ?? old('lahir_ayah') }}">
                            @error('lahir_ayah')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="pendidikan_ayah">Pendidikan Ayah</label>
                            <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Jenjang Pendidikan --</option>
                                <option value="SD" {{ old('pendidikan_ayah') == 'SD' || $formulir->pendidikan_ayah == 'SD' ? 'selected' : '' }}>SD</option>
                                <option value="SLTP" {{ old('pendidikan_ayah') == 'SLTP' || $formulir->pendidikan_ayah == 'SLTP' ? 'selected' : '' }}>SLTP</option>
                                <option value="D1" {{ old('pendidikan_ayah') == 'D1' || $formulir->pendidikan_ayah == 'D1' ? 'selected' : '' }}>D1</option>
                                <option value="SLTA" {{ old('pendidikan_ayah') == 'SLTA' || $formulir->pendidikan_ayah == 'SLTA' ? 'selected' : '' }}>SLTA</option>
                                <option value="D2" {{ old('pendidikan_ayah') == 'D2' || $formulir->pendidikan_ayah == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D3" {{ old('pendidikan_ayah') == 'D3' || $formulir->pendidikan_ayah == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="D4" {{ old('pendidikan_ayah') == 'D4' || $formulir->pendidikan_ayah == 'D4' ? 'selected' : '' }}>D4</option>
                                <option value="S1" {{ old('pendidikan_ayah') == 'S1' || $formulir->pendidikan_ayah == 'S1' ? 'selected' : '' }}>S1</option>
                                <option value="S2" {{ old('pendidikan_ayah') == 'S2' || $formulir->pendidikan_ayah == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('pendidikan_ayah') == 'S3' || $formulir->pendidikan_ayah == 'S3' ? 'selected' : '' }}>S3</option>
                            </select>
                    
                            @error('pendidikan_ayah')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                            <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Pekerjaan --</option>
                                <option value="PNS" {{ old('pekerjaan_ayah') == 'PNS' || $formulir->pekerjaan_ayah == 'PNS' ? 'selected' : '' }}>PNS</option>
                                <option value="Guru" {{ old('pekerjaan_ayah') == 'Guru' || $formulir->pekerjaan_ayah == 'Guru' ? 'selected' : '' }}>Guru</option>
                                <option value="Dosen" {{ old('pekerjaan_ayah') == 'Dosen' || $formulir->pekerjaan_ayah == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                                <option value="TNI" {{ old('pekerjaan_ayah') == 'TNI' || $formulir->pekerjaan_ayah == 'TNI' ? 'selected' : '' }}>TNI</option>
                                <option value="POLRI" {{ old('pekerjaan_ayah') == 'POLRI' || $formulir->pekerjaan_ayah == 'POLRI' ? 'selected' : '' }}>POLRI</option>
                                <option value="Dokter" {{ old('pekerjaan_ayah') == 'Dokter' || $formulir->pekerjaan_ayah == 'Dokter' ? 'selected' : '' }}>Dokter</option>
                                <option value="Bidan" {{ old('pekerjaan_ayah') == 'Bidan' || $formulir->pekerjaan_ayah == 'Bidan' ? 'selected' : '' }}>Bidan</option>
                                <option value="Perawat" {{ old('pekerjaan_ayah') == 'Perawat' || $formulir->pekerjaan_ayah == 'Perawat' ? 'selected' : '' }}>Perawat</option>
                                <option value="Pegawai Swasta" {{ old('pekerjaan_ayah') == 'Pegawai Swasta' || $formulir->pekerjaan_ayah == 'Pegawai Swasta' ? 'selected' : '' }}>Pegawai Swasta</option>
                                <option value="Wiraswasta/Pengusaha" {{ old('pekerjaan_ayah') == 'Wiraswasta/Pengusaha' || $formulir->pekerjaan_ayah == 'Wiraswasta/Pengusaha' ? 'selected' : '' }}>Wiraswasta/Pengusaha</option>
                                <option value="Buruh" {{ old('pekerjaan_ayah') == 'Buruh' || $formulir->pekerjaan_ayah == 'Buruh' ? 'selected' : '' }}>Buruh</option>
                                <option value="Sopir" {{ old('pekerjaan_ayah') == 'Sopir' || $formulir->pekerjaan_ayah == 'Sopir' ? 'selected' : '' }}>Sopir</option>
                                <option value="Ibu Rumah Tangga (IRT)" {{ old('pekerjaan_ayah') == 'Ibu Rumah Tangga (IRT)' || $formulir->pekerjaan_ayah == 'Ibu Rumah Tangga (IRT)' ? 'selected' : '' }}>Ibu Rumah Tangga (IRT)</option>
                                <option value="Pegawai BUMN" {{ old('pekerjaan_ayah') == 'Pegawai BUMN' || $formulir->pekerjaan_ayah == 'Pegawai BUMN' ? 'selected' : '' }}>Pegawai BUMN</option>
                                <option value="Honorer" {{ old('pekerjaan_ayah') == 'Honorer' || $formulir->pekerjaan_ayah == 'Honorer' ? 'selected' : '' }}>Honorer</option>
                                <option value="Lainnya" {{ old('pekerjaan_ayah') == 'Lainnya' || $formulir->pekerjaan_ayah == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                    
                            @error('pekerjaan_ayah')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="penghasilan_ayah">Penghasilan Bulanan Ayah</label>
                            <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Penghasilan --</option>
                                <option value="1" {{ old('penghasilan_ayah') == '1' || $formulir->penghasilan_ayah == '1' ? 'selected' : '' }}>Kurang dari Rp. 1.000.000</option>
                                <option value="2" {{ old('penghasilan_ayah') == '2' || $formulir->penghasilan_ayah == '2' ? 'selected' : '' }}>Rp. 1.000.000 - Rp. 3.000.000</option>
                                <option value="3" {{ old('penghasilan_ayah') == '3' || $formulir->penghasilan_ayah == '3' ? 'selected' : '' }}>Lebih Dari Rp. 3.000.000</option>
                            </select>
                    
                            @error('penghasilan_ayah')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="nik_ibu" class="">NIK Ibu</label>
                            <input name="nik_ibu" id="nik_ibu" placeholder="Masukkan NIK Ibu" type="number" class="form-control @error('nik_ibu') is-invalid @enderror" value="{{ $formulir->nik_ibu ?? old('nik_ibu') }}">
                            @error('nik_ibu')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="nama_ibu" class="">Nama Ibu</label>
                            <input name="nama_ibu" id="nama_ibu" placeholder="Masukkan Nama Ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" value="{{ $formulir->nama_ibu ?? old('nama_ibu') }}">
                            @error('nama_ibu')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="lahir_ibu" class="">Tahun Lahir Ibu</label>
                            <input name="lahir_ibu" id="lahir_ibu" placeholder="Masukkan Tahun Lahir Ibu" type="number" class="form-control @error('lahir_ibu') is-invalid @enderror" value="{{ $formulir->lahir_ibu ?? old('lahir_ibu') }}">
                            @error('lahir_ibu')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="pendidikan_ibu">Pendidikan Ibu</label>
                            <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Jenjang Pendidikan --</option>
                                <option value="SD" {{ old('pendidikan_ibu') == 'SD' || $formulir->pendidikan_ibu == 'SD' ? 'selected' : '' }}>SD</option>
                                <option value="SLTP" {{ old('pendidikan_ibu') == 'SLTP' || $formulir->pendidikan_ibu == 'SLTP' ? 'selected' : '' }}>SLTP</option>
                                <option value="D1" {{ old('pendidikan_ibu') == 'D1' || $formulir->pendidikan_ibu == 'D1' ? 'selected' : '' }}>D1</option>
                                <option value="SLTA" {{ old('pendidikan_ibu') == 'SLTA' || $formulir->pendidikan_ibu == 'SLTA' ? 'selected' : '' }}>SLTA</option>
                                <option value="D2" {{ old('pendidikan_ibu') == 'D2' || $formulir->pendidikan_ibu == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D3" {{ old('pendidikan_ibu') == 'D3' || $formulir->pendidikan_ibu == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="D4" {{ old('pendidikan_ibu') == 'D4' || $formulir->pendidikan_ibu == 'D4' ? 'selected' : '' }}>D4</option>
                                <option value="S1" {{ old('pendidikan_ibu') == 'S1' || $formulir->pendidikan_ibu == 'S1' ? 'selected' : '' }}>S1</option>
                                <option value="S2" {{ old('pendidikan_ibu') == 'S2' || $formulir->pendidikan_ibu == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('pendidikan_ibu') == 'S3' || $formulir->pendidikan_ibu == 'S3' ? 'selected' : '' }}>S3</option>
                            </select>
                    
                            @error('pendidikan_ibu')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                            <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Pekerjaan --</option>
                                <option value="PNS" {{ old('pekerjaan_ibu') == 'PNS' || $formulir->pekerjaan_ibu == 'PNS' ? 'selected' : '' }}>PNS</option>
                                <option value="Guru" {{ old('pekerjaan_ibu') == 'Guru' || $formulir->pekerjaan_ibu == 'Guru' ? 'selected' : '' }}>Guru</option>
                                <option value="Dosen" {{ old('pekerjaan_ibu') == 'Dosen' || $formulir->pekerjaan_ibu == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                                <option value="TNI" {{ old('pekerjaan_ibu') == 'TNI' || $formulir->pekerjaan_ibu == 'TNI' ? 'selected' : '' }}>TNI</option>
                                <option value="POLRI" {{ old('pekerjaan_ibu') == 'POLRI' || $formulir->pekerjaan_ibu == 'POLRI' ? 'selected' : '' }}>POLRI</option>
                                <option value="Dokter" {{ old('pekerjaan_ibu') == 'Dokter' || $formulir->pekerjaan_ibu == 'Dokter' ? 'selected' : '' }}>Dokter</option>
                                <option value="Bidan" {{ old('pekerjaan_ibu') == 'Bidan' || $formulir->pekerjaan_ibu == 'Bidan' ? 'selected' : '' }}>Bidan</option>
                                <option value="Perawat" {{ old('pekerjaan_ibu') == 'Perawat' || $formulir->pekerjaan_ibu == 'Perawat' ? 'selected' : '' }}>Perawat</option>
                                <option value="Pegawai Swasta" {{ old('pekerjaan_ibu') == 'Pegawai Swasta' || $formulir->pekerjaan_ibu == 'Pegawai Swasta' ? 'selected' : '' }}>Pegawai Swasta</option>
                                <option value="Wiraswasta/Pengusaha" {{ old('pekerjaan_ibu') == 'Wiraswasta/Pengusaha' || $formulir->pekerjaan_ibu == 'Wiraswasta/Pengusaha' ? 'selected' : '' }}>Wiraswasta/Pengusaha</option>
                                <option value="Buruh" {{ old('pekerjaan_ibu') == 'Buruh' || $formulir->pekerjaan_ibu == 'Buruh' ? 'selected' : '' }}>Buruh</option>
                                <option value="Sopir" {{ old('pekerjaan_ibu') == 'Sopir' || $formulir->pekerjaan_ibu == 'Sopir' ? 'selected' : '' }}>Sopir</option>
                                <option value="Ibu Rumah Tangga (IRT)" {{ old('pekerjaan_ibu') == 'Ibu Rumah Tangga (IRT)' || $formulir->pekerjaan_ibu == 'Ibu Rumah Tangga (IRT)' ? 'selected' : '' }}>Ibu Rumah Tangga (IRT)</option>
                                <option value="Pegawai BUMN" {{ old('pekerjaan_ibu') == 'Pegawai BUMN' || $formulir->pekerjaan_ibu == 'Pegawai BUMN' ? 'selected' : '' }}>Pegawai BUMN</option>
                                <option value="Honorer" {{ old('pekerjaan_ibu') == 'Honorer' || $formulir->pekerjaan_ibu == 'Honorer' ? 'selected' : '' }}>Honorer</option>
                                <option value="Lainnya" {{ old('pekerjaan_ibu') == 'Lainnya' || $formulir->pekerjaan_ibu == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                    
                            @error('pekerjaan_ibu')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="penghasilan_ibu">Penghasilan Bulanan Ibu</label>
                            <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Penghasilan --</option>
                                <option value="1" {{ old('penghasilan_ibu') == '1' || $formulir->penghasilan_ibu == '1' ? 'selected' : '' }}>Kurang dari Rp. 1.000.000</option>
                                <option value="2" {{ old('penghasilan_ibu') == '2' || $formulir->penghasilan_ibu == '2' ? 'selected' : '' }}>Rp. 1.000.000 - Rp. 3.000.000</option>
                                <option value="3" {{ old('penghasilan_ibu') == '3' || $formulir->penghasilan_ibu == '3' ? 'selected' : '' }}>Lebih Dari Rp. 3.000.000</option>
                            </select>
                    
                            @error('penghasilan_ibu')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="nik_wali" class="">NIK Wali</label>
                            <input name="nik_wali" id="nik_wali" placeholder="Masukkan NIK Wali" type="number" class="form-control @error('nik_wali') is-invalid @enderror" value="{{ $formulir->nik_wali ?? old('nik_wali') }}">
                            @error('nik_wali')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="nama_wali" class="">Nama Wali</label>
                            <input name="nama_wali" id="nama_wali" placeholder="Masukkan Nama Wali" type="text" class="form-control @error('nama_wali') is-invalid @enderror" value="{{ $formulir->nama_wali ?? old('nama_wali') }}">
                            @error('nama_wali')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="lahir_wali" class="">Tahun Lahir Wali</label>
                            <input name="lahir_wali" id="lahir_wali" placeholder="Masukkan Tahun Lahir Wali" type="number" class="form-control @error('lahir_wali') is-invalid @enderror" value="{{ $formulir->lahir_wali ?? old('lahir_wali') }}">
                            @error('lahir_wali')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="pendidikan_wali">Pendidikan Wali</label>
                            <select name="pendidikan_wali" id="pendidikan_wali" class="form-control @error('pendidikan_wali') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Jenjang Pendidikan --</option>
                                <option value="SD" {{ old('pendidikan_wali') == 'SD' || $formulir->pendidikan_wali == 'SD' ? 'selected' : '' }}>SD</option>
                                <option value="SLTP" {{ old('pendidikan_wali') == 'SLTP' || $formulir->pendidikan_wali == 'SLTP' ? 'selected' : '' }}>SLTP</option>
                                <option value="D1" {{ old('pendidikan_wali') == 'D1' || $formulir->pendidikan_wali == 'D1' ? 'selected' : '' }}>D1</option>
                                <option value="SLTA" {{ old('pendidikan_wali') == 'SLTA' || $formulir->pendidikan_wali == 'SLTA' ? 'selected' : '' }}>SLTA</option>
                                <option value="D2" {{ old('pendidikan_wali') == 'D2' || $formulir->pendidikan_wali == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D3" {{ old('pendidikan_wali') == 'D3' || $formulir->pendidikan_wali == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="D4" {{ old('pendidikan_wali') == 'D4' || $formulir->pendidikan_wali == 'D4' ? 'selected' : '' }}>D4</option>
                                <option value="S1" {{ old('pendidikan_wali') == 'S1' || $formulir->pendidikan_wali == 'S1' ? 'selected' : '' }}>S1</option>
                                <option value="S2" {{ old('pendidikan_wali') == 'S2' || $formulir->pendidikan_wali == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('pendidikan_wali') == 'S3' || $formulir->pendidikan_wali == 'S3' ? 'selected' : '' }}>S3</option>
                            </select>
                    
                            @error('pendidikan_wali')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="pekerjaan_wali">Pekerjaan Wali</label>
                            <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Pekerjaan --</option>
                                <option value="PNS" {{ old('pekerjaan_wali') == 'PNS' || $formulir->pekerjaan_wali == 'PNS' ? 'selected' : '' }}>PNS</option>
                                <option value="Guru" {{ old('pekerjaan_wali') == 'Guru' || $formulir->pekerjaan_wali == 'Guru' ? 'selected' : '' }}>Guru</option>
                                <option value="Dosen" {{ old('pekerjaan_wali') == 'Dosen' || $formulir->pekerjaan_wali == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                                <option value="TNI" {{ old('pekerjaan_wali') == 'TNI' || $formulir->pekerjaan_wali == 'TNI' ? 'selected' : '' }}>TNI</option>
                                <option value="POLRI" {{ old('pekerjaan_wali') == 'POLRI' || $formulir->pekerjaan_wali == 'POLRI' ? 'selected' : '' }}>POLRI</option>
                                <option value="Dokter" {{ old('pekerjaan_wali') == 'Dokter' || $formulir->pekerjaan_wali == 'Dokter' ? 'selected' : '' }}>Dokter</option>
                                <option value="Bidan" {{ old('pekerjaan_wali') == 'Bidan' || $formulir->pekerjaan_wali == 'Bidan' ? 'selected' : '' }}>Bidan</option>
                                <option value="Perawat" {{ old('pekerjaan_wali') == 'Perawat' || $formulir->pekerjaan_wali == 'Perawat' ? 'selected' : '' }}>Perawat</option>
                                <option value="Pegawai Swasta" {{ old('pekerjaan_wali') == 'Pegawai Swasta' || $formulir->pekerjaan_wali == 'Pegawai Swasta' ? 'selected' : '' }}>Pegawai Swasta</option>
                                <option value="Wiraswasta/Pengusaha" {{ old('pekerjaan_wali') == 'Wiraswasta/Pengusaha' || $formulir->pekerjaan_wali == 'Wiraswasta/Pengusaha' ? 'selected' : '' }}>Wiraswasta/Pengusaha</option>
                                <option value="Buruh" {{ old('pekerjaan_wali') == 'Buruh' || $formulir->pekerjaan_wali == 'Buruh' ? 'selected' : '' }}>Buruh</option>
                                <option value="Sopir" {{ old('pekerjaan_wali') == 'Sopir' || $formulir->pekerjaan_wali == 'Sopir' ? 'selected' : '' }}>Sopir</option>
                                <option value="Ibu Rumah Tangga (IRT)" {{ old('pekerjaan_wali') == 'Ibu Rumah Tangga (IRT)' || $formulir->pekerjaan_wali == 'Ibu Rumah Tangga (IRT)' ? 'selected' : '' }}>Ibu Rumah Tangga (IRT)</option>
                                <option value="Pegawai BUMN" {{ old('pekerjaan_wali') == 'Pegawai BUMN' || $formulir->pekerjaan_wali == 'Pegawai BUMN' ? 'selected' : '' }}>Pegawai BUMN</option>
                                <option value="Honorer" {{ old('pekerjaan_wali') == 'Honorer' || $formulir->pekerjaan_wali == 'Honorer' ? 'selected' : '' }}>Honorer</option>
                                <option value="Lainnya" {{ old('pekerjaan_wali') == 'Lainnya' || $formulir->pekerjaan_wali == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                    
                            @error('pekerjaan_wali')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="penghasilan_wali">Penghasilan Bulanan Wali</label>
                            <select name="penghasilan_wali" id="penghasilan_wali" class="form-control @error('penghasilan_wali') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Penghasilan --</option>
                                <option value="1" {{ old('penghasilan_wali') == '1' || $formulir->penghasilan_wali == '1' ? 'selected' : '' }}>Kurang dari Rp. 1.000.000</option>
                                <option value="2" {{ old('penghasilan_wali') == '2' || $formulir->penghasilan_wali == '2' ? 'selected' : '' }}>Rp. 1.000.000 - Rp. 3.000.000</option>
                                <option value="3" {{ old('penghasilan_wali') == '3' || $formulir->penghasilan_wali == '3' ? 'selected' : '' }}>Lebih Dari Rp. 3.000.000</option>
                            </select>
                    
                            @error('penghasilan_wali')
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
