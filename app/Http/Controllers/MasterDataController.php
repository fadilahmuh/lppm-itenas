<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function index()
    {
        $title = 'Master Data';
        $dsn = Dosen::all();
        $mhs = Mahasiswa::all();

        return view('masterdata', compact('title','dsn','mhs'));
    }
}
