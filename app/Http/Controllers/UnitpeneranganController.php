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

    public function editunitpenerangan(Request $request){
        $data = unitpenerangan::find(1);
        
        $rules = [
            'nama_kepala' => 'required|max:200',
            'nama_anggota1' => 'required|max:200',
            'nama_anggota2' => 'required|max:200',
            'gambar_kepala' => 'image',
            'gambar_anggota1' => 'image',
            'gambar_anggota2' => 'image',
            'penjelasan' => 'required',
            'proker' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_kepala')){

            if($request->oldImagek) {
                Storage::delete($request->oldImagek);
            }
            
            $validatedData['gambar_kepala'] = $request->file('gambar_kepala')->store('unitpenerangan');
        }

        if($request->file('gambar_anggota1')){

            if($request->oldImagea1) {
                Storage::delete($request->oldImagea1);
            }
            
            $validatedData['gambar_anggota1'] = $request->file('gambar_anggota1')->store('unitpenerangan');
        }

        if($request->file('gambar_anggota2')){

            if($request->oldImagea2) {
                Storage::delete($request->oldImagea2);
            }
            
            $validatedData['gambar_anggota2'] = $request->file('gambar_anggota2')->store('unitpenerangan');
        }
            
        $data->update($validatedData);

        return redirect() -> route('unitpenerangan')->with('sukses', 'Data berhasil di update');
    }
}
