<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_ruangan',
    ];

    public function mengajar() {
        return $this->hasMany(Mengajar::class);
    }
}
