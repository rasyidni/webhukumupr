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

    public function editkagama(Request $request){
        $data = kagama::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dagama' => 'required|max:200',
            'nama_dilmu' => 'required|max:200',
            'nama_staff' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dagama' => 'image',
            'gambar_dilmu' => 'image',
            'gambar_staff' => 'image',
            'proker' => 'required',
            'fokus_utama' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_menteri')){

            if($request->oldImageM) {
                Storage::delete($request->oldImageM);
            }
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kagama');
        }

        if($request->file('gambar_dagama')){

            if($request->oldImageda) {
                Storage::delete($request->oldImageda);
            }
            
            $validatedData['gambar_dagama'] = $request->file('gambar_dagama')->store('kagama');
        }

        if($request->file('gambar_dilmu')){

            if($request->oldImagedil) {
                Storage::delete($request->oldImagedil);
            }
            
            $validatedData['gambar_dilmu'] = $request->file('gambar_dilmu')->store('kagama');
        }

        if($request->file('gambar_staff')){

            if($request->oldImagest) {
                Storage::delete($request->oldImagest);
            }
            
            $validatedData['gambar_staff'] = $request->file('gambar_staff')->store('kagama');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kagama')->with('sukses', 'Data berhasil di update');
    }
}
