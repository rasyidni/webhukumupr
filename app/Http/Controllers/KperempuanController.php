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

    public function editkperempuan(Request $request, $id){
        $data = kperempuan::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('kperempuan');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kperempuan')->with('sukses', 'Data berhasil di update');
    }
}
