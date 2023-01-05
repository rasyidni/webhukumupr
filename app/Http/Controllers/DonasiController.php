<?php

namespace App\Http\Controllers;

use App\Models\donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index(){
        $data = donasi::latest()->paginate(10);
        return view('admin/donasi/donasi', compact('data'));
    }

    public function createdonasi(){
        return view('admin/donasi/create');
    }

    public function insertdonasi(Request $request){
        $validatedData = $request->validate([
            'nama_donasi' => 'required',
            'link_gform' => 'required'
        ]);

        donasi::create($validatedData);

        return redirect()->route('donasi')->with('sukses', 'Data berhasil di tambahkan');
    }

    public function tampilkandonasi($id) {
        $data = donasi::find($id);

        return view('admin/donasi/update', compact('data'));
    }

    public function editdonasi(Request $request, $id){
        $data = donasi::find($id);

        $rules = [
            'nama_donasi' => 'required',
            'link_gform' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $data->update($validatedData);
        return redirect() -> route('donasi')->with('sukses', 'Data berhasil di update');
    }

    public function deletedonasi($id){
        $data = donasi::find($id);
        $data->delete();
        return redirect() -> route('donasi')->with('sukses', 'Data berhasil dihapus');
    }

}
