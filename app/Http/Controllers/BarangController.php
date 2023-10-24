<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'nama'=>'required',
            'jenis'=>'gt:0',
            'kondisi_br'=>'gt:0',
            'harga'=>'required|numeric',
            'keterangan'=>'required',
            'kecacatan'=>'alpha:ascii',
            'jumlah_barang'=>'required|numeric',
            'foto'=>'required'
        ], 
        [
            'nama.required'=>'Harus mengisi nama',
            'jenis'=>'Harus memilih jenis',
            'kondisi_br'=>'Harus memilih kondisi barang',
            'harga.required'=>'Harus mengisi harga',
            'harga.numeric'=>'Harus berupa angka',
            'keterangan.required'=>'Harus mengisi keterangan',
            'kecacatan.alpha'=>'Harus berupa kalimat',
            'jumlah_barang.required'=>'Harus mengisi harga',
            'jumlah_barang.numeric'=>'Harus berupa angka',
            'foto.required'=>'Harus melampirkan file foto'
        ]);

        $file = $request->file('foto');
        if($file != NULL){
            $file->storeAs('public/fileFoto', $file);

            Barang::create([
                'nama'=>$request->nama,
                'jenis'=>$request->jenis,
                'kondisi_br'=>$request->kondisi_br,
                'harga'=>$request->harga,
                'keterangan'=>$request->keterangan,
                'kecacatan'=>$request->kecacatan,
                'jumlah_barang'=>$request->jumlah_barang,
                'foto'=>$request->foto
            ]);
        }

        return redirect('/daftar')->with(['submission'=>'Submit berhasil']);
    }

    public function index(){
        $barangs = Barang::all();
        $kondisi_barangs = KondisiBarang::all();
        $jenis_barangs = JenisBarang::all(); 
        return view('index', compact('barangs', 'kondisi_barangs', 'jenis_barangs'));
    }
}

