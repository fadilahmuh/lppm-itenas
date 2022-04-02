<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Hki;
use App\Models\Insentif;
use App\Models\Mahasiswa;
use App\Models\Penelitian;
use App\Models\Pkm;
use App\Models\Ref_jenishibah;
use App\Models\Ref_jenisinsentif;
use App\Models\Ref_jenispublikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;


class MainController extends Controller
{
    public function index() {
        $title = 'Dashboard';

        // $penelitians = Penelitian::where('status', 1)->get();
        $penelitians = Penelitian::all();
        $pkms = Pkm::all();
        $insentifs = Insentif::all();
        $hkis = Hki::all();

        $latest = DB::select(DB::raw("select 'penelitian' as table_name, id, jumlah, status, created_at from penelitians WHERE STATUS = 0 UNION ALL
        select 'pkm' as table_name, id, jumlah, status, created_at from pkms WHERE STATUS = 0 UNION all
        select 'insentif' as table_name, id, jumlah, status, created_at from insentifs WHERE STATUS = 0 UNION all
        select 'hki' as table_name, id, jumlah, status, created_at from hkis WHERE STATUS = 0
        ORDER BY created_at DESC"));

        $panel= '';
        if(!empty($latest)){
            $latest = array_slice($latest, 0, 2);

            foreach($latest as $l){
                if ($l->table_name == 'pkm'){
                    $data = Pkm::find($l->id);
                    $panel = $panel.view('template.panel-post-pkm',compact('data'));
                }elseif ($l->table_name == 'penelitian'){
                    $data = Penelitian::find($l->id);
                    $panel = $panel.view('template.panel-post-penelitian',compact('data'));
                }elseif ($l->table_name == 'insentif'){
                    $data = Insentif::find($l->id);
                    $panel = $panel.view('template.panel-post-insentif',compact('data'));
                }elseif ($l->table_name == 'hki'){
                    $data = Hki::find($l->id);
                    $panel = $panel.view('template.panel-post-hki',compact('data'));
                }
            }
        } 
        

        return view('index', compact('title','panel', 'penelitians', 'pkms','insentifs', 'hkis'));
    }

    public function test() {
        $list_dsn = [3,7];
        $data = Dosen::findMany($list_dsn);
        dd($data);
    }

    public function input() {
        $title = 'Input Data Baru';
        return view('input', compact('title'));
    }

    public function input2() {
        $title = 'Input Data Baru';
        return view('input2', compact('title'));
    }

    public function profil() {
        $title = 'Profil';
        return view('profil', compact('title'));
    }

    public function input_penelitian(Request $request) {
        if ($request->ajax()) {
            $form = view('template.user.form-penelitian')->render();

            // return response()->json([
            //     'form' =>  $form
            // ]);  

            return response([
                'form' =>  $form
            ]);  
        }
    }

    public function input_pkm(Request $request) {
        if ($request->ajax()) {

            $form = view('template.user.form-pkm')->render();
    
            return response()->json([
                'form' =>  $form
            ]);   
        }
    }

    public function input_insentif(Request $request) {
        if ($request->ajax()) {

            $form = view('template.user.form-insentif')->render();
    
            return response()->json([
                'form' =>  $form
            ]);  
        }
    }

    public function input_haki(Request $request) {
        if ($request->ajax()) {

            $form = view('template.user.form-haki')->render();
    
            return response()->json([
                'form' =>  $form
            ]);  
        }
    }

    public function get_dosen(Request $request) {
        if ($request->ajax()) {
            
            if($request->has('q')){
                $search = $request->q;
                $data = Dosen::where('id', '!=', Auth::user()->id)
                            ->where('nama','LIKE', '%'.$search.'%')->get();
            }else {
                // $data = DB::table('dosens')->select("nama")->get();
                $data = Dosen::where('id', '!=', Auth::user()->id)->get();
            }

            $response = array();
            foreach($data as $d){
                $response[] = array(
                    "id"=>$d->id,
                    "text"=>$d->nama
                );
            }
    
            return response()->json($response);  
        }
    }

    public function get_mhs(Request $request) {
        if ($request->ajax()) {
            
            if($request->has('q')){
                $search = $request->q;
                $data = Mahasiswa::where('nama','LIKE', '%'.$search.'%')->get();
            }else {
                $data = Mahasiswa::all();
            }

            $response = array();
            foreach($data as $d){
                $response[] = array(
                    "id"=>$d->id,
                    "text"=>$d->nrp.'-'.$d->nama
                );
            }
    
            return response()->json($response);  
        }
    }

    public function get_hibah(Request $request) {
        if ($request->ajax()) {
            
            if($request->has('q')){
                $search = $request->q;
                $data = Ref_jenishibah::where('nama','LIKE', '%'.$search.'%')->get();
            }else {
                $data = Ref_jenishibah::all();
            }

            $response = array();
            foreach($data as $d){
                $response[] = array(
                    "id"=>$d->id,
                    "text"=>$d->nama
                );
            }
    
            return response()->json($response);  
        }
    }

    public function get_insentif(Request $request) {
        if ($request->ajax()) {
            
            if($request->has('q')){
                $search = $request->q;
                $data = Ref_jenisinsentif::where('nama','LIKE', '%'.$search.'%')->get();
            }else {
                $data = Ref_jenisinsentif::all();
            }

            $response = array();
            foreach($data as $d){
                $response[] = array(
                    "id"=>$d->id,
                    "text"=>$d->nama
                );
            }
    
            return response()->json($response);  
        }
    }

    public function get_pub(Request $request) {
        if ($request->ajax()) {
            
            if($request->has('q')){
                $search = $request->q;
                $data = Ref_jenispublikasi::where('nama','LIKE', '%'.$search.'%')->get();
            }else {
                $data = Ref_jenispublikasi::all();
            }

            $response = array();
            foreach($data as $d){
                $response[] = array(
                    "id"=>$d->id,
                    "text"=>$d->nama
                );
            }
    
            return response()->json($response);  
        }
    }
}