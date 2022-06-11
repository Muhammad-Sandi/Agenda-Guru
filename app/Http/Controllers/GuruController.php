<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(){
        $gurus = Guru::All();
        return view('dataguru', compact('gurus'));
    }

    public function create(){
        return view('tambahguru');
    }

    public function store(Request $request){
        $request->validate([
            'nama_guru' => ['required', 'string'],
            'nik_guru' =>  ['required', 'string'],
            'mata_pelajaran' =>  ['required', 'string'],
            'username' =>  ['required', 'string'],
            'password' =>  ['required', 'string'],
        ]);

        Guru::create([
            'nama_guru' => $request['nama_guru'],
            'nik_guru' => $request['nik_guru'],
            'mata_pelajaran' => $request['mata_pelajaran'],
            'username' => $request['username'],
            'password' => $request['password'],
        ]);

        return redirect()->route('dataguru');
    }
    
    public function edit($id){
        $gurus = Guru::where('id', $id)->first();
        return view('editguru', compact('gurus'));
    }

    public function update($id, Request $request){
        Guru::where('id', $id)->update([
            'nama_guru' => $request['nama_guru'],
            'nik_guru' => $request['nik_guru'],
            'mata_pelajaran' => $request['mata_pelajaran'],
            'username' => $request['username'],
            'password' => $request['password'],
        ]);

        return redirect()->route('dataguru');
    }


    public function destroy($id){
        Guru::destroy($id);
        return redirect()->route('dataguru');
    }
}
