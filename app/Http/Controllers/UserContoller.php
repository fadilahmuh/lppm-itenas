<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContoller extends Controller
{
    public function profil() {
        $title = 'Profil';
        return view('profil', compact('title'));
    }
}
