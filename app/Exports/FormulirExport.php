<?php

namespace App\Exports;

use App\Models\Formulir;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FormulirExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Formulir::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'User ID',
            'Nama Lengkap',
            'Anak Ke',
            'Jumlah Saudara',
            'Berat Badan',
            'Tinggi Badan',
            'Asal Sekolah',
            'Jenis Kelamin',
            'NIK',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Agama',
            'Alamat',
            'RW',
            'RT',
            'Desa',
            'Kecamatan',
            'Kabupaten',
            'Provinsi',
            'Kode Pos',
            'Jenis Tinggal',
            'Penerima PKS',
            'Kewarganegaraan',
            'Telepon',
            'Whatsapp',
            'NIK Ayah',
            'Nama Ayah',
            'Lahir Ayah',
            'Pendidikan Ayah',
            'Penghasilan Ayah',
            'Pekerjaan Ayah',
            'NIK Ibu',
            'Nama Ibu',
            'Lahir Ibu',
            'Pendidikan Ibu',
            'Penghasilan Ibu',
            'Pekerjaan Ibu',
            'NIK Wali',
            'Nama Wali',
            'Lahir Wali',
            'Pendidikan Wali',
            'Penghasilan Wali',
            'Pekerjaan Wali',
        ];
    }
}
