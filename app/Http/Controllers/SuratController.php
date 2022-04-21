<?php

namespace App\Http\Controllers;

use App\Models\Hki;
use App\Models\Pegawai;
use App\Models\Penelitian;
use App\Models\Pkm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use QrCode;
use PDF;

class SuratController extends Controller
{
    //
    public function input_surat()
    {
        $title = 'Create Surat';

        return view('input-surat', compact('title'));
    }

    public function store_surat(Request $request)
    {
        
        $key = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);
        $qrl = route('surat.cek',  $key);

        $pembuat = Pegawai::find($request->pembuat_id);
        if($request->nama_kegiatan == 'penelitian'){
            $kegiatan = 'Penelitian';
            $data = Penelitian::find($request->kegiatan_id);
            // $waktu = Carbon::$data->mulai->translatedFormat('d F Y') .' - '. Carbon::now()->translatedFormat('d F Y');
            $waktu = Carbon::parse($data->mulai)->format('d/m/Y').' - '. Carbon::parse($data->selesai)->format('d/m/Y');
        }elseif($request->nama_kegiatan == 'pkm'){
            $kegiatan = 'Pengabdian Kepada Masyarakat';
            $data = Pkm::find($request->kegiatan_id);
            $waktu = Carbon::parse($data->mulai)->format('d/m/Y').' - '. Carbon::parse($data->selesai)->format('d/m/Y');
        }elseif($request->nama_kegiatan == 'hki'){
            $kegiatan = 'Hak Kekayaan Intelektual';
            $data = Hki::find($request->kegiatan_id);
            $waktu = $data->tahun;
        }
        $nosurat = $request->no_surat.'/C.02.01/LPPM/'.$this->getRomawi(date('m')).'/'.date("Y");

        // dd($request->all(),$nosurat,$waktu,$data->getlistdosen());

        $qrcode = base64_encode(QrCode::format('svg')->size(80)->errorCorrection('H')->generate($qrl));
        $pdf = PDF::loadview('surat-keterangan', compact('qrcode','pembuat','waktu','kegiatan','data','nosurat'))->setPaper('A4', 'potrait');
        return $pdf->stream();

        $rules = array(
            'pembuat-id' => 'required',
            'jenis-surat' => 'required',
            'no-surat' => 'required',
            'nama-kegiatan' => 'required',
            'kegiatan-id' => 'required',
            'pembuat-id' => 'required',

        );
        $messages = array(
            'nama.required' => 'Nama Dosen tidak boleh kosong!',
            'nama.unique' => 'Nama Dosen sudah terdaftar!',
            'nip.required' => 'NIP tidak boleh kosong!',
            'nip.unique' => 'NIP sudah terdaftar!',
            'nidn.required' => 'NIDN tidak boleh kosong!',
            'nidn.unique' => 'NIDN sudah terdaftar!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.unique' => 'Email sudah terdaftar!',
            'jurusan.required' => 'Jurusan tidak boleh kosong!',
        );

        
    }

    function getRomawi($bln){
        switch ($bln){
            case 1: 
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
}




}
