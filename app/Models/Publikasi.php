<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    protected $fillable = [
        'judul',
        'dosen_ketua_id',
        'ketua_external',
        'penulis_anggota',
        'penulis_external',
        'jurnal',
        'jenis_publikasi',
        'dana',
        'lingkup',
        'tanggal_publish',
        'tahun',
        'jumlah',
        'status'
    ];

    public function dosen_ketua(){
    	return $this->belongsTo(Dosen::class);
    }

    // public function jenis_hibah(){
    // 	return $this->belongsTo(Ref_jenishibah::class);
    // }

    public function getPenulisInternal()
    {
        return Dosen::findMany(explode(',', $this->penulis_anggota));
    }

    public function getPenulisExternal()
    {
        return explode(',', $this->penulis_external);
    }
    
    public function getjurusan(){
        $j =[];
        $ketua = Dosen::find( $this->dosen_ketua_id);
        array_push($j, $ketua->jurusan);
        $anggota = Dosen::findMany(explode(',', $this->penulis_anggota));
        foreach ($anggota as $a){
            array_push($j, $a->jurusan);
        }
        $j = array_unique($j);
        $j = implode(", ",$j);
        return $j;
    }
}
