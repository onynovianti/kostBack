<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'username',
        'password',
        'noHp',
        'email',
        'status'
    ];
}
