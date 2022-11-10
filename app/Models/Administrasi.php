<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;
    protected $fillable = ['id_kebutuhan',    'urgenci',    'kategori',    'progres',    'pic'];
    protected $timestamps = true;
}
