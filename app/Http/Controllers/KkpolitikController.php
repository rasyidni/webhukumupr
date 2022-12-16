<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kkpolitik;
use Illuminate\Support\Facades\Storage;

class KkpolitikController extends Controller
{
    public function index(){
        $data = kkpolitik::find(1);
        return view('admin/kkpolitik/kkpolitik', compact('data'));
    }

    public function tampilkankkpolitik() {
        $data = kkpolitik::find(1);

        return view('admin/kkpolitik/update', compact('data'));
    }

    public function editkkpolitik(Request $request, $id){
        $data = kkpolitik::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('kkpolitik');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kkpolitik')->with('sukses', 'Data berhasil di update');
    }
}
