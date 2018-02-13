@extends('layouts.app')

 @section('content')
<div class="container">
  <form action="/siswa/{{$siswa->id}}/update" method="post">
      {{csrf_field()}}
      <div class="form-group row">
        <label for="input" class="col-sm-1 col-form-label">Nama</label>
        <div class="col-sm-11">
          <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="{{$siswa->nama}}">
        </div>
      </div>

      <div class="form-group row">
        <label for="input" class="col-sm-1 col-form-label">Alamat</label>
        <div class="col-sm-11">
          <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat" value="{{$siswa->alamat}}">
        </div>
      </div>

      <div class="form-group row">
        <label for="input" class="col-sm-1 col-form-label">Kelas</label>
        <div class="col-sm-11">
          <input name="kelas" type="text" class="form-control" id="kelas" placeholder="Kelas" value="{{$siswa->kelas}}">
        </div>
      </div>

      <div class="form-group row">
        <label for="input" class="col-sm-1 col-form-label"></label>
        <div class="col-sm-11">
          <button type="submit" class="btn btn-primary" name="button">Simpan</button>
        </div>
      </div>
  </form>
</div>
 @endsection
