<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kagama;
use Illuminate\Support\Facades\Storage;

class KagamaController extends Controller
{
    public function index(){
        $data = kagama::find(1);
        return view('admin/kagama/kagama', compact('data'));
    }

    public function tampilkankagama() {
        $data = kagama::find(1);

        return view('admin/kagama/update', compact('data'));
    }

    public function editkagama(Request $request, $id){
        $data = kagama::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('kagama');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kagama')->with('sukses', 'Data berhasil di update');
    }
}
