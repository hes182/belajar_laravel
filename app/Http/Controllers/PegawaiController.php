<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class PegawaiController extends Controller
{
    public function index() {
        // Mengambil Data Dengan Query Builder
        $pegawai = DB::table('pegawai')->get();

        // Mengirim data pegawai ke view
        return view('index',['pegawai' => $pegawai]);
    }

    public function tambah() {
        return view('tambah');
    }

    public function store(Request $request) {

        // $request->validate([
        //     'nama'=>'required',
        //     'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:200',
        //     'addMoreInputFields.*.subject' => 'required'
        // ]);

        foreach ($request->addMoreInputFields as $key => $value) {
            printf($value['subject']);
        }

        // Insert Data Dengan Query Builder
        // DB::table('pegawai')->insert([
        //     'pegawai_nama' => strtoupper($request->nama),
        //     'pegawai_jabatan' => strtoupper($request->jabatan),
        //     'pegawai_umur' => $request->umur,
        //     'pegawai_alamat' => strtoupper($request->alamat),
        // ]);
        // // Berhasil Alihkan Ke Halaman Pegawai
        // return redirect('/pegawai');
    }

    public function edit($id) {
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        return view('edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request) {
        // Update Data Dengan Query Builder
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => strtoupper($request->nama),
            'pegawai_jabatan' => strtoupper($request->jabatan),
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => strtoupper($request->alamat),
        ]);

        return redirect('/pegawai');
    }

    public function hapus($id){
        // Hapus Data Dengan Query Builder
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        return redirect('/pegawai');
    }
}
