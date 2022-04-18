<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembuat-id',
        'jenis-surat',
        'no-surat',
        'nama-kegiatan',
        'kegiatan-id',
        'tanggal-dibuat',
        'qr',
        'file',
    ];
}
