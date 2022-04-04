<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insentif extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'dosen_ketua_id',
        'penulis_anggota',
        'jenis_insentif_id',
        'jenis_publikasi_id',
        'jurnal',
        'tahun',
        'jumlah',
        'status'
    ];

    public function dosen_ketua(){
    	return $this->belongsTo(Dosen::class);
    }

    public function jenis_insentif(){
    	return $this->belongsTo(Ref_jenisinsentif::class);
    }

    public function jenis_publikasi(){
    	return $this->belongsTo(Ref_jenispublikasi::class);
    }

    public function getDosenAnggota(){
        return  Dosen::findMany(explode(',', $this->penulis_anggota));
    }
}
