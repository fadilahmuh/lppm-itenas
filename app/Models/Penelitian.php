<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
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

    public function getDosenAnggota(){
        return  Dosen::findMany(explode(',', $this->dosen_anggota));
    }

    public function jenis_hibah(){
    	return $this->belongsTo(Ref_jenishibah::class);
    }

    public function getMhsAnggota(){
        return Mahasiswa::findMany(explode(',', $this->anggota_mhs));
    }

}