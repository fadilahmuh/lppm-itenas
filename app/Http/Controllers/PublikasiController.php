<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use App\Http\Requests\StorePublikasiRequest;
use App\Http\Requests\UpdatePublikasiRequest;
use App\Models\Dosen;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Publikasi';
        $data = Publikasi::where('status', 1)->get();

        return view('template.table-publikasi', compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePublikasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePublikasiRequest $request)
    {
        // dd($request->all());
        $rules = array(
            'pub_judul_publikasi' => 'required',
            'pub_jurnal' => 'required',
            'pub_url' => 'required',
            'pub_jenis_publikasi' => 'required',
            'pub_sumber_dana' => 'required',
            'pub_tanggal_publish' => 'required',
            'pub_jumlah' => 'required|integer',
            'status' => 'required|boolean',
        );    
        $messages = array(
            'pub_judul_publikasi.required' => 'Judul publikasi tidak boleh kosong!',
            'pub_jurnal.required' => 'Nama jurnal/proceeding/penerbit tidak boleh kosong!',
            'pub_url.required' => 'URL publikasi tidak boleh kosong!',
            'pub_jenis_publikasi.required' => 'Jenis Publikasi tidak boleh kosong!',
            'pub_sumber_dana.required' => 'Tahun tidak boleh kosong!!',
            'pub_tanggal_publish.required' => 'Tahun tidak boleh kosong!!',
            'pub_jumlah.required' => 'Jumlah tidak boleh kosong!!',
            'pub_jumlah.integer' => 'Jumlah tidak valid, masukan nominal angka!!',
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
                $stat = 0;
            }elseif(Auth::guard('pegawai')->check()){
                $stat = $request->status;
            }

            Publikasi::create([
                'judul' => $request->pub_judul_publikasi,
                'dosen_ketua_id' => $request->pub_dosen_ketua,
                'ketua_external' => $request->pub_penulis_external,
                'penulis_anggota' => $request->pub_penulis_anggota,
                'penulis_external' => $request->pub_penulis_external,
                'jurnal' => $request->pub_jurnal,
                'url' => $request->pub_url,
                'jenis_publikasi_id' => $request->pub_jenis_publikasi,
                'sumber_dana' => $request->pub_sumber_dana,
                'lingkup' => $request->pub_lingkup,
                'tanggal_publish' => $request->pub_tanggal_publish,
                'tahun' => $request->pub_tahun,
                'jumlah' => $request->pub_jumlah,
                'status' => $stat,
                
            ]);


            $msg = 'Data Publikasi berhasil ditambahkan.';
   
            return redirect()->route('input')->with('success',$msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Publikasi $publikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Publikasi $publikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePublikasiRequest  $request
     * @param  \App\Models\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function update(StorePublikasiRequest $request, Publikasi $publikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publikasi $publikasi)
    {
        //
    }
}
