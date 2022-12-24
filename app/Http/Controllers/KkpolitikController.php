<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kkpolitik;
use Illuminate\Support\Facades\Storage;

class KkpolitikController extends Controller
{
    public function index(){
        $data = kkpolitik::find(1);
        return view('admin/kkpolitik/kkpolitik', compact('data'));
    }

    public function tampilkankkpolitik() {
        $data = kkpolitik::find(1);

        return view('admin/kkpolitik/update', compact('data'));
    }

    public function editkkpolitik(Request $request){
        $data = kkpolitik::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dhukum' => 'required|max:200',
            'nama_dpolitik' => 'required|max:200',
            'nama_staff1' => 'required|max:200',
            'nama_staff2' => 'required|max:200',
            'nama_staff3' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dhukum' => 'image',
            'gambar_dpolitik' => 'image',
            'gambar_staff1' => 'image',
            'gambar_staff2' => 'image',
            'gambar_staff3' => 'image',
            'fokus_utama' => 'required',
            'proker' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_menteri')){

            if($request->oldImagem) {
                Storage::delete($request->oldImagem);
            }
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kkpolitik');
        }

        if($request->file('gambar_dhukum')){

            if($request->oldImagedh) {
                Storage::delete($request->oldImagedh);
            }
            
            $validatedData['gambar_dhukum'] = $request->file('gambar_dhukum')->store('kkpolitik');
        }

        if($request->file('gambar_dpolitik')){

            if($request->oldImagedp) {
                Storage::delete($request->oldImagedp);
            }
            
            $validatedData['gambar_dpolitik'] = $request->file('gambar_dpolitik')->store('kkpolitik');
        }

        if($request->file('gambar_staff1')){

            if($request->oldImagest1) {
                Storage::delete($request->oldImagest1);
            }
            
            $validatedData['gambar_staff1'] = $request->file('gambar_staff1')->store('kkpolitik');
        }

        if($request->file('gambar_staff2')){

            if($request->oldImagest2) {
                Storage::delete($request->oldImagest2);
            }
            
            $validatedData['gambar_staff2'] = $request->file('gambar_staff2')->store('kkpolitik');
        }

        if($request->file('gambar_staff3')){

            if($request->oldImagest3) {
                Storage::delete($request->oldImagest3);
            }
            
            $validatedData['gambar_staff3'] = $request->file('gambar_staff3')->store('kkpolitik');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kkpolitik')->with('sukses', 'Data berhasil di update');
    }
}
