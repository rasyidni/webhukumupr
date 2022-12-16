<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tentangkami;
use Illuminate\Support\Facades\Storage;

class TentangkamiController extends Controller
{
    public function index(){
        $data = tentangkami::find(1);
        return view('admin/tentangkami/tentangkami', compact('data'));
    }

    public function tampilkantentangkami() {
        $data = tentangkami::find(1);

        return view('admin/tentangkami/update', compact('data'));
    }

    public function edittentangkami(Request $request, $id){
        $data = tentangkami::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('tentangkami');
        }
            
        $data->update($validatedData);

        return redirect() -> route('tentangkami')->with('sukses', 'Data berhasil di update');
    }

}
