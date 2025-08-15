<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Table name (opsional, Laravel otomatis pakai "bookings")
    protected $table = 'bookings';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'tanggal',
        'jumlah_peserta',
        'kapasitas',
        'status',
    ];

    // Tipe data casting
    protected $casts = [
        'tanggal' => 'date',
        'jumlah_peserta' => 'integer',
        'kapasitas' => 'integer',
    ];

    // Scope untuk tanggal available
    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    // Cek apakah tanggal masih tersedia
    public function isAvailable()
    {
        return $this->status === 'available' && $this->jumlah_peserta < $this->kapasitas;
    }
}
