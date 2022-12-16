<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kpemuda;
use Illuminate\Support\Facades\Storage;

class KpemudaController extends Controller
{
    public function index(){
        $data = kpemuda::find(1);
        return view('admin/kpemuda/kpemuda', compact('data'));
    }

    public function tampilkankpemuda() {
        $data = kpemuda::find(1);

        return view('admin/kpemuda/update', compact('data'));
    }

    public function editkpemuda(Request $request, $id){
        $data = kpemuda::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('kpemuda');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kpemuda')->with('sukses', 'Data berhasil di update');
    }
}
