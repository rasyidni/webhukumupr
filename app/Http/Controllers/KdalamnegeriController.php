<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kdalamnegeri;
use Illuminate\Support\Facades\Storage;

class KdalamnegeriController extends Controller
{
    public function index(){
        $data = kdalamnegeri::find(1);
        return view('admin/kdalamnegeri/kdalamnegeri', compact('data'));
    }

    public function tampilkankdalamnegeri() {
        $data = kdalamnegeri::find(1);

        return view('admin/kdalamnegeri/update', compact('data'));
    }

    public function editkdalamnegeri(Request $request){
        $data = kdalamnegeri::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dstatistik' => 'required|max:200',
            'nama_duak' => 'required|max:200',
            'nama_duou' => 'required|max:200',
            'nama_staff1' => 'required|max:200',
            'nama_staff2' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dstatistik' => 'image',
            'gambar_duak' => 'image',
            'gambar_duou' => 'image',
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
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kdalamnegeri');
        }

        if($request->file('gambar_dstatistik')){

            if($request->oldImageds) {
                Storage::delete($request->oldImageds);
            }
            
            $validatedData['gambar_dstatistik'] = $request->file('gambar_dstatistik')->store('kdalamnegeri');
        }

        if($request->file('gambar_duak')){

            if($request->oldImageduak) {
                Storage::delete($request->oldImageduak);
            }
            
            $validatedData['gambar_duak'] = $request->file('gambar_duak')->store('kdalamnegeri');
        }

        if($request->file('gambar_duou')){

            if($request->oldImageduou) {
                Storage::delete($request->oldImageduou);
            }
            
            $validatedData['gambar_duou'] = $request->file('gambar_duou')->store('kdalamnegeri');
        }

        if($request->file('gambar_staff1')){

            if($request->oldImagest1) {
                Storage::delete($request->oldImagest1);
            }
            
            $validatedData['gambar_staff1'] = $request->file('gambar_staff1')->store('kdalamnegeri');
        }

        if($request->file('gambar_staff2')){

            if($request->oldImagest2) {
                Storage::delete($request->oldImagest2);
            }
            
            $validatedData['gambar_staff2'] = $request->file('gambar_staff2')->store('kdalamnegeri');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kdalamnegeri')->with('sukses', 'Data berhasil di update');
    }
}


    