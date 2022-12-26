<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regulasi;

class RegulasiController extends Controller
{
    public function index(){
        $data = regulasi::paginate(10);
        return view('admin/regulasi/regulasi', compact('data'));
    }

    public function createregulasi(){
        return view('admin/regulasi/create');
    }

    public function insertregulasi(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'link_gdrive' => 'required|max:255',
        ]);

        regulasi::create($validatedData);

        return redirect() -> route('regulasi')->with('sukses', 'Data berhasil di tambahkan');
    }

    public function tampilkanregulasi($id) {
        $data = regulasi::find($id);

        return view('admin/regulasi/update', compact('data'));
    }

    public function editregulasi(Request $request, $id){
        $data = regulasi::find($id);
        
        $rules = [
            'nama' => 'required|max:255',
            'link_gdrive' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);
            
        $data->update($validatedData);

        return redirect() -> route('regulasi')->with('sukses', 'Data berhasil di update');
    }

    public function deleteregulasi($id){
        $data = regulasi::find($id);
        $data->delete();
        return redirect() -> route('regulasi')->with('sukses', 'Data berhasil di hapus');
    }
}
