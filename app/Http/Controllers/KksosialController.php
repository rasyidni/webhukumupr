<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kksosial;
use Illuminate\Support\Facades\Storage;


class KksosialController extends Controller
{
    public function index(){
        $data = kksosial::find(1);
        return view('admin/kksosial/kksosial', compact('data'));
    }

    public function tampilkankksosial() {
        $data = kksosial::find(1);

        return view('admin/kksosial/update', compact('data'));
    }

    public function editkksosial(Request $request){
        $data = kksosial::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dsosial' => 'required|max:200',
            'nama_dlingkungan' => 'required|max:200',
            'nama_staff1' => 'required|max:200',
            'nama_staff2' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dsosial' => 'image',
            'gambar_dlingkungan' => 'image',
            'gambar_staff1' => 'image',
            'gambar_staff2' => 'image',
            'fokus_utama' => 'required',
            'proker' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_menteri')){

            if($request->oldImagem) {
                Storage::delete($request->oldImagem);
            }
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kksosial');
        }

        if($request->file('gambar_dsosial')){

            if($request->oldImageds) {
                Storage::delete($request->oldImageds);
            }
            
            $validatedData['gambar_dsosial'] = $request->file('gambar_dsosial')->store('kksosial');
        }

        if($request->file('gambar_dlingkungan')){

            if($request->oldImagedl) {
                Storage::delete($request->oldImagedl);
            }
            
            $validatedData['gambar_dlingkungan'] = $request->file('gambar_dlingkungan')->store('kksosial');
        }

        if($request->file('gambar_staff1')){

            if($request->oldImagest1) {
                Storage::delete($request->oldImagest1);
            }
            
            $validatedData['gambar_staff1'] = $request->file('gambar_staff1')->store('kksosial');
        }

        if($request->file('gambar_staff2')){

            if($request->oldImagest2) {
                Storage::delete($request->oldImagest2);
            }
            
            $validatedData['gambar_staff2'] = $request->file('gambar_staff2')->store('kksosial');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kksosial')->with('sukses', 'Data berhasil di update');
    }
}
