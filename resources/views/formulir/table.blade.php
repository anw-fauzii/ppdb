<div class="row">
    <div class="col-md-6">
        <table class="mb-0 table table-hover">
            <tbody>
                <tr>
                    <th colspan="2">A. Biodata Peserta Didik</th>
                </tr>
                <tr>
                    <th colspan="2" class="text-center"><img src="{{ asset('storage/user.png') }}" width="300rem" alt="User Image">
                    </th>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: {{$formulir->nik}}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: {{$formulir->nama_lengkap}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <table class="mb-0 table table-hover">
            <tbody>
                <tr>
                    <td>NIK</td>
                    <td>: {{$formulir->nik}}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: {{$formulir->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>: {{$formulir->asal_sekolah}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: {{$formulir->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <td>Tempat, Tgl Lahir</td>
                    <td>: {{$formulir->tempat_lahir}}, {{ \Carbon\Carbon::parse($formulir->tanggal_lahir)->format('d M Y') }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        @if($formulir->agama == '1')
                            : Islam
                        @elseif($formulir->agama == '2')
                            : Kristen
                        @elseif($formulir->agama == '3')
                            : Katolik
                        @elseif($formulir->agama == '4')
                            : Hindu
                        @elseif($formulir->agama == '5')
                            : Budha
                        @elseif($formulir->agama == '6')
                            : Khonghuchu
                        @else
                            : Belum dipilih
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Anak Ke</td>
                    <td>: {{$formulir->anak_ke}}</td>
                </tr>
                <tr>
                    <td>Jumlah Saudara</td>
                    <td>: {{$formulir->jumlah_saudara}}</td>
                </tr>
                <tr>
                    <td>Tinggi Badan</td>
                    <td>: {{$formulir->tinggi_badan}}</td>
                </tr>
                <tr>
                    <td>Berat Badan</td>
                    <td>: {{$formulir->berat_badan}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <table class="mb-0 table table-hover">
            <tbody>
                <tr>
                    <th colspan="2">B. Alamat dan Kontak</th>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{$formulir->alamat}}, RT {{$formulir->rt}} RW {{$formulir->rw}}, Desa {{$formulir->desa}}, Kecamatan {{$formulir->kecamatan}}
                        Kabupaten {{$formulir->kabupaten}}, {{$formulir->provinsi}}, {{$formulir->kode_pos}}.
                    </td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>: {{$formulir->kewarganegaraan}}</td>
                </tr>
                <tr>
                    <td>Penerima PKS</td>
                    <td>: {{$formulir->penerima_pks}}</td>
                </tr>
                <tr>
                    <td>Jenis Tinggal </td>
                    <td>
                        @if($formulir->jenis_tinggal == '1')
                            : Bersama Orangtua
                        @elseif($formulir->jenis_tinggal == '2')
                            : Wali
                        @elseif($formulir->jenis_tinggal == '3')
                            : Kos
                        @elseif($formulir->jenis_tinggal == '4')
                            : Asrama
                        @elseif($formulir->jenis_tinggal == '5')
                            : Panti Asuhan
                        @elseif($formulir->jenis_tinggal == '6')
                            : Lainnya
                        @else
                            : Belum dipilih
                        @endif
                    </td>                    
                </tr>
                <tr>
                    <td>Telepon/WA</td>
                    <td>: {{$formulir->telepon}}/{{$formulir->whatsapp}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <table class="mb-0 table table-hover">
            <tbody>
                <tr>
                    <th colspan="2">C. Data Ayah</th>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: {{$formulir->nik_ayah}}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: {{$formulir->nama_ayah}}</td>
                </tr>
                <tr>
                    <td>Tahun Lahir</td>
                    <td>: {{$formulir->lahir_ayah}}</td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>: {{$formulir->pendidikan_ayah}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{$formulir->pekerjaan_ayah}}</td>
                </tr>
                <tr>
                    <td>Penghasilan</td>
                    <td>
                        @if($formulir->penghasilan_ayah == '1')
                            : Kurang dari Rp. 1.000.000
                        @elseif($formulir->penghasilan_ayah == '2')
                            : Rp. 1.000.000 - Rp. 3.000.000
                        @elseif($formulir->penghasilan_ayah == '3')
                            : Lebih Dari Rp. 3.000.000
                        @else
                            : Belum dipilih
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <table class="mb-0 table table-hover">
            <tbody>
                <tr>
                    <th colspan="2">D. Data Ibu</th>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: {{$formulir->nik_ibu}}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: {{$formulir->nama_ibu}}</td>
                </tr>
                <tr>
                    <td>Tahun Lahir</td>
                    <td>: {{$formulir->lahir_ibu}}</td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>: {{$formulir->pendidikan_ibu}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{$formulir->pekerjaan_ibu}}</td>
                </tr>
                <tr>
                    <td>Penghasilan</td>
                    <td>
                        @if($formulir->penghasilan_ibu == '1')
                            : Kurang dari Rp. 1.000.000
                        @elseif($formulir->penghasilan_ibu == '2')
                            : Rp. 1.000.000 - Rp. 3.000.000
                        @elseif($formulir->penghasilan_ibu == '3')
                            : Lebih Dari Rp. 3.000.000
                        @else
                            : Belum dipilih
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @if($formulir->nama_wali)
    <div class="col-md-6">
        <table class="mb-0 table table-hover">
            <tbody>
                <tr>
                    <th colspan="2">E. Data Wali</th>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: {{$formulir->nik_wali}}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: {{$formulir->nama_wali}}</td>
                </tr>
                <tr>
                    <td>Tahun Lahir</td>
                    <td>: {{$formulir->lahir_wali}}</td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>: {{$formulir->pendidikan_wali}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{$formulir->pekerjaan_wali}}</td>
                </tr>
                <tr>
                    <td>Penghasilan</td>
                    <td>
                        @if($formulir->penghasilan_wali == '1')
                            : Kurang dari Rp. 1.000.000
                        @elseif($formulir->penghasilan_wali == '2')
                            : Rp. 1.000.000 - Rp. 3.000.000
                        @elseif($formulir->penghasilan_wali == '3')
                            : Lebih Dari Rp. 3.000.000
                        @else
                            : Belum dipilih
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endif
</div>
