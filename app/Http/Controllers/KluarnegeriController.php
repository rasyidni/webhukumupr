<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kluarnegeri;
use Illuminate\Support\Facades\Storage;

class KluarnegeriController extends Controller
{
    public function index(){
        $data = kluarnegeri::find(1);
        return view('admin/kluarnegeri/kluarnegeri', compact('data'));
    }

    public function tampilkankluarnegeri() {
        $data = kluarnegeri::find(1);

        return view('admin/kluarnegeri/update', compact('data'));
    }

    public function editkluarnegeri(Request $request){
        $data = kluarnegeri::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dlembaga' => 'required|max:200',
            'nama_dalumni' => 'required|max:200',
            'nama_dmanajemen' => 'required|max:200',
            'nama_staff1' => 'required|max:200',
            'nama_staff2' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dlembaga' => 'image',
            'gambar_dalumni' => 'image',
            'gambar_dmanajemen' => 'image',
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
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kluarnegeri');
        }

        if($request->file('gambar_dlembaga')){

            if($request->oldImagedl) {
                Storage::delete($request->oldImagedl);
            }
            
            $validatedData['gambar_dlembaga'] = $request->file('gambar_dlembaga')->store('kluarnegeri');
        }

        if($request->file('gambar_dalumni')){

            if($request->oldImageda) {
                Storage::delete($request->oldImageda);
            }
            
            $validatedData['gambar_dalumni'] = $request->file('gambar_dalumni')->store('kluarnegeri');
        }

        if($request->file('gambar_dmanajemen')){

            if($request->oldImagedm) {
                Storage::delete($request->oldImagedm);
            }
            
            $validatedData['gambar_dmanajemen'] = $request->file('gambar_dmanajemen')->store('kluarnegeri');
        }

        if($request->file('gambar_staff1')){

            if($request->oldImagest1) {
                Storage::delete($request->oldImagest1);
            }
            
            $validatedData['gambar_staff1'] = $request->file('gambar_staff1')->store('kluarnegeri');
        }

        if($request->file('gambar_staff2')){

            if($request->oldImagest2) {
                Storage::delete($request->oldImagest2);
            }
            
            $validatedData['gambar_staff2'] = $request->file('gambar_staff2')->store('kluarnegeri');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kluarnegeri')->with('sukses', 'Data berhasil di update');
    }
}
