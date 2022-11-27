<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya_tambahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'keterangan',
        'biaya'
    ];
}
