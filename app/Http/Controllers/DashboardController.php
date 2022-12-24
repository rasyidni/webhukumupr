<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\donasi;
use App\Models\granddesign;
use App\Models\kajian;
use App\Models\regulasi;
use App\Models\ukm;
use App\Models\webinar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data1 = News::count();
        $data2 = donasi::count();
        $data3 = granddesign::count();
        $data4 = kajian::count();
        $data5 = regulasi::count();
        $data6 = ukm::count();
        $data7 = webinar::count();
        return view('admin/dashboard/dashboard', compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7'));
    }

}