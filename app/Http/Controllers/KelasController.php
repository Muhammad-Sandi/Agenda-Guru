<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){
        $kelas = kelas::All();
        return view('datakelas', compact('kelas'));
    }

    public function create(){
        return view('tambahkelas');
    }

    public function store(Request $request){
        $request->validate([
            'nama_kelas' => ['required', 'string'],
            'wali_kelas' =>  ['required', 'string'],
        ]);

        Kelas::create([
            'nama_kelas' => $request['nama_kelas'],
            'wali_kelas' => $request['wali_kelas'],
        ]);

        return redirect()->route('datakelas');
    }
    
    public function edit($id){
        $kelas = Kelas::where('id', $id)->first();
        return view('editkelas', compact('kelas'));
    }

    public function update($id, Request $request){
        Kelas::where('id', $id)->update([
            'nama_kelas' => $request['nama_kelas'],
            'wali_kelas' => $request['wali_kelas'],
        ]);

        return redirect()->route('datakelas');
    }


    public function destroy($id){
        Kelas::destroy($id);
        return redirect()->route('datakelas');
    }
}
