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

    public function editkkajian(Request $request){
        $data = kkajian::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dks' => 'required|max:200',
            'nama_da' => 'required|max:200',
            'nama_kkajian' => 'required|max:200',
            'nama_kaksi' => 'required|max:200',
            'nama_staff' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dks' => 'image',
            'gambar_da' => 'image',
            'gambar_kkajian' => 'image',
            'gambar_kaksi' => 'image',
            'gambar_staff' => 'image',
            'fokus_utama' => 'required',
            'proker' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_menteri')){

            if($request->oldImagem) {
                Storage::delete($request->oldImagem);
            }
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kkajian');
        }

        if($request->file('gambar_dks')){

            if($request->oldImagedks) {
                Storage::delete($request->oldImagedks);
            }
            
            $validatedData['gambar_dks'] = $request->file('gambar_dks')->store('kkajian');
        }

        if($request->file('gambar_da')){

            if($request->oldImageda) {
                Storage::delete($request->oldImageda);
            }
            
            $validatedData['gambar_da'] = $request->file('gambar_da')->store('kkajian');
        }

        if($request->file('gambar_kkajian')){

            if($request->oldImagekk) {
                Storage::delete($request->oldImagekk);
            }
            
            $validatedData['gambar_kkajian'] = $request->file('gambar_kkajian')->store('kkajian');
        }

        if($request->file('gambar_kaksi')){

            if($request->oldImageka) {
                Storage::delete($request->oldImageka);
            }
            
            $validatedData['gambar_kaksi'] = $request->file('gambar_kaksi')->store('kkajian');
        }

        if($request->file('gambar_staff')){

            if($request->oldImagest) {
                Storage::delete($request->oldImagest);
            }
            
            $validatedData['gambar_staff'] = $request->file('gambar_staff')->store('kkajian');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kkajian')->with('sukses', 'Data berhasil di update');
    }
}


