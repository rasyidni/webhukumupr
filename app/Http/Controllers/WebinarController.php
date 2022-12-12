<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\webinar;

class WebinarController extends Controller
{
    public function index(){
        $data = webinar::all();
        return view('admin/webinar/webinar', compact('data'));
    }

    public function createwebinar(){
        return view('admin/webinar/create');
    }

    public function insertwebinar(Request $request){

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'link_gform' => 'required|max:255',
        ]);

        webinar::create($validatedData);

        return redirect() -> route('webinar')->with('sukses', 'Data berhasil di tambahkan');
    }

    public function tampilkanwebinar($id) {
        $data = webinar::find($id);

        return view('admin/webinar/update', compact('data'));
    }

    public function editwebinar(Request $request, $id){
        $data = webinar::find($id);
        
        $rules = [
            'judul' => 'required|max:255',
            'link_gform' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);
            
        $data->update($validatedData);

        return redirect() -> route('webinar')->with('sukses', 'Data berhasil di update');
    }

    public function deletewebinar($id){
        $data = webinar::find($id);
        $data->delete();
        return redirect() -> route('webinar')->with('sukses', 'Data berhasil di hapus');
    }
}
