<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ukm;
use Illuminate\Support\Facades\Storage;

class UkmController extends Controller
{
    public function index(){
        $data = ukm::paginate(10);
        return view('admin/ukm/ukm', compact('data'));
    }

    public function createukm(){
        return view('admin/ukm/create');
    }

    public function insertukm(Request $request){
        
        $validatedData = $request->validate([
            'nama' => 'required|max:200',
            'logo' => 'required|image',
            'keterangan' => 'required',
            'ig' => 'required',
            'youtube' => 'required',
            'fb' => 'required',
            'wa' => 'required'
        ]);

        $validatedData['logo'] = $request->file('logo')->store('ukm');

        ukm::create($validatedData);

        return redirect() -> route('ukm')->with('sukses', 'Data berhasil di tambahkan');
    }

    public function tampilkanukm($id) {
        $data = ukm::find($id);

        return view('admin/ukm/update', compact('data'));
    }

    public function editukm(Request $request, $id){
        $data = ukm::find($id);
        
        $rules = [
            'nama' => 'required|max:200',
            'logo' => 'image',
            'keterangan' => 'required',
            'ig' => 'required',
            'youtube' => 'required',
            'fb' => 'required',
            'wa' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('logo')){

            if($request->oldLogo) {
                Storage::delete($request->oldLogo);
            }
            
            $validatedData['logo'] = $request->file('logo')->store('ukm');
        }
            
        $data->update($validatedData);

        return redirect() -> route('ukm')->with('sukses', 'Data berhasil di update');
    }

    public function deleteukm($id){
        $data = ukm::find($id);
        if($data->logo){
            Storage::delete($data->logo);
        }
        $data->delete();
        return redirect() -> route('ukm')->with('sukses', 'Data berhasil di hapus');
    }

}
