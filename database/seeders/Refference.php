<?php

namespace Database\Seeders;

use App\Models\Ref_jenishibah;
use App\Models\Ref_jenisinsentif;
use App\Models\Ref_jenispublikasi;
use Illuminate\Database\Seeder;

class Refference extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ref_jenisinsentif::create(['nama' => 'Insentif Publikasi pada Jurnal Internasional Bereputasi']);
        Ref_jenisinsentif::create(['nama' => 'Insentif Pendampingan']);
        Ref_jenisinsentif::create(['nama' => 'Insentif Publikasi pada Jurnal Internasional (Tidak Terindex)']);
        Ref_jenisinsentif::create(['nama' => 'Insentif Publikasi pada Jurnal Nasional Terakreditasi Ristekdikti']);
        Ref_jenisinsentif::create(['nama' => 'Insentif Publikasi pada Jurnal Nasional Terakreditasi LIPI']);
        Ref_jenisinsentif::create(['nama' => 'Insentif Publikasi pada Jurnal Nasional Tidak Terakreditasi (ISSN)']);
        Ref_jenisinsentif::create(['nama' => 'Buku (Ajar/Referensi) - ISBN']);
        Ref_jenisinsentif::create(['nama' => 'H Indeks Scopus']);
        Ref_jenisinsentif::create(['nama' => 'Hak Kekayaan Intelektual']);
        Ref_jenisinsentif::create(['nama' => 'Insentif Publikasi pada Jurnal Internasional (Tidak Terindex)']);
        Ref_jenisinsentif::create(['nama' => 'E-HKI']);
        Ref_jenisinsentif::create(['nama' => 'Pengajuan ISBN Buku']);
        Ref_jenisinsentif::create(['nama' => 'Luaran Lain']);
        
        Ref_jenishibah::create(['nama' => 'Hibah Penelitian menuju Publikasi Internasional Bereputasi']);
        Ref_jenishibah::create(['nama' => 'Penelitian Unggulan Strategis Itenas']);
        Ref_jenishibah::create(['nama' => 'Penelitian Dosen Madya Itenas']);
        Ref_jenishibah::create(['nama' => 'Penelitian Dosen Pemula Itenas']);
        Ref_jenishibah::create(['nama' => 'Penelitian Mandiri']);
        Ref_jenishibah::create(['nama' => 'Hibah Penelitian Dosen S3']);
        Ref_jenishibah::create(['nama' => 'Penelitian Utama']);

        Ref_jenispublikasi::create(['nama' => 'Prosiding/Seminar Nasional']);
        Ref_jenispublikasi::create(['nama' => 'Prosiding/Seminar Internasional']);
        Ref_jenispublikasi::create(['nama' => 'Jurnal Nasional']);
        Ref_jenispublikasi::create(['nama' => 'Jurnal Internasional']);
        Ref_jenispublikasi::create(['nama' => 'Jurnal Nasional Terakreditasi']);
        Ref_jenispublikasi::create(['nama' => 'Jurnal Internasional Bereputasi']);
        Ref_jenispublikasi::create(['nama' => 'Buku Ber-ISBN']);
        Ref_jenispublikasi::create(['nama' => 'Jurnal Nasional Terindeks DDAJ']);
        Ref_jenispublikasi::create(['nama' => 'Hak Kekayaan Intelektual (HKI)']);
        Ref_jenispublikasi::create(['nama' => 'Draf Buku Ajar']);
        Ref_jenispublikasi::create(['nama' => 'Prosiding/Seminar INternasional yang Terindeks']);
        Ref_jenispublikasi::create(['nama' => 'Poster']);
        Ref_jenispublikasi::create(['nama' => 'Tulisan Ilmiah Populer']);
        Ref_jenispublikasi::create(['nama' => 'Jurnal Nasional Peringkat 5 Sinta']);
        Ref_jenispublikasi::create(['nama' => 'Jurnal Nasional Tidak Terakreditasi - ISSN']);
        Ref_jenispublikasi::create(['nama' => 'H Indeks Scopus']);
        Ref_jenispublikasi::create(['nama' => 'Insentif Pendampingan']);
        Ref_jenispublikasi::create(['nama' => 'E-HKI']);
        Ref_jenispublikasi::create(['nama' => 'Pengajuan ISBN Buku']);
        Ref_jenispublikasi::create(['nama' => 'Produk Iptek dan Lainnya']);

    }
}
