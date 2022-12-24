<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tentangkami;
use Illuminate\Support\Facades\Storage;

class TentangkamiController extends Controller
{
    public function index(){
        $data = tentangkami::find(1);
        return view('admin/tentangkami/tentangkami', compact('data'));
    }

    public function tampilkantentangkami() {
        $data = tentangkami::find(1);

        return view('admin/tentangkami/update', compact('data'));
    }

    public function edittentangkami(Request $request){
        $data = tentangkami::find(1);
        
        $rules = [
            'nama_ketua' => 'required|max:200',
            'nama_wakil' => 'required|max:200',
            'nama_sekretaris' => 'required|max:200',
            'nama_bendahara' => 'required|max:200',
            'gambar_ketua' => 'image',
            'gambar_wakil' => 'image',
            'gambar_sekretaris' => 'image',
            'gambar_bendahara' => 'image',
            'visi' => 'required',
            'misi' => 'required',
            'email' => 'required',
            'ig' => 'required',
            'youtube' => 'required',
            'fb' => 'required',
            'twitter' => 'required',
            'line' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar_ketua')){

            if($request->oldImagek) {
                Storage::delete($request->oldImagek);
            }
            
            $validatedData['gambar_ketua'] = $request->file('gambar_ketua')->store('tentangkami');
        }

        if($request->file('gambar_wakil')){

            if($request->oldImagew) {
                Storage::delete($request->oldImagew);
            }
            
            $validatedData['gambar_wakil'] = $request->file('gambar_wakil')->store('tentangkami');
        }

        if($request->file('gambar_sekretaris')){

            if($request->oldImages) {
                Storage::delete($request->oldImages);
            }
            
            $validatedData['gambar_sekretaris'] = $request->file('gambar_sekretaris')->store('tentangkami');
        }

        if($request->file('gambar_bendahara')){

            if($request->oldImageb) {
                Storage::delete($request->oldImageb);
            }
            
            $validatedData['gambar_bendahara'] = $request->file('gambar_bendahara')->store('tentangkami');
        }
            
        $data->update($validatedData);

        return redirect() -> route('tentangkami')->with('sukses', 'Data berhasil di update');
    }

}
