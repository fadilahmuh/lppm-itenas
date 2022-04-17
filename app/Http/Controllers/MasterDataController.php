<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MasterDataController extends Controller
{
    public function index()
    {
        $title = 'Master Data';
        $dsn = Dosen::all();
        $mhs = Mahasiswa::all();

        return view('masterdata', compact('title','dsn','mhs'));
    }

    public function create_dosen()
    {
        $title = 'Create Dosen';

        return view('template.form-dosen', compact('title'));
    }

    public function store_dosen(Request $request)
    {
        // dd($request->all());
        $rules = array(
            'nama' => 'required|unique:dosens,nama',
            'nip' => 'required|unique:dosens,nip',
            'nidn' => 'required|unique:dosens,nidn',
            'email' => 'required|unique:dosens,email',
            'jurusan' => 'required',
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

        $request->all();
        $validator = Validator::make($request->all(), $rules, $messages);        

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            Dosen::create([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'nidn' => $request->nidn,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
                'password' => bcrypt('itenas2022')
            ]);


            $msg = 'Data Dosen berhasil ditambahkan.';
   
            return redirect()->route('masterdata')->with('success',$msg);
        }
    }

    public function create_mhs()
    {
        $title = 'Create Mahasiswa';

        return view('template.app', compact('title'));
    }
}
