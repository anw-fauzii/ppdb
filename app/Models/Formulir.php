<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    protected $table = "formulir";

    protected $fillable = [
        'user_id',
        'nama_lengkap',
            'berat_badan',
            'tinggi_badan',
            'jumlah_saudara',
            'anak_ke',
            'asal_sekolah',
            'jenis_kelamin',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'agama',
            'alamat',
            'rw',
            'rt',
            'desa',
            'kecamatan',
            'kabupaten',
            'provinsi',
            'kode_pos',
            'jenis_tinggal',
            'penerima_pks',
            'kewarganegaraan',
            'telepon',
            'whatsapp',
            'nik_ayah',
            'nama_ayah',
            'lahir_ayah',
            'pendidikan_ayah',
            'penghasilan_ayah',
            'pekerjaan_ayah',
            'nik_ibu',
            'nama_ibu',
            'lahir_ibu',
            'pendidikan_ibu',
            'penghasilan_ibu',
            'pekerjaan_ibu',
            'nik_wali',
            'nama_wali',
            'lahir_wali',
            'pendidikan_wali',
            'penghasilan_wali',
            'pekerjaan_wali',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
