<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    protected $fillable = [
        'id_customer',
        'id_kamar',
        'id_tipe',
        'jumlah_kucing',
        'check_in',
        'check_out',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }

    public function tipe()
    {
        return $this->belongsTo(Tipe::class, 'id_tipe');
    }
}
