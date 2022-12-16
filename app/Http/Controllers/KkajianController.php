<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kkajian;
use Illuminate\Support\Facades\Storage;

class KkajianController extends Controller
{
    public function index(){
        $data = kkajian::find(1);
        return view('admin/kkajian/kkajian', compact('data'));
    }

    public function tampilkankkajian() {
        $data = kkajian::find(1);

        return view('admin/kkajian/update', compact('data'));
    }

    public function editkkajian(Request $request, $id){
        $data = kkajian::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('kkajian');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kkajian')->with('sukses', 'Data berhasil di update');
    }
}


