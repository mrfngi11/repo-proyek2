<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';

    protected $fillable = [
        'no_kamar',
        'deskripsi',
        'harga',
        'image',
    ];

    public function reservasi()
    {
        return $this->belongsToMany(Reservasi::class);
    }
}
