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

    public function editkksosial(Request $request, $id){
        $data = kksosial::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('kksosial');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kksosial')->with('sukses', 'Data berhasil di update');
    }
}
