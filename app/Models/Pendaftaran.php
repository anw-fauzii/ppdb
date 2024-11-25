<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = "pendaftaran";

    protected $fillable = [
        'user_id',
        'tahun_ajaran_id',
        'kategori_id',
        'pembayaran',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $datePrefix = TahunAjaran::latest()->first();

            $latestCode = Pendaftaran::where('id', 'like', "%" . $datePrefix->tahun_pendaftaran . "%")
                ->orderBy('id', 'desc')
                ->value('id');

            if ($latestCode) {
                $sequence = intval(substr($latestCode, -3)) + 1;
            } else {
                $sequence = 1;
            }

            $model->id = $datePrefix->tahun_pendaftaran . str_pad($sequence, 3, '0', STR_PAD_LEFT);
        });
    }
}
