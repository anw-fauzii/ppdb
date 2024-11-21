<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = "dokumen";

    protected $fillable = [
        'user_id',
        'kartu_keluarga',
        'akta_kelahiran',
        'ktp_ayah',
        'ktp_ibu',
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
