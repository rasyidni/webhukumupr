<?php

namespace App\Http\Controllers;

use App\Models\granddesign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GranddesignController extends Controller
{
    public function index(){
        $data = granddesign::all();
        return view('admin/grand_design/gdesign', compact('data'));
    }

    public function creategdesign(){
        return view('admin/grand_design/create');
    }

    public function insertgdesign(Request $request){
        $validatedData = $request->validate([
            'gambar' => 'required|image',
            'link_gdrive' => 'required|max:300',
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('gdesign');

        granddesign::create($validatedData);
        return redirect() -> route('gdesign')->with('sukses', 'Data berhasil di tambahkan');
    }

    public function tampilkangdesign($id){
        $data = granddesign::find($id);

        return view('admin/grand_design/update', compact('data'));
    }

    public function editgdesign(Request $request, $id){
        $data = granddesign::find($id);

        $rules = [
            'gambar' => 'image',
            'link_gdrive' => 'required|max:300',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            
            $validatedData['gambar'] = $request->file('gambar')->store('gdesign');
        } 
            
        $data->update($validatedData);

        return redirect() -> route('gdesign')->with('sukses', 'Data berhasil di update');
    }

    public function deletegdesign($id){
        $data = granddesign::find($id);
        if($data->gambar){
            Storage::delete($data->gambar);
        }
        $data->delete();
        return redirect() -> route('gdesign')->with('sukses', 'Data berhasil di hapus');
    }
}
