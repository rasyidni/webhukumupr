<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kwirausaha;
use Illuminate\Support\Facades\Storage;

class KwirausahaController extends Controller
{
    public function index(){
        $data = kwirausaha::find(1);
        return view('admin/kwirausaha/kwirausaha', compact('data'));
    }

    public function tampilkankwirausaha() {
        $data = kwirausaha::find(1);

        return view('admin/kwirausaha/update', compact('data'));
    }

    public function editkwirausaha(Request $request){
        $data = kwirausaha::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dpu' => 'required|max:200',
            'nama_dp' => 'required|max:200',
            'nama_staff1' => 'required|max:200',
            'nama_staff2' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dpu' => 'image',
            'gambar_dp' => 'image',
            'gambar_staff1' => 'image',
            'gambar_staff2' => 'image',
            'fokus_utama' => 'required',
            'proker' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_menteri')){

            if($request->oldImage) {
                Storage::delete($request->oldImagem);
            }
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kwirausaha');
        }

        if($request->file('gambar_dpu')){

            if($request->oldImage) {
                Storage::delete($request->oldImagedpu);
            }
            
            $validatedData['gambar_dpu'] = $request->file('gambar_dpu')->store('kwirausaha');
        }

        if($request->file('gambar_dp')){

            if($request->oldImagedp) {
                Storage::delete($request->oldImagedp);
            }
            
            $validatedData['gambar_dp'] = $request->file('gambar_dp')->store('kwirausaha');
        }

        if($request->file('gambar_staff1')){

            if($request->oldImagest1) {
                Storage::delete($request->oldImagest1);
            }
            
            $validatedData['gambar_staff1'] = $request->file('gambar_staff1')->store('kwirausaha');
        }

        if($request->file('gambar_staff2')){

            if($request->oldImagest2) {
                Storage::delete($request->oldImagest2);
            }
            
            $validatedData['gambar_staff2'] = $request->file('gambar_staff2')->store('kwirausaha');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kwirausaha')->with('sukses', 'Data berhasil di update');
    }
}
