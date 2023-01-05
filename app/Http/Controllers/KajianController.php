<?php

namespace App\Http\Controllers;
use App\Models\kajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KajianController extends Controller
{
    public function index(){
        $data = kajian::latest()->paginate(10);
        return view('admin/kajian/kajian', compact('data'));
    }

    public function createkajian(){
        return view('admin/kajian/create');
    }

    public function insertkajian(Request $request){

        $validatedData = $request->validate([
            'judul' => 'required|max:200',
            'gambar' => 'required|image',
            'isi' => 'required',
            'file' => 'required|mimes:pdf'
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('kajian');
        $validatedData['file'] = $request->file('file')->store('kajian');

        kajian::create($validatedData);

        return redirect() -> route('kajian')->with('sukses', 'Data berhasil di tambahkan');
    }

    public function tampilkankajian($id) {
        $data = kajian::find($id);

        return view('admin/kajian/update', compact('data'));
    }

    public function editkajian(Request $request, $id){
        $data = kajian::find($id);
        
        $rules = [
            'judul' => 'required|max:200',
            'gambar' => 'image',
            'isi' => 'required',
            'file' => 'mimes:pdf'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){

            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            
            $validatedData['gambar'] = $request->file('gambar')->store('kajian');
        }

        if($request->file('file')){

            if($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            
            $validatedData['file'] = $request->file('file')->store('kajian');
        }
            
        $data->update($validatedData);

        return redirect() -> route('kajian')->with('sukses', 'Data berhasil di update');
    }

    public function deletekajian($id){
        $data = kajian::find($id);
        if($data->gambar){
            Storage::delete($data->gambar);
        }
        if($data->file){
            Storage::delete($data->file);
        }
        $data->delete();
        return redirect() -> route('kajian')->with('sukses', 'Data berhasil di hapus');
    }
}
