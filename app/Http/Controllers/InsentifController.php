<?php

namespace App\Http\Controllers;

use App\Models\Insentif;
use App\Http\Requests\StoreInsentifRequest;
use App\Http\Requests\UpdateInsentifRequest;
use App\Models\Dosen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InsentifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Hibah Insentif';
        $data = Insentif::where('status', 1)->get();

        return view('template.table-insentif', compact('title','data'));
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
     * @param  \App\Http\Requests\StoreInsentifRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsentifRequest $request)
    {
        $rules = array(
            'judul_publikasi' => 'required',
            'jenis_insentif' => 'required',
            'jenis_publikasi' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required|integer',
            'status' => 'required|boolean',
        );    
        $messages = array(
            'judul_publikasi.required' => 'Judul penelitian tidak boleh kosong!',
            'jenis_insentif.required' => 'Jenis Insentif tidak boleh kosong!',
            'jenis_publikasi.required' => 'Jenis Publikasi tidak boleh kosong!',
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
            Insentif::create([
                'judul' => $request->judul_publikasi,
                'dosen_ketua_id' => $ketua->id,
                'penulis_anggota' => $request->dosen_anggota,
                'jenis_insentif_id' => $request->jenis_insentif,
                'jenis_publikasi_id' => $request->jenis_publikasi,
                'jurnal' => $request->jurnal,
                'tahun' => $request->tahun,
                'jumlah' => $request->jumlah,
                'status' => $stat,
                
            ]);

            $msg = 'Data Hibah Insentif berhasil ditambahkan.';
   
            return redirect()->route('input')->with('success',$msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insentif  $insentif
     * @return \Illuminate\Http\Response
     */
    public function show(Insentif $insentif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insentif  $insentif
     * @return \Illuminate\Http\Response
     */
    public function edit(Insentif $insentif)
    {
        return view('template.edit-insentif', compact('insentif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsentifRequest  $request
     * @param  \App\Models\Insentif  $insentif
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsentifRequest $request, Insentif $insentif)
    {
        $rules = array(
            'judul_publikasi' => 'required',
            'jenis_insentif' => 'required',
            'jenis_publikasi' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required|integer',
            'status' => 'required|boolean',
        );    
        $messages = array(
            'judul_publikasi.required' => 'Judul penelitian tidak boleh kosong!',
            'jenis_insentif.required' => 'Jenis Insentif tidak boleh kosong!',
            'jenis_publikasi.required' => 'Jenis Publikasi tidak boleh kosong!',
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
            Insentif::create([
                'judul' => $request->judul_publikasi,
                'dosen_ketua_id' => $ketua->id,
                'penulis_anggota' => $request->dosen_anggota,
                'jenis_insentif_id' => $request->jenis_insentif,
                'jenis_publikasi_id' => $request->jenis_publikasi,
                'jurnal' => $request->jurnal,
                'tahun' => $request->tahun,
                'jumlah' => $request->jumlah,
                'status' => $stat,
                
            ]);

            $msg = 'Data Hibah Insentif berhasil diupdate.';
   
            return redirect()->route('pkm.index')->with('success',$msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insentif  $insentif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insentif $insentif)
    {
        //
    }
}
