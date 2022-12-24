<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ksekretariat;
use Illuminate\Support\Facades\Storage;

class KsekretariatController extends Controller
{
    public function index(){
        $data = ksekretariat::find(1);
        return view('admin/ksekretariat/ksekretariat', compact('data'));
    }

    public function tampilkanksekretariat() {
        $data = ksekretariat::find(1);

        return view('admin/ksekretariat/update', compact('data'));
    }

    public function editksekretariat(Request $request){
        $data = ksekretariat::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dpi' => 'required|max:200',
            'nama_dmp' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dpi' => 'image',
            'gambar_dmp' => 'image',
            'fokus_utama' => 'required',
            'proker' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_menteri')){

            if($request->oldImagem) {
                Storage::delete($request->oldImagem);
            }
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('ksekretariat');
        }

        if($request->file('gambar_dpi')){

            if($request->oldImagedpi) {
                Storage::delete($request->oldImagedpi);
            }
            
            $validatedData['gambar_dpi'] = $request->file('gambar_dpi')->store('ksekretariat');
        }

        if($request->file('gambar_dmp')){

            if($request->oldImagedmp) {
                Storage::delete($request->oldImagedmp);
            }
            
            $validatedData['gambar_dmp'] = $request->file('gambar_dmp')->store('ksekretariat');
        }
            
        $data->update($validatedData);

        return redirect() -> route('ksekretariat')->with('sukses', 'Data berhasil di update');
    }
}
