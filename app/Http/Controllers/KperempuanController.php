<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kperempuan;
use Illuminate\Support\Facades\Storage;


class KperempuanController extends Controller
{
    public function index(){
        $data = kperempuan::find(1);
        return view('admin/kperempuan/kperempuan', compact('data'));
    }

    public function tampilkankperempuan() {
        $data = kperempuan::find(1);

        return view('admin/kperempuan/update', compact('data'));
    }

    public function editkperempuan(Request $request){
        $data = kperempuan::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dkip' => 'required|max:200',
            'nama_dpp' => 'required|max:200',
            'nama_staff' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dkip' => 'image',
            'gambar_dpp' => 'image',
            'gambar_staff' => 'image',
            'fokus_utama' => 'required',
            'proker' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_menteri')){

            if($request->oldImagem) {
                Storage::delete($request->oldImagem);
            }
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kperempuan');
        }

        if($request->file('gambar_dkip')){

            if($request->oldImagedkip) {
                Storage::delete($request->oldImagedkip);
            }
            
            $validatedData['gambar_dkip'] = $request->file('gambar_dkip')->store('kperempuan');
        }

        if($request->file('gambar_dpp')){

            if($request->oldImagedpp) {
                Storage::delete($request->oldImagedpp);
            }
            
            $validatedData['gambar_dpp'] = $request->file('gambar_dpp')->store('kperempuan');
        }

        if($request->file('gambar_staff')){

            if($request->oldImagest) {
                Storage::delete($request->oldImagest);
            }
            
            $validatedData['gambar_staff'] = $request->file('gambar_staff')->store('kperempuan');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kperempuan')->with('sukses', 'Data berhasil di update');
    }
}
