@extends('template/master')

@section('judul','Halaman Update Data')

@section('content')

  <h1>Form Update Data Siswa</h1>

@foreach ($id as $data)
<form method="POST" action="/edit/proses">
    @method('patch')
    @csrf
    <input type="hidden" name="id" id="" value="{{$data->id}}">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control col-md-6 @error('nama') is-invalid @enderror" value="{{$data->nama}}" name="nama" autocomplete="off">
      @error('nama')
        <div class="alert alert-warning invalid-feedback">
          <strong>Kesalahan!</strong> {{ $message }}
        </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">NISN</label>
    <input type="text" class="form-control col-md-4 @error('NISN') is-invalid @enderror" value="{{$data->NISN}}" name="NISN" autocomplete="off">
    @error('NISN')
        <div class="alert alert-warning invalid-feedback">
          <strong>Kesalahan!</strong> {{ $message }}
        </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Jenis Kelamin</label>
    <input type="text" class="form-control col-md-4 @error('jenis_kelamin') is-invalid @enderror" readonly value="{{$data->jenis_kelamin}}" name="jenis_kelamin" autocomplete="off">
    @error('jenis_kelamin')
        <div class="alert alert-warning invalid-feedback">
          <strong>Kesalahan!</strong> {{ $message }}
        </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Alamat</label>
    <input type="text" class="form-control col-md-8 @error('alamat') is-invalid @enderror" value="{{$data->alamat}}" name="alamat" autocomplete="off">
    @error('alamat')
        <div class="alert alert-warning invalid-feedback">
          <strong>Kesalahan!</strong> {{ $message }}
        </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-info mb-4">Save</button>
</form>
@endforeach
@endsection