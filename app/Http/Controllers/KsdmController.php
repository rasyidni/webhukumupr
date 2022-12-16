<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kdalamnegeri;
use Illuminate\Support\Facades\Storage;

class KsdmController extends Controller
{
    public function index(){
        $data = kdalamnegeri::find(1);
        return view('admin/kdalamnegeri/kdalamnegeri', compact('data'));
    }

    public function tampilkankdalamnegeri() {
        $data = kdalamnegeri::find(1);

        return view('admin/kdalamnegeri/update', compact('data'));
    }

    public function editkdalamnegeri(Request $request, $id){
        $data = kdalamnegeri::find($id);
        
        $rules = [
            'judul' => 'required|max:200',
            'gambar' => 'image',
            'isi' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){

            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            
            $validatedData['gambar'] = $request->file('gambar')->store('kdalamnegeri');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kdalamnegeri')->with('sukses', 'Data berhasil di update');
    }
}
