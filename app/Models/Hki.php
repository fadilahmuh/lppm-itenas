<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hki extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_hki',
        'jenis_hki',
        'penulis_ketua_id',
        'penulis_anggota',
        'tahun',
        'jumlah',
        'status'
    ];

    public function penulis_ketua(){
    	return $this->belongsTo(Dosen::class);
    }

    // public function penulis_anggota(){
    // 	return $this->belongsTo(Dosen::class);
    // }

}
