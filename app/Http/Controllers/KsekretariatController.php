<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ksekretariat;
use Illuminate\Support\Facades\Storage;

class KsekretariatController extends Controller
{
    public function index(){
        $data = ksekretariat::find(1);
        return view('admin/ksekretariat/ksekretariat', compact('data'));
    }

    public function tampilkanksekretariat() {
        $data = ksekretariat::find(1);

        return view('admin/ksekretariat/update', compact('data'));
    }

    public function editksekretariat(Request $request, $id){
        $data = ksekretariat::find($id);
        
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
            
            $validatedData['gambar'] = $request->file('gambar')->store('ksekretariat');
        }
            
        $data->update($validatedData);

        return redirect() -> route('ksekretariat')->with('sukses', 'Data berhasil di update');
    }
}
