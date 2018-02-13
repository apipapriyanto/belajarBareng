<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{

    function index() {
      return view ('siswa.index');
    }

    function add() {
      return view ('siswa.add');
    }

    function create(Request $request) {

      $nama = $request->nama;
      $alamat = $request->alamat;
      $kelas = $request->kelas;

      if ($nama == null) {
          return "mohon nama di isi";
      }

      $siswa = new \App\Siswa;
      $siswa->nama = $nama;
      $siswa->alamat = $alamat;
      $siswa->kelas = $kelas;
      $siswa->save();

      return redirect('/siswa');
    }

    function edit($id) {
      $siswa = \App\Siswa::find($id);

      return view('siswa.edit')->with('siswa', $siswa);
    }

    function update(Request $request,$id) {

      $nama = $request->nama;
      $alamat = $request->alamat;
      $kelas = $request->kelas;

      if ($nama == null) {
          return "mohon nama di isi";
      }

      $siswa =  \App\Siswa::find($id);
      $siswa->nama = $nama;
      $siswa->alamat = $alamat;
      $siswa->kelas = $kelas;
      $siswa->save();

      return redirect('/siswa');
    }

    function delete($id) {
      $siswa = \App\Siswa::find($id);
      $siswa->delete();

      return redirect('/siswa');
    }
}
