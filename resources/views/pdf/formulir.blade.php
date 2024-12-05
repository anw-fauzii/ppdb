<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            color: #333; 
        }
        .kop {
            text-align: center;
            margin-top: 0;
        }

        .form-row {
            margin-bottom: 5px;
            width: 100%; 
        }
        .form-row2 {
            margin-bottom: 5px;
            width: 100%; 
        }

        .label {
            display: inline-block;
            width: 20%; /* Adjust label width */
            padding-right: 10px;
        }

        .value {
            display: inline-block;
            width: 75%; /* Adjust value width */
        }

        .label2 {
            display: inline-block;
            width: 15%; 
            padding-right: 10px;
        }
        .value2 {
            display: inline-block;
            width: 29%; 
            padding-right: 10px;
        }

        /* Image styling */
        .kop img {
            max-width: 70%;
            height: auto;
            margin-top: -40px;
        }

        /* For better mobile responsiveness */
        @media (max-width: 600px) {
            .kop img {
                max-width: 100%;
            }

            .label {
                width: 120px;
            }
        }
    </style>
</head>
<body>

    <!-- Container for content -->
    <div class="content">
        <!-- Kop with Image -->
        <div class="kop">
            <img src="{{ storage_path('app/public/cop.png') }}" alt="Kop">
        </div>

        <!-- Title -->
        <h3 style="text-align: center">Formulir Pendaftaran</h3>

        <h4 style="margin-bottom: 8px">A. Data Pendaftaran</h4>
        <div class="form-row">
            <div class="label">No. Pendaftaran</div>
            <div class="value">: {{$pendaftaran->id}}</div>
        </div>
        <div class="form-row">
            <div class="label">Tgl. Pendaftaran</div>
            <div class="value">: {{ \Carbon\Carbon::parse($pendaftaran->created_at)->format('d M Y') }}</div>
        </div>
        <div class="form-row">
            <div class="label">Tingkat Sekolah</div>
            <div class="value">: {{$pendaftaran->kategori->nama_kategori}}</div>
        </div>

        <h4 style="margin-bottom: 8px">B. Biodata Peserta Didik</h4>
        <div class="form-row">
            <div class="label">NIK</div>
            <div class="value">: {{$formulir->nik}}</div>
        </div>
        <div class="form-row">
            <div class="label">Nama Lengkap</div>
            <div class="value">: {{$formulir->nama_lengkap}}</div>
        </div>
        <div class="form-row">
            <div class="label">Asal Sekolah</div>
            <div class="value">: {{$formulir->asal_sekolah}}</div>
        </div>
        <div class="form-row">
            <div class="label">Jenis Kelamin</div>
            <div class="value">: {{$formulir->jenis_kelamin}}</div>
        </div>
        <div class="form-row">
            <div class="label">Tempat, Tgl Lahir</div>
            <div class="value">: {{$formulir->tempat_lahir}}, {{ \Carbon\Carbon::parse($formulir->tanggal_lahir)->format('d M Y') }}</div>
        </div>
        <div class="form-row">
            <div class="label">Agama</div>
            <div class="value">: Islam</div>
        </div>
        <div class="form-row">
            <div class="label">Anak Ke</div>
            <div class="value">: {{$formulir->anak_ke}}</div>
        </div>
        <div class="form-row">
            <div class="label">Jumlah Saudara</div>
            <div class="value">: {{$formulir->jumlah_saudara}}</div>
        </div>
        <div class="form-row">
            <div class="label">Tinggi/Berat Badan</div>
            <div class="value">: {{$formulir->tinggi_badan}}/{{$formulir->berat_badan}}</div>
        </div>

        <h4 style="margin-bottom: 8px">C. Alamat dan Kontak</h4>
        <div class="form-row">
            <div class="label" style="text-align: ">Alamat</div>
            <div class="value">: {{$formulir->alamat}}, RT {{$formulir->rt}} RW {{$formulir->rw}}, Desa {{$formulir->desa}}, Kecamatan {{$formulir->kecamatan}}, Kabupaten {{$formulir->kabupaten}}, {{$formulir->provinsi}}, {{$formulir->kode_pos}}.</div>
        </div>
        <div class="form-row">
            <div class="label">Kewarganegaraan</div>
            <div class="value">: {{$formulir->kewarganegaraan}}</div>
        </div>
        <div class="form-row">
            <div class="label">Penerima PKS</div>
            <div class="value">: {{$formulir->penerima_pks}}</div>
        </div>
        <div class="form-row">
            <div class="label">Jenis Tinggal</div>
            <div class="value">: {{$formulir->jenis_tinggal}}</div>
        </div>
        <div class="form-row">
            <div class="label">Telepon/WA</div>
            <div class="value">: {{$formulir->telepon}} / {{$formulir->whatsapp}}</div>
        </div>

        <h4 style="margin-bottom: 8px">D. Data Orangtua</h4>
        <div class="form-row2">
            <div class="label2">NIK Ayah</div>
            <div class="value2">: {{$formulir->nik_ayah}}</div>
            <div class="label2">NIK Ibu</div>
            <div class="value2">: {{$formulir->nik_ibu}}</div>
        </div>
        <div class="form-row">
            <div class="label2">Nama Ayah</div>
            <div class="value2">: {{$formulir->nama_ayah}}</div>
            <div class="label2">Nama Ibu</div>
            <div class="value2">: {{$formulir->nama_ibu}}</div>
        </div>
        <div class="form-row">
            <div class="label2">Tahun Lahir</div>
            <div class="value2">: {{$formulir->lahir_ayah}}</div>
            <div class="label2">Tahun Lahir</div>
            <div class="value2">: {{$formulir->lahir_ibu}}</div>
        </div>
        <div class="form-row">
            <div class="label2">Pendidikan</div>
            <div class="value2">: {{$formulir->pendidikan_ayah}}</div>
            <div class="label2">Pendidikan</div>
            <div class="value2">: {{$formulir->pendidikan_ibu}}</div>
        </div>
        <div class="form-row">
            <div class="label2">Pekerjaan</div>
            <div class="value2">: {{$formulir->pekerjaan_ayah}}</div>
            <div class="label2">Pekerjaan</div>
            <div class="value2">: {{$formulir->pekerjaan_ibu}}</div>
        </div>
        <div class="form-row">
            <div class="label2">Penghasilan</div>
            <div class="value2">
                @if($formulir->penghasilan_ayah == '1')
                    : Kurang dari Rp. 1.000.000
                @elseif($formulir->penghasilan_ayah == '2')
                    : Rp. 1.000.000 - Rp. 3.000.000
                @elseif($formulir->penghasilan_ayah == '3')
                    : Lebih Dari Rp. 3.000.000
                @else
                    : Belum dipilih
                @endif
            </div>
            <div class="label2">Penghasilan</div>
            <div class="value2">
                @if($formulir->penghasilan_ibu == '1')
                    : Kurang dari Rp. 1.000.000
                @elseif($formulir->penghasilan_ibu == '2')
                    : Rp. 1.000.000 - Rp. 3.000.000
                @elseif($formulir->penghasilan_ibu == '3')
                    : Lebih Dari Rp. 3.000.000
                @else
                    : Belum dipilih
                @endif
            </div>
        </div>
        <!-- Data Wali (if exists) -->
        @if($formulir->nama_wali)
        <h4 style="margin-bottom: 8px">D. Data Wali</h4>
        <div class="form-row2">
            <div class="label2">NIK Wali</div>
            <div class="value2">: {{$formulir->nik_wali}}</div>
        </div>
        <div class="form-row2">
            <div class="label2">Nama Wali</div>
            <div class="value2">: {{$formulir->nama_wali}}</div>
        </div>
        <div class="form-row2">
            <div class="label2">Tahun Lahir</div>
            <div class="value2">: {{$formulir->lahir_wali}}</div>
        </div>
        <div class="form-row2">
            <div class="label2">Pendidikan</div>
            <div class="value2">: {{$formulir->pendidikan_wali}}</div>
        </div>
        <div class="form-row2">
            <div class="label2">Pekerjaan</div>
            <div class="value2">: {{$formulir->pekerjaan_wali}}</div>
        </div>
        <div class="form-row2">
            <div class="label2">Penghasilan</div>
            <div class="value2">
                @if($formulir->penghasilan_wali == '1')
                    : Kurang dari Rp. 1.000.000
                @elseif($formulir->penghasilan_wali == '2')
                    : Rp. 1.000.000 - Rp. 3.000.000
                @elseif($formulir->penghasilan_wali == '3')
                    : Lebih Dari Rp. 3.000.000
                @else
                    : Belum dipilih
                @endif
            </div>
        </div>
        @endif
    </div>
</body>
</html>
