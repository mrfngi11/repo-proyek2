<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan';

    protected $fillable = [
        'id_customer',
        'id_grooming',
        'id_kondisi',
        'id_jenis',
        'id_keterangan',
        'kucing_nama',
        'kucing_berat',
        'total',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }

    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class, 'id_kondisi');
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }

    public function keterangan()
    {
        return $this->belongsTo(Keterangan::class, 'id_keterangan');
    }

    public function grooming()
    {
        return $this->belongsTo(Grooming::class, 'id_grooming');
    }
}
