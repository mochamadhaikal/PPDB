<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;
use Illuminate\Support\Facades\DB;


class RegistrasiController extends Controller
{
    public function index() {

        $registrations = Registrasi::all();
        return view('dashboard', ['registrations' => $registrations]);
    }

    public function create()
    {
        return view('registrasi');
    }

    public function store(Request $request)
    {
        DB::table('registrasis')->insert([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'asal' => $request->asal,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('/dashboard')->with('success', 'Selamat, Registrasi Berhasil!');
    }

    public function edit($id){

        $registrations = DB::table('registrasis')->where('id', $id)->first();
        return view('edit', ['registrations' => $registrations]);

    }

    public function update(Request $request, $id){
        DB::table('registrasis')->where('id', $id)->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'asal' => $request->asal,
            'jurusan' => $request->jurusan,
        ]);
        return redirect('/dashboard')->with('success', 'Data berhasil diubah!');
    }

    public function delete($id)
    {
        DB::table('registrasis')->where('id', $id)->delete();
        return back()->with('success', 'Data sudah dihapus');
    }

    public function print($id)
    {
        $registrations = DB::table('registrasis')->where('id', $id)->first();
        
        return view('print')->with('registrations', $registrations);
        return view('print', ['registrations' => $registrations]);
    }
    
    public function bulk_print()
    {
        $registrations = Registrasi::all();
        return view('bulk_print', ['registrations' => $registrations]);
    }
}

