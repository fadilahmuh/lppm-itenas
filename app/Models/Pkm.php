<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_pkm',
        'dosen_ketua_id',
        'dosen_anggota_id',
        'anggota_mhs',
        'nama_hibah_id',
        'nama_mitra',
        'mulai',
        'selesai',
        'tahun',
        'jumlah',
        'status'
    ];

    public function dosen_ketua(){
    	return $this->belongsTo(Dosen::class);
    }

    public function dosen_anggota(){
    	return $this->belongsTo(Dosen::class);
    }

    public function nama_hibah(){
    	return $this->belongsTo(Ref_jenishibah::class);
    }
}