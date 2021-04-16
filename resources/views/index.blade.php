@extends('template/master')

@section('judul','Home')

@section('content')

<h1>Selamat Datang di Web Menggunakan Laravel</h1>
@if (session('status'))
  <div class="alert alert-success my-3">
    {{ session('status') }}
  </div>
@endif
<hr>
<a href="{{'/biodata'}}">Biodata diri anda</a>
<hr>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NISN</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $dt)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$dt->nama}}</td>
      <td>{{$dt->NISN}}</td>
      <td>{{$dt->jenis_kelamin}}</td>
      <td>{{$dt->alamat}}</td>
      <td>
        <a href="/edit/{{$dt->id}}" class="btn btn-outline-info">Update</a>

        <form action="/hapus/data/{{$dt->id}}" method="post" class="d-inline ml-2">
          @csrf
          @method('delete')
          <button class="btn btn-outline-danger">Hapus</button>
        </form>
        
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection