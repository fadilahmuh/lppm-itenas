<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hki extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'jenis_hki',
        'dosen_ketua_id',
        'penulis_anggota',
        'tahun',
        'jumlah',
        'status'
    ];

    public function dosen_ketua(){
    	return $this->belongsTo(Dosen::class);
    }

    public function getjurusan(){
        $j =[];
        $ketua = Dosen::find( $this->dosen_ketua_id);
        array_push($j, $ketua->jurusan);
        $anggota = Dosen::findMany(explode(',', $this->dosen_anggota));
        foreach ($anggota as $a){
            array_push($j, $a->jurusan);
        }
        $j = array_unique($j);
        $j = implode(", ",$j);
        return $j;
    }

}
