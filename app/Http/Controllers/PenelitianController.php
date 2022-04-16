<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use App\Http\Requests\StorePenelitianRequest;
use App\Models\Dosen;
use App\Models\Ref_jenishibah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Penelitian';
        $data = Penelitian::where('status', 1)->get();

        return view('template.table-peneltian', compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->ajax()) {
            $form = view('template.user.form-penelitian')->render();

            return response([
                'form' =>  $form
            ]);  
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenelitianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenelitianRequest $request)
    {
        // dd($request->all());
        $rules = array(
            'judul_penelitian' => 'required',
            'jenis_hibah' => 'required',
            'mulai' => 'required',
            'selesai' => 'required|after:mulai',
            'tahun' => 'required',
            'jumlah' => 'required|integer',
            'status' => 'required|boolean',
        );    
        $messages = array(
            'judul_penelitian.required' => 'Judul penelitian tidak boleh kosong!',
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
            Penelitian::create([
                'judul' => $request->judul_penelitian,
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


            $msg = 'Data Hibah Penelitian berhasil ditambahkan.';
   
            return redirect()->route('input')->with('success',$msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Penelitian $penelitian)
    {
        if ($request->ajax()) {

            $modal = view('template.modal-penelitian',compact('penelitian'))->render();
    
            return response()->json([
                'modal' =>  $modal
            ]);  
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function edit(Penelitian $penelitian)
    {
        return view('template.edit-penelitian', compact('penelitian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenelitianRequest  $request
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function update(StorePenelitianRequest $request, Penelitian $penelitian)
    {
        // dd($penelitian);
        $rules = array(
            'judul_penelitian' => 'required',
            'jenis_hibah' => 'required',
            'mulai' => 'required',
            'selesai' => 'required|after:mulai',
            'tahun' => 'required',
            'jumlah' => 'required|integer',
            'status' => 'required|boolean',
        );    
        $messages = array(
            'judul_penelitian.required' => 'Judul penelitian tidak boleh kosong!',
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
            if (Auth::guard('dosen')->check()){
                $ketua = Auth::user();
                $stat = 0;
            }elseif(Auth::guard('pegawai')->check()){
                $ketua = Dosen::find($request->dosen_ketua);
                $stat = $request->status;
            }
            $penelitian->update([
                'judul' => $request->judul_penelitian,
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


            $msg = 'Data Hibah Penelitian berhasil diupdate.';
   
            return redirect()->route('penelitian.index')->with('success',$msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penelitian $penelitian)
    {
        //
    }
}
