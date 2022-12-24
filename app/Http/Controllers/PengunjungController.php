<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tentangkami;
use App\Models\kagama;
use App\Models\kdalamnegeri;
use App\Models\kkajian;
use App\Models\kkomunikasi;
use App\Models\kkpolitik;
use App\Models\kksosial;
use App\Models\kluarnegeri;
use App\Models\kpemuda;
use App\Models\kperempuan;
use App\Models\ksdm;
use App\Models\ksekretariat;
use App\Models\kwirausaha;
use App\Models\unitpenerangan;
use Illuminate\Support\Facades\Storage;

class PengunjungController extends Controller
{
    public function index(){
        return view('pengunjung/index');
    }

    public function tentangkami(){
        return view('pengunjung/tentangkami');
    }

    public function berita(){
        return view('pengunjung/berita');
    }

    public function donasi(){
        return view('pengunjung/donasi');
    }

    public function granddesign(){
        return view('pengunjung/granddesign');
    }

    public function kajian(){
        return view('pengunjung/kajian');
    }

    public function regulasi(){
        return view('pengunjung/regulasi');
    }

    public function ukm(){
        return view('pengunjung/ukm');
    }

    public function webinar(){
        return view('pengunjung/webinar');
    }

    public function ka(){
        return view('pengunjung/ka');
    }

    public function kdn(){
        return view('pengunjung/kdn');
    }

    public function kk(){
        return view('pengunjung/kk');
    }

    public function kkmi(){
        return view('pengunjung/kkmi');
    }

    public function kkph(){
        return view('pengunjung/kkph');
    }

    public function kksa(){
        return view('pengunjung/kksa');
    }

    public function kkslh(){
        return view('pengunjung/kkslh');
    }

    public function kln(){
        return view('pengunjung/kln');
    }

    public function kpo(){
        return view('pengunjung/kpo');
    }

    public function kpp(){
        return view('pengunjung/kpp');
    }

    public function kpsdm(){
        return view('pengunjung/kpsdm');
    }

    public function ks(){
        return view('pengunjung/ks');
    }

    public function upi(){
        $data = unitpenerangan::find(1);
        return view('pengunjung/upi', compact('data'));
    }
}