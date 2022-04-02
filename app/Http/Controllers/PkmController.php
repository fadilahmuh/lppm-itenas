<?php

namespace App\Http\Controllers;

use App\Models\Pkm;
use Illuminate\Http\Request;
use App\Http\Requests\StorePkmRequest;
use App\Models\Dosen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePkmRequest $request)
    {
        $rules = array(
            'judul_pkm' => 'required',
            'jenis_hibah' => 'required',
            'mulai' => 'required',
            'selesai' => 'required|after:mulai',
            'tahun' => 'required',
            'jumlah' => 'required|integer',
            'status' => 'required|boolean',
        );    
        $messages = array(
            'judul_pkm.required' => 'Judul penelitian tidak boleh kosong!',
            'jenis_hibah.required' => 'Jenis Hibah tidak boleh kosong!',
            'mulai.required' => 'Tanggal mulai tidak boleh kosong!',
            'selesai.required' => 'Tanggal selesai tidak boleh kosong!',
            'selesai.after' => 'Tanggal Mulai-Selesai tidak valid!',
            'tahun.required' => 'Tahun tidak boleh kosong!!',
            'jumlah.required' => 'Jumlah tidak boleh kosong!!',
            'jumlah.integer' => 'Jumlah tidak valid, masukan nominal angka!!',
            'status.required' => 'Status tidak valid!',
            'status.boolean' => 'Status tidak valid!',
        );

        $request->all();
        $validator = Validator::make($request->all(), $rules, $messages);        

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            // dd($request->all());
            if (Auth::guard('dosen')->check()){
                $ketua = Auth::user();
                $stat = 0;
            }elseif(Auth::guard('pegawai')->check()){
                $ketua = Dosen::find($request->dosen_ketua);
                $stat = $request->status;
            }
            Pkm::create([
                'judul_pkm' => $request->judul_pkm,
                'dosen_ketua_id' => $ketua->id,
                'dosen_anggota' => $request->dosen_anggota,
                'anggota_mhs' => $request->anggota_mhs,
                'jenis_hibah_id' => $request->jenis_hibah,
                'nama_mitra' => $request->nama_mitra,
                'mulai' => $request->mulai,
                'selesai' => $request->selesai,
                'tahun' => $request->tahun,
                'jumlah' => $request->jumlah,
                'status' => $stat,
                
            ]);


            $msg = 'Data Hibah PKM berhasil ditambahkan.';
   
            return redirect()->route('input')->with('success',$msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pkm  $pkm
     * @return \Illuminate\Http\Response
     */
    public function show(pkm $pkm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pkm  $pkm
     * @return \Illuminate\Http\Response
     */
    public function edit(pkm $pkm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pkm  $pkm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pkm $pkm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pkm  $pkm
     * @return \Illuminate\Http\Response
     */
    public function destroy(pkm $pkm)
    {
        //
    }
}
