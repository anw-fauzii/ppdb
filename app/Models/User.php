<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $datePrefix = Carbon::now()->format('ymd');

            $latestCode = User::where('id', 'like', "%" . $datePrefix . "%")
                ->orderBy('id', 'desc')
                ->value('id');

            if ($latestCode) {
                $sequence = intval(substr($latestCode, -2)) + 1;
            } else {
                $sequence = 1;
            }

            $model->id = $datePrefix . str_pad($sequence, 2, '0', STR_PAD_LEFT);
        });
    }
}
