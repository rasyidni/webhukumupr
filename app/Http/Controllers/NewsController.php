<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(){
        $data = News::all();
        return view('berita/news', compact('data'));
    }

    public function createnews(){
        return view('berita/createnews');
    }

    public function insertnews(Request $request){

        $validatedData = $request->validate([
            'judul' => 'required|max:200',
            'gambar' => 'required|image',
            'isi' => 'required'
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('berita');

        News::create($validatedData);

        return redirect() -> route('berita')->with('sukses', 'Data berhasil di tambahkan');
    }

    public function tampilkannews($id) {
        $data = News::find($id);

        return view('berita/updatenews', compact('data'));
    }

    public function editnews(Request $request, $id){
        $data = News::find($id);
        
        $rules = [
            'judul' => 'required|max:200',
            'gambar' => 'required|image',
            'isi' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->oldImage) {
            Storage::delete($request->oldImage);
        }

        $validatedData['gambar'] = $request->file('gambar')->store('berita');
        
        $data->update($validatedData);

        return redirect() -> route('berita')->with('sukses', 'Data berhasil di update');
    }

    public function deletenews($id){
        $data = News::find($id);
        if($data->gambar){
            Storage::delete($data->gambar);
        }
        $data->delete();
        return redirect() -> route('berita')->with('sukses', 'Data berhasil di hapus');
    }

}
