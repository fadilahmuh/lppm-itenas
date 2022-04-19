<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // dd($request->all());
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




}
