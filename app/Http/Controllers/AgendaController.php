<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(){
        $agendas = Agenda::All();
        return view('dataagenda', compact('agendas'));
    }

    public function create(){
        return view('tambahagenda');
    }

    public function store(Request $request){
        
        $request->validate([
            'nama_guru' => ['required', 'string'],
            'mata_pelajaran' =>  ['required', 'string'],
            'materi_pelajaran' =>  ['required', 'string'],
            'jam_pelajaran' =>  ['required', 'string'],
            'siswa_yang_tidak_hadir' =>  ['required', 'string'],
            'kelas' =>  ['required', 'string'],
            'link_pembelajaran' =>  ['required', 'string'],
            'dokumentasi' =>  'required|mimes:jpg,jpeg,png',
            'keterangan' =>  ['required', 'string'],
        ]);
        
        $file_name = $request->dokumentasi->getClientOriginalName();
        $image = $request->dokumentasi->storeAs('dokumentasi', $file_name);
        
        Agenda::create([
            'nama_guru' => $request['nama_guru'],
            'mata_pelajaran' => $request['mata_pelajaran'],
            'materi_pelajaran' => $request['materi_pelajaran'],
            'jam_pelajaran' => $request['jam_pelajaran'],
            'siswa_yang_tidak_hadir' => $request['siswa_yang_tidak_hadir'],
            'kelas' => $request['kelas'],
            'link_pembelajaran' => $request['link_pembelajaran'],
            'dokumentasi' => $image,
            'keterangan' => $request['keterangan'],
        ]);

        return redirect()->route('dataagenda');
    }
    
    public function edit($id){
        $agendas = Agenda::where('id', $id)->first();
        return view('editagenda', compact('agendas'));
    }

    public function update($id, Request $request){
        Agenda::where('id', $id)->update([
            'nama_guru' => $request['nama_guru'],
            'mata_pelajaran' => $request['mata_pelajaran'],
            'materi_pelajaran' => $request['materi_pelajaran'],
            'jam_pelajaran' => $request['jam_pelajaran'],
            'siswa_yang_tidak_hadir' => $request['siswa_yang_tidak_hadir'],
            'kelas' => $request['kelas'],
            'link_pembelajaran' => $request['link_pembelajaran'],
            'dokumentasi' => $request['dokumentasi'],
            'keterangan' => $request['keterangan'],
        ]);

        return redirect()->route('dataagenda');
    }


    public function destroy($id){
        Agenda::destroy($id);
        return redirect()->route('dataagenda');
    }
}
