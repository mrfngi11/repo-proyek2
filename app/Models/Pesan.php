<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan';

    protected $fillable = [
        'status'
    ];

    public function grooming()
    {
        return $this->belongsTo(Grooming::class, 'id_grooming');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }

    public function kucing()
    {
        return $this->belongsTo(Kucing::class, 'id_kucing');
    }
}
