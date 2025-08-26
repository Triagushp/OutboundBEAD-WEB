<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AkunUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'akun_user';
    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'nama',
        'email',
        'password',
        'pwasli',
        'status',
        'nohp',
        'alamat',
        'tanggal_create',
        'gambar',
        'status_akun',
        'last_login_at',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
