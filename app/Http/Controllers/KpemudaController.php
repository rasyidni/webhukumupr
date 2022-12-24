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

    public function editkpemuda(Request $request){
        $data = kpemuda::find(1);
        
        $rules = [
            'nama_menteri' => 'required|max:200',
            'nama_dolahraga' => 'required|max:200',
            'nama_dpemuda' => 'required|max:200',
            'nama_dso' => 'required|max:200',
            'nama_staff1' => 'required|max:200',
            'nama_staff2' => 'required|max:200',
            'gambar_menteri' => 'image',
            'gambar_dolahraga' => 'image',
            'gambar_dpemuda' => 'image',
            'gambar_dso' => 'image',
            'gambar_staff1' => 'image',
            'gambar_staff2' => 'image',
            'fokus_utama' => 'required',
            'proker' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_menteri')){

            if($request->oldImagem) {
                Storage::delete($request->oldImagem);
            }
            
            $validatedData['gambar_menteri'] = $request->file('gambar_menteri')->store('kpemuda');
        }

        if($request->file('gambar_dolahraga')){

            if($request->oldImagedo) {
                Storage::delete($request->oldImagedo);
            }
            
            $validatedData['gambar_dolahraga'] = $request->file('gambar_dolahraga')->store('kpemuda');
        }

        if($request->file('gambar_dpemuda')){

            if($request->oldImagedp) {
                Storage::delete($request->oldImagedp);
            }
            
            $validatedData['gambar_dpemuda'] = $request->file('gambar_dpemuda')->store('kpemuda');
        }

        if($request->file('gambar_dso')){

            if($request->oldImagedso) {
                Storage::delete($request->oldImagedso);
            }
            
            $validatedData['gambar_dso'] = $request->file('gambar_dso')->store('kpemuda');
        }

        if($request->file('gambar_staff1')){

            if($request->oldImagest1) {
                Storage::delete($request->oldImagest1);
            }
            
            $validatedData['gambar_staff1'] = $request->file('gambar_staff1')->store('kpemuda');
        }

        if($request->file('gambar_staff2')){

            if($request->oldImagest2) {
                Storage::delete($request->oldImagest2);
            }
            
            $validatedData['gambar_staff2'] = $request->file('gambar_staff2')->store('kpemuda');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kpemuda')->with('sukses', 'Data berhasil di update');
    }
}
