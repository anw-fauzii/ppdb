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
                <div>Data Diri Ananda
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
            <form  method="post" action="{{route('formulir.store')}}">
                @csrf
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="nik" class="">NIK Ananda</label>
                            <input name="nik" id="nik" placeholder="Masukkan NIK Ananda" type="number" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                            @error('nik')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="nama_lengkap" class="">Nama Lengkap</label>
                            <input name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap') }}">
                            @error('nama_lengkap')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="asal_sekolah" class="">Asal Sekolah</label>
                            <input name="asal_sekolah" id="asal_sekolah" placeholder="Masukkan Asal Sekolah" type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" value="{{ old('asal_sekolah') }}">
                            @error('asal_sekolah')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="anak_ke" class="">Anak Keberapa</label>
                            <input name="anak_ke" id="anak_ke" placeholder="Masukkan Anak Keberapa" type="number" class="form-control @error('anak_ke') is-invalid @enderror" value="{{ old('anak_ke') }}">
                            @error('anak_ke')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="jumlah_saudara" class="">Jumlah Saudara</label>
                            <input name="jumlah_saudara" id="jumlah_saudara" placeholder="Masukkan Jumlah Saudara" type="number" class="form-control @error('jumlah_saudara') is-invalid @enderror" value="{{ old('jumlah_saudara') }}">
                            @error('jumlah_saudara')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="tinggi_badan" class="">Tinggi Badan</label>
                            <input name="tinggi_badan" id="tinggi_badan" placeholder="Masukkan Tinggi Badan" type="number" class="form-control @error('tinggi_badan') is-invalid @enderror" value="{{ old('tinggi_badan') }}">
                            @error('tinggi_badan')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="berat_badan" class="">Berat Badan</label>
                            <input name="berat_badan" id="berat_badan" placeholder="Masukkan Berat Badan" type="number" class="form-control @error('berat_badan') is-invalid @enderror" value="{{ old('berat_badan') }}">
                            @error('berat_badan')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>                        
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="tempat_lahir" class="">Tempat Lahir</label>
                            <input name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="tanggal_lahir" class="">Tanggal Lahir</label>
                            <input name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="alamat" class="">Alamat</label>
                            <input name="alamat" id="alamat" placeholder="Masukkan Alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="rt" class="">RT</label>
                            <input name="rt" id="rt" placeholder="Masukkan RT" type="number" class="form-control @error('rt') is-invalid @enderror" value="{{ old('rt') }}">
                            @error('rt')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="rw" class="">RW</label>
                            <input name="rw" id="rw" placeholder="Masukkan RW" type="number" class="form-control @error('rw') is-invalid @enderror" value="{{ old('rw') }}">
                            @error('rw')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="desa" class="">Desa</label>
                            <input name="desa" id="desa" placeholder="Masukkan desa" type="text" class="form-control @error('desa') is-invalid @enderror" value="{{ old('desa') }}">
                            @error('desa')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="kecamatan" class="">Kecamatan</label>
                            <input name="kecamatan" id="kecamatan" placeholder="Masukkan kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" value="{{ old('kecamatan') }}">
                            @error('kecamatan')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="kabupaten" class="">Kabupaten</label>
                            <input name="kabupaten" id="kabupaten" placeholder="Masukkan kabupaten" type="text" class="form-control @error('kabupaten') is-invalid @enderror" value="{{ old('kabupaten') }}">
                            @error('kabupaten')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="provinsi" class="">Provinsi</label>
                            <input name="provinsi" id="provinsi" placeholder="Masukkan provinsi" type="text" class="form-control @error('provinsi') is-invalid @enderror" value="{{ old('provinsi') }}">
                            @error('provinsi')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="kode_pos" class="">Kode Pos</label>
                            <input name="kode_pos" id="kode_pos" placeholder="Masukkan kode_pos" type="text" class="form-control @error('kode_pos') is-invalid @enderror" value="{{ old('kode_pos') }}">
                            @error('kode_pos')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="jenis_tinggal">Jenis Tinggal</label>
                            <select name="jenis_tinggal" id="jenis_tinggal" class="form-control @error('jenis_tinggal') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Jenis Tinggal --</option>
                                <option value="1" {{ old('jenis_tinggal') == '1' ? 'selected' : '' }}>Bersama Orangtua</option>
                                <option value="2" {{ old('jenis_tinggal') == '2' ? 'selected' : '' }}>Wali</option>
                                <option value="3" {{ old('jenis_tinggal') == '3' ? 'selected' : '' }}>Kos</option>
                                <option value="4" {{ old('jenis_tinggal') == '4' ? 'selected' : '' }}>Asrama</option>
                                <option value="5" {{ old('jenis_tinggal') == '5' ? 'selected' : '' }}>Panti Asuhan</option>
                                <option value="6" {{ old('jenis_tinggal') == '6' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        
                            @error('jenis_tinggal')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>                        
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="penerima_pks">Penerima PKS (Bantuan Pemerintah)</label>
                            <select name="penerima_pks" id="penerima_pks" class="form-control @error('penerima_pks') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Jenis --</option>
                                <option value="Ya" {{ old('penerima_pks') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                <option value="Tidak" {{ old('penerima_pks') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                            </select>
                            @error('penerima_pks')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>                        
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                            <select name="kewarganegaraan" id="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror">
                                <option value="" selected disabled>-- Pilih Jenis --</option>
                                <option value="WNI" {{ old('kewarganegaraan') == 'WNI' ? 'selected' : '' }}>WNI</option>
                                <option value="WNA" {{ old('kewarganegaraan') == 'WNA' ? 'selected' : '' }}>WNA</option>
                            </select>
                            @error('kewarganegaraan')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>                        
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="telepon" class="">Telepon</label>
                            <input name="telepon" id="telepon" placeholder="Masukkan telepon" type="text" class="form-control @error('telepon') is-invalid @enderror" value="{{ old('telepon') }}">
                            @error('telepon')
                                <div class="invalid-feedback" style="font-style: italic; font-size: 0.7rem;">
                                    {{ strtolower($message) }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="whatsapp" class="">whatsapp</label>
                            <input name="whatsapp" id="whatsapp" placeholder="Masukkan whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" value="{{ old('whatsapp') }}">
                            @error('whatsapp')
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
