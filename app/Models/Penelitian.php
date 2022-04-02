<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_penelitian',
        'dosen_ketua_id',
        'dosen_anggota',
        'anggota_mhs',
        'jenis_hibah_id',
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

    // public function dosen_anggota(){
    // 	return $this->belongsTo(Dosen::class);
    // }

    public function jenis_hibah(){
    	return $this->belongsTo(Ref_jenishibah::class);
    }

    // public function getdosen_anggotaAttribute($value)
    // {
    //     return explode(',', $value);
    // }

}