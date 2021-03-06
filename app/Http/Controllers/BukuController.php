<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index(){
        $no = 0;
        $data_buku = Buku::all()->sortByDesc('id');
        return view('buku.index', compact('data_buku', 'no'));    
    }

    public function create(){
        return view('buku.create');
    }

    public function store(){
        $buku = new Buku;
        $buku->judul      = request('judul');
        $buku->penulis    = request('penulis');
        $buku->harga      = request('harga');
        $buku->tgl_terbit = request('tgl_terbit');
        $buku->save();
        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update($id){
        $buku = Buku::find($id);
        $buku->judul      = request('judul');
        $buku->penulis    = request('penulis');
        $buku->harga      = request('harga');
        $buku->tgl_terbit = request('tgl_terbit');
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id) {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

}
