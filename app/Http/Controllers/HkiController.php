<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHkiRequest;
use App\Models\Dosen;
use App\Models\Hki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Hibah HKI';
        $data = Hki::where('status', 1)->get();

        return view('template.table-hki', compact('title','data'));
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
    public function store(StoreHkiRequest $request)
    {
        $rules = array(
            'nama_hki' => 'required',
            'jenis_hki' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required|integer',
            'status' => 'required|boolean',
        );    
        $messages = array(
            'nama_hki.required' => 'Judul penelitian tidak boleh kosong!',
            'jenis_hki.required' => 'Jenis Insentif tidak boleh kosong!',
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
            Hki::create([
                'judul' => $request->nama_hki,
                'dosen_ketua_id' => $ketua->id,
                'penulis_anggota' => $request->dosen_anggota,
                'jenis_hki' => $request->jenis_hki,
                'tahun' => $request->tahun,
                'jumlah' => $request->jumlah,
                'status' => $stat,
                
            ]);

            $msg = 'Data Hibah HKI berhasil ditambahkan.';
   
            return redirect()->route('input')->with('success',$msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hki  $hki
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Hki $hki)
    {
        if ($request->ajax()) {

            // $modal = $hki;
            $modal = view('template.modal-hki',compact('hki'))->render();
    
            return response()->json([
                'modal' =>  $modal
            ]);  
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hki  $hki
     * @return \Illuminate\Http\Response
     */
    public function edit(Hki $hki)
    {
        return view('template.edit-hki', compact('hki'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hki  $hki
     * @return \Illuminate\Http\Response
     */
    public function update(StoreHkiRequest $request, Hki $hki)
    {
        $rules = array(
            'nama_hki' => 'required',
            'jenis_hki' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required|integer',
            'status' => 'required|boolean',
        );    
        $messages = array(
            'nama_hki.required' => 'Judul penelitian tidak boleh kosong!',
            'jenis_hki.required' => 'Jenis Insentif tidak boleh kosong!',
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
            if (Auth::guard('dosen')->check()){
                $ketua = Auth::user();
                $stat = 0;
            }elseif(Auth::guard('pegawai')->check()){
                $ketua = Dosen::find($request->dosen_ketua);
                $stat = $request->status;
            }
            $hki->update([
                'judul' => $request->nama_hki,
                'dosen_ketua_id' => $ketua->id,
                'penulis_anggota' => $request->dosen_anggota,
                'jenis_hki' => $request->jenis_hki,
                'tahun' => $request->tahun,
                'jumlah' => $request->jumlah,
                'status' => $stat,
                
            ]);

            $msg = 'Data Hibah HKI berhasil diupdate.';
   
            return redirect()->route('hki.index')->with('success',$msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hki  $hki
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hki $hki)
    {
        //
    }
}
