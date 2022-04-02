<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkm extends Model
{

    protected $fillable = [
        'judul_pkm',
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

    public function jenis_hibah(){
    	return $this->belongsTo(Ref_jenishibah::class);
    }

    public function dsn_list()
    {
        return Dosen::findMany(explode(',', $this->dosen_anggota));
    }

    public function mhs_list()
    {
        return Mahasiswa::findMany(explode(',', $this->anggota_mhs));
    }
}