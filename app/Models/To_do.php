<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class To_do extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'nama', 'alamat'];
    public $timestamps = true;
}
