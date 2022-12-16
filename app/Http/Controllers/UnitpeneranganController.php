<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\unitpenerangan;
use Illuminate\Support\Facades\Storage;

class UnitpeneranganController extends Controller
{
    public function index(){
        $data = unitpenerangan::find(1);
        return view('admin/unitpenerangan/upi', compact('data'));
    }

    public function tampilkanunitpenerangan() {
        $data = unitpenerangan::find(1);

        return view('admin/unitpenerangan/update', compact('data'));
    }

    public function editunitpenerangan(Request $request, $id){
        $data = unitpenerangan::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('unitpenerangan');
        }
            
        $data->update($validatedData);

        return redirect() -> route('unitpenerangan')->with('sukses', 'Data berhasil di update');
    }
}
