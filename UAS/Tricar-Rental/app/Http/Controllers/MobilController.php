<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MobilController extends Controller
{
    public function index()
    {
        $request = Http::get('http://localhost/rentalmobil/api/Mobil');
        $mobil = json_decode($request->body(), true);
        return view('Mobil', ['mobil' => $mobil]);
    }

    public function tambah()
    {
        $request = Http::get('http://localhost/rentalmobil/api/Type');
        $type = json_decode($request->body(), true);
        return view('/v_mobil', ['type' => $type]);
        // return view('/v_mobil');
        
    }
    
    public function add(Request $request)
    {
        $client = Http::post('http://localhost/rentalmobil/api/Mobil', 
        [
            'id_type' => $request->id_type,
            'merk' => $request->merk,
            'no_plat' => $request->no_plat,
            'warna' => $request->warna,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'status' => $request->status,
            'gambar' => $request->gambar
        ]);

        if ($client->status() == 200) {
            return redirect('/Mobil');
        } else {
            return redirect('/Mobil');
        }
    }

    public function delete($id)
    {
        $client = Http::asForm()->delete('http://localhost/rentalmobil/api/Mobil', [
            'id_mobil' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/Mobil');
        } else {
            return redirect('/Mobil');
        }
    }

    public function update($id){
        $request = Http::get('http://localhost/rentalmobil/api/Mobil?id_mobil='.$id);
        $mobil = json_decode($request->body(), true);
        return view('u_mobil', ['mobil' => $mobil]);
    }

    public function u_process($id, Request $request){
        $client = Http::asForm()->put('http://localhost/rentalmobil/api/Mobil', 
        [
            'id_mobil' => $id,
            'id_type' => $request->id_type,
            'merk' => $request->merk,
            'no_plat' => $request->no_plat,
            'warna' => $request->warna,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'status' => $request->status
            // 'gambar' => $request->gambar
        ]);

        if ($client->successful()) {
            return redirect('/Mobil');
        } else {
            return redirect('/Mobil');
        }
    }
}
