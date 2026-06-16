<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function Index(){
        $data = News::all();
        return view('databerita',compact('data'));
    }

    public function Pengumuman(){
        $data = News::all();
        return view('pengumuman',compact('data'));
    }

    public function Berita()
    {
        $data= News::all();
        return view('pengumuman',["title"=> "Pengumuman"])->with('data',$data);
    }

    public function tambahberita(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        $data = News::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoberita/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('berita')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){

        $data = News::find($id);
        // dd($data);
        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = News::find($id);
        $data->update($request->all());
        return redirect()->route('berita')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){
        $data = News::find($id);
        $data->delete();
        return redirect()->route('berita')->with('success','Data Berhasil Di hapus');
    }
}
