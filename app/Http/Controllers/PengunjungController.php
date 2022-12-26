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

class PengunjungController extends Controller
{
    public function index(){
        $data = tentangkami::find(1);
        return view('pengunjung/index', compact('data'));
    }

    public function tentangkami(){
        $data = tentangkami::find(1);
        return view('pengunjung/tentangkami', compact('data'));
    }

    public function berita(){
        $data = tentangkami::find(1);
        return view('pengunjung/berita', compact('data'));
    }

    public function donasi(){
        $data = tentangkami::find(1);
        return view('pengunjung/donasi', compact('data'));
    }

    public function granddesign(){
        $data = tentangkami::find(1);
        return view('pengunjung/granddesign', compact('data'));
    }

    public function kajian(){
        $data = tentangkami::find(1);
        return view('pengunjung/kajian', compact('data'));
    }

    public function regulasi(){
        $data = tentangkami::find(1);
        return view('pengunjung/regulasi', compact('data'));
    }

    public function ukm(){
        $data = tentangkami::find(1);
        return view('pengunjung/ukm', compact('data'));
    }

    public function webinar(){
        $data = tentangkami::find(1);
        return view('pengunjung/webinar', compact('data'));
    }

    public function ka(){
        $data = tentangkami::find(1);
        $data1 = kagama::find(1);
        return view('pengunjung/ka', compact('data', 'data1'));
    }

    public function kdn(){
        $data = tentangkami::find(1);
        $data1 = kdalamnegeri::find(1);
        return view('pengunjung/kdn', compact('data', 'data1'));
    }

    public function kk(){
        $data = tentangkami::find(1);
        $data1 = kwirausaha::find(1);
        return view('pengunjung/kk', compact('data', 'data1'));
    }

    public function kkmi(){
        $data = tentangkami::find(1);
        $data1 = kkomunikasi::find(1);
        return view('pengunjung/kkmi', compact('data', 'data1'));
    }

    public function kkph(){
        $data = tentangkami::find(1);
        $data1 = kkpolitik::find(1);
        return view('pengunjung/kkph', compact('data', 'data1'));
    }

    public function kksa(){
        $data = tentangkami::find(1);
        $data1 = kkajian::find(1);
        return view('pengunjung/kksa', compact('data', 'data1'));
    }

    public function kkslh(){
        $data = tentangkami::find(1);
        $data1 = kksosial::find(1);
        return view('pengunjung/kkslh', compact('data', 'data1'));
    }

    public function kln(){
        $data = tentangkami::find(1);
        $data1 = kluarnegeri::find(1);
        return view('pengunjung/kln', compact('data', 'data1'));
    }

    public function kpo(){
        $data = tentangkami::find(1);
        $data1 = kpemuda::find(1);
        return view('pengunjung/kpo', compact('data', 'data1'));
    }

    public function kpp(){
        $data1 = kperempuan::find(1);
        $data = tentangkami::find(1);
        return view('pengunjung/kpp', compact('data', 'data1'));
    }

    public function kpsdm(){
        $data1 = ksdm::find(1);
        $data = tentangkami::find(1);
        return view('pengunjung/kpsdm', compact('data', 'data1'));
    }

    public function ks(){
        $data1 = ksekretariat::find(1);
        $data = tentangkami::find(1);
        return view('pengunjung/ks', compact('data', 'data1'));
    }

    public function upi(){
        $data1 = unitpenerangan::find(1);
        $data = tentangkami::find(1);
        return view('pengunjung/upi', compact('data', 'data1'));
    }
}