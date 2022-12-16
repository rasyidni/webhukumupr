<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kkomunikasi;
use Illuminate\Support\Facades\Storage;

class KkomunikasiController extends Controller
{
    public function index(){
        $data = kkomunikasi::find(1);
        return view('admin/kkomunikasi/kkomunikasi', compact('data'));
    }

    public function tampilkankkomunikasi() {
        $data = kkomunikasi::find(1);

        return view('admin/kkomunikasi/update', compact('data'));
    }

    public function editkkomunikasi(Request $request, $id){
        $data = kkomunikasi::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('kkomunikasi');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kkomunikasi')->with('sukses', 'Data berhasil di update');
    }
}
