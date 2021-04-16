<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HalamanController extends Controller
{
    public function index()
    {
        $data = DB::table('siswa')->get();
        
        return view('index',['data' => $data]);
    }

    public function utama()
    {
        return view('welcome');
    }

    public function biodata()
    {
        $nama = 'Muhammad Akbar Pratama';
        $data = ['XII','RPL','SMKN 4 PADALARANG'];
        
        return view('biodata',['data' => $data, 'nama' => $nama]);
    }

    public function form()
    {
        return view('form');
    }

    public function hasil_request(Request $request)
    {
        $this->validate($request,[
            'nama'          => 'required',
            'NISN'          => 'required|max:13',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required'
        ]);

        DB::table('siswa')
            ->insert([
                'nama'          => $request->nama,
                'NISN'          => $request->NISN,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat'        => $request->alamat
            ]);
        
        return redirect('/')->with('status','DATA BERHASIL DIMASUKAN');
    }

    public function edit($id)
    {
        $id     = DB::table('siswa')->where('id',$id)->get();

        return view('edit',['id' => $id]);
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'nama'          => 'required',
            'NISN'          => 'required|max:13',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required'
        ]);

        DB::table('siswa')->where('id',$request->id)->update([
            'nama'              => $request->nama,
            'NISN'              => $request->NISN,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'alamat'            => $request->alamat
        ]);

        return redirect('/')->with('status','DATA BERHASIL DI UPDATE');
    }
    
    public function hapus($id)
    {
        DB::table('siswa')->where('id','=',$id)->delete();
        return redirect('/')->with('status','DATA BERHASIL DI HAPUS');
    }
}
