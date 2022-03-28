<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $title = 'Dashboard';
        return view('index', compact('title'));
    }

    public function input() {
        $title = 'Input Data Baru';
        return view('input', compact('title'));
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
}
