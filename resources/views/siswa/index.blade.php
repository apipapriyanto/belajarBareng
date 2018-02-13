@extends('layouts.app')

@section('content')
<div class="container">
  <a href="/siswa/add" class="btn btn-success">Add</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kelas</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 <?php
    $siswas = \App\Siswa::get();
  ?>
  @for($i = 0; $i<sizeof($siswas); $i++)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$siswas[$i]->nama}}</td>
      <td>{{$siswas[$i]->alamat}}</td>
      <td>{{$siswas[$i]->kelas}}</td>
      <td>
        <a href="/siswa/{{$siswas[$i]->id}}/edit" class="btn btn-primary">Edit</a>
        <a href="/siswa/{{$siswas[$i]->id}}/delete" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
  @endfor
  </tbody>
</table>
</div>
@endsection
