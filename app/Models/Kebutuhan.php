<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebutuhan extends Model
{
    use HasFactory;
    protected $fillable = ['id_pegawai',    'jns_kbthn_teknis',    'kbthn_tentang',    'deskripsi_kbthn',    'fotoVideo'];
    protected $timestamps = true;
}
