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

    public function editkluarnegeri(Request $request, $id){
        $data = kluarnegeri::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('kluarnegeri');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kluarnegeri')->with('sukses', 'Data berhasil di update');
    }
}
