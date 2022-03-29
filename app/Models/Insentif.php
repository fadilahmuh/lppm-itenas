<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insentif extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_publikasi',
        'penulis_ketua_id',
        'penulis_anggota_id',
        'anggota_mhs',
        'jenis_insentif_id',
        'jenis_publikasi_id',
        'tahun',
        'jumlah',
        'status'
    ];

    public function penulis_ketua(){
    	return $this->belongsTo(Dosen::class);
    }

    public function penulis_anggota(){
    	return $this->belongsTo(Dosen::class);
    }

    public function jenis_insentif(){
    	return $this->belongsTo(Ref_jenisinsentif::class);
    }

    public function jenis_publikasi(){
    	return $this->belongsTo(Ref_jenispublikasi::class);
    }
}
