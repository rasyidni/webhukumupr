<?php

namespace App\Http\Controllers;

use App\Models\donasi;
use App\Models\kajian;
use App\Models\granddesign;
use App\Models\webinar;
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
use App\Models\News;
use App\Models\regulasi;
use App\Models\ukm;
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
        $data1 = News::latest()->paginate(6);
        return view('pengunjung/berita', compact('data', 'data1'));
    }

    public function kajian(){
        $data = tentangkami::find(1);
        $data1 = kajian::paginate(6);
        return view('pengunjung/kajian', compact('data', 'data1'));
    }

    public function donasi(){
        $data = tentangkami::find(1);
        $data1 = donasi::paginate(9);
        return view('pengunjung/donasi', compact('data', 'data1'));
    }

    public function detaildonasi($id){
        $data = tentangkami::find(1);
        $data1 = donasi::find($id);
        return view('pengunjung/detaildonasi', compact('data', 'data1'));
    }

    public function webinar(){
        $data = tentangkami::find(1);
        $data1 = webinar::paginate(9);
        return view('pengunjung/webinar', compact('data', 'data1'));
    }

    public function detailwebinar($id){
        $data = tentangkami::find(1);
        $data1 = webinar::find($id);
        return view('pengunjung/detailwebinar', compact('data', 'data1'));
    }


    public function granddesign(){
        $data = tentangkami::find(1);
        $data1 = granddesign::paginate(9);
        return view('pengunjung/granddesign', compact('data', 'data1'));
    }

    public function regulasi(){
        $data = tentangkami::find(1);
        $data1 = regulasi::paginate(9);
        return view('pengunjung/regulasi', compact('data', 'data1'));
    }

    public function ukm(){
        $data = tentangkami::find(1);
        $data1 = ukm::paginate(8);
        return view('pengunjung/ukm', compact('data', 'data1'));
    }

    public function detailukm($id){
        $data = tentangkami::find(1);
        $data1 = ukm::find($id);
        return view('pengunjung/detailukm', compact('data', 'data1'));
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