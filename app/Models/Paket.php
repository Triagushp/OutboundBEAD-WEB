<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'durasi',
        'kategori',
        'gambar',
    ];

    // Relasi ke booking (1 paket bisa dibooking berkali-kali)
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
