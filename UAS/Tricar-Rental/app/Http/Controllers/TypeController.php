<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TypeController extends Controller
{
    public function index()
    {
        $request = Http::get('http://localhost/rentalmobil/api/Type');
        $type = json_decode($request->body(), true);
        return view('type', ['type' => $type]);
    }

    public function tambah()
    {
        return view('/v_type');
    }

    public function add(Request $request)
    {
        $client = Http::post('http://localhost/rentalmobil/api/Type', 
        [
            'kode_type' => $request->kode_type,
            'nama_type' => $request->nama_type
        ]);

        if ($client->status() == 200) {
            return redirect('/type');
        } else {
            return redirect('/type');
        }
    }

    public function delete($id)
    {
        $client = Http::asForm()->delete('http://localhost/rentalmobil/api/Type', [
            'id_type' => $id
        ]);

        if ($client['status'] == 'success') {
            return redirect('/type');
        } else {
            return redirect('/type');
        }
    }

    public function update($id){
        $request = Http::get('http://localhost/rentalmobil/api/Type?id_type='.$id);
        $type = json_decode($request->body(), true);
        return view('/u_type', ['type' => $type]);
    }

    public function u_process($id, Request $request){
        $client = Http::asForm()->put('http://localhost/rentalmobil/api/Type', 
        [
            'id_type' => $id,
            'kode_type' => $request->kode_type,
            'nama_type' => $request->nama_type
        ]);

        if ($client->successful()) {
            return redirect('/type');
        } else {
            return redirect('/type');
        }
    }
}
