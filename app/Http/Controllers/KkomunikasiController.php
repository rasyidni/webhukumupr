<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kkomunikasi;
use Illuminate\Support\Facades\Storage;

class KkomunikasiController extends Controller
{
    public function index(){
        $data = kkomunikasi::find(1);
        return view('admin/kkomunikasi/kkomunikasi', compact('data'));
    }

    public function tampilkankkomunikasi() {
        $data = kkomunikasi::find(1);

        return view('admin/kkomunikasi/update', compact('data'));
    }

    public function editkkomunikasi(Request $request){
        $data = kkomunikasi::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dmedia' => 'required|max:200',
            'nama_dhubungan' => 'required|max:200',
            'nama_ddokumentasi' => 'required|max:200',
            'nama_djurnalistik' => 'required|max:200',
            'nama_staff1' => 'required|max:200',
            'nama_staff2' => 'required|max:200',
            'nama_staff3' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dmedia' => 'image',
            'gambar_dhubungan' => 'image',
            'gambar_ddokumentasi' => 'image',
            'gambar_djurnalistik' => 'image',
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
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kkomunikasi');
        }

        if($request->file('gambar_dmedia')){

            if($request->oldImagedm) {
                Storage::delete($request->oldImagedm);
            }
            
            $validatedData['gambar_dmedia'] = $request->file('gambar_dmedia')->store('kkomunikasi');
        }

        if($request->file('gambar_dhubungan')){

            if($request->oldImagedm) {
                Storage::delete($request->oldImagedm);
            }
            
            $validatedData['gambar_dhubungan'] = $request->file('gambar_dhubungan')->store('kkomunikasi');
        }

        if($request->file('gambar_ddokumentasi')){

            if($request->oldImagedd) {
                Storage::delete($request->oldImagedd);
            }
            
            $validatedData['gambar_ddokumentasi'] = $request->file('gambar_ddokumentasi')->store('kkomunikasi');
        }

        if($request->file('gambar_djurnalistik')){

            if($request->oldImagedj) {
                Storage::delete($request->oldImagedj);
            }
            
            $validatedData['gambar_djurnalistik'] = $request->file('gambar_djurnalistik')->store('kkomunikasi');
        }

        if($request->file('gambar_staff1')){

            if($request->oldImagest1) {
                Storage::delete($request->oldImagest1);
            }
            
            $validatedData['gambar_staff1'] = $request->file('gambar_staff1')->store('kkomunikasi');
        }

        if($request->file('gambar_staff2')){

            if($request->oldImagest2) {
                Storage::delete($request->oldImagest2);
            }
            
            $validatedData['gambar_staff2'] = $request->file('gambar_staff2')->store('kkomunikasi');
        }

        if($request->file('gambar_staff3')){

            if($request->oldImagest3) {
                Storage::delete($request->oldImagest3);
            }
            
            $validatedData['gambar_staff3'] = $request->file('gambar_staff3')->store('kkomunikasi');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kkomunikasi')->with('sukses', 'Data berhasil di update');
    }
}
