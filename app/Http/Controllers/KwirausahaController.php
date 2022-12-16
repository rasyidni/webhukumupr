<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kwirausaha;
use Illuminate\Support\Facades\Storage;

class KwirausahaController extends Controller
{
    public function index(){
        $data = kwirausaha::find(1);
        return view('admin/kwirausaha/kwirausaha', compact('data'));
    }

    public function tampilkankwirausaha() {
        $data = kwirausaha::find(1);

        return view('admin/kwirausaha/update', compact('data'));
    }

    public function editkwirausaha(Request $request, $id){
        $data = kwirausaha::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('kwirausaha');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kwirausaha')->with('sukses', 'Data berhasil di update');
    }
}
