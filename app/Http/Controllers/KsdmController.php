<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ksdm;
use Illuminate\Support\Facades\Storage;

class KsdmController extends Controller
{
    public function index(){
        $data = ksdm::find(1);
        return view('admin/ksdm/ksdm', compact('data'));
    }

    public function tampilkanksdm() {
        $data = ksdm::find(1);

        return view('admin/ksdm/update', compact('data'));
    }

    public function editksdm(Request $request){
        $data = ksdm::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dhukum' => 'required|max:200',
            'nama_dinovasi' => 'required|max:200',
            'nama_dpelatihan' => 'required|max:200',
            'nama_staff' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dhukum' => 'image',
            'gambar_dinovasi' => 'image',
            'gambar_dpelatihan' => 'image',
            'gambar_staff' => 'image',
            'fokus_utama' => 'required',
            'proker' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_menteri')){

            if($request->oldImagem) {
                Storage::delete($request->oldImagem);
            }
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('ksdm');
        }

        if($request->file('gambar_dhukum')){

            if($request->oldImagedh) {
                Storage::delete($request->oldImagedh);
            }
            
            $validatedData['gambar_dhukum'] = $request->file('gambar_dhukum')->store('ksdm');
        }

        if($request->file('gambar_dinovasi')){

            if($request->oldImagedi) {
                Storage::delete($request->oldImagedi);
            }
            
            $validatedData['gambar_dinovasi'] = $request->file('gambar_dinovasi')->store('ksdm');
        }

        if($request->file('gambar_dpelatihan')){

            if($request->oldImagedp) {
                Storage::delete($request->oldImagedp);
            }
            
            $validatedData['gambar_dpelatihan'] = $request->file('gambar_dpelatihan')->store('ksdm');
        }
        if($request->file('gambar_staff')){

            if($request->oldImagest) {
                Storage::delete($request->oldImagest);
            }
            
            $validatedData['gambar_staff'] = $request->file('gambar_staff')->store('ksdm');
        }
            
        $data->update($validatedData);

        return redirect() -> route('ksdm')->with('sukses', 'Data berhasil di update');
    }
}
