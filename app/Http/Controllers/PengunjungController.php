<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kdalamnegeri;
use Illuminate\Support\Facades\Storage;

class PengunjungController extends Controller
{
    public function index(){
        return view('pengunjung/welcome');
    }

    public function index2(){
        return view('pengunjung/index');
    }
}