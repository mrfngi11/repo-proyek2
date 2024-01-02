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
        'id_layanan',
        'id_kondisi',
        'id_jenis',
        'kucing_nama',
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
}
