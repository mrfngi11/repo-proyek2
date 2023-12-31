<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jenis;
use App\Models\Kondisi;

class Kucing extends Model
{
    use HasFactory;

    protected $table = 'kucing';

    protected $fillable = [
        'kucing_nama',
        'id_kondisi',
        'id_jenis',
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis');
    }

    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class, 'id_kondisi');
    }

    public function kamar()
    {
        return $this->belongsToMany(Kamar::class);
    }

    public function grooming()
    {
        return $this->belongsToMany(Grooming::class);
    }

    public function pesan()
    {
        return $this->belongsToMany(Pesan::class);
    }

    public function reservasi()
    {
        return $this->belongsToMany(Reservasi::class);
    }

}
