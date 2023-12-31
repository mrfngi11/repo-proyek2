<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grooming extends Model
{
    use HasFactory;

    protected $table = 'grooming';

    protected $fillable = [
        'deskripsi',
        'harga',
        'image'
    ];

    public function kucing()
    {
        return $this->belongsTo(Kucing::class, 'id_kucing');
    }

    public function pesan()
    {
        return $this->belongsToMany(Pesan::class);
    }
}
