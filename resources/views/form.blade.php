@extends('template/master')

@section('judul','Halaman Formulir')

@section('content')

  <h1>Form Input Data Siswa</h1>

<form method="POST" action="/form/proses">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" autocomplete="off">
      @error('nama')
        <div class="alert alert-warning invalid-feedback">
          <strong>Kesalahan!</strong> {{ $message }}
        </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">NISN</label>
    <input type="text" class="form-control @error('NISN') is-invalid @enderror" name="NISN" autocomplete="off">
    @error('NISN')
        <div class="alert alert-warning invalid-feedback">
          <strong>Kesalahan!</strong> {{ $message }}
        </div>
    @enderror
  </div>
  <label for="exampleFormControlInput1">Jenis Kelamin</label>
  <br>
  <div class="form-check form-check-inline">
    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" type="checkbox" id="inlineCheckbox1" value="laki laki">
    <label class="form-check-label" for="inlineCheckbox1">Laki Laki</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="checkbox" name="jenis_kelamin" id="inlineCheckbox2" value="perempuan">
    <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
  </div>
  @error('jenis_kelamin')
        <div class="alert alert-warning invalid-feedback">
          <strong>Kesalahan!</strong> {{ $message }}
        </div>
  @enderror
  <hr>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
    @error('alamat')
        <div class="alert alert-warning invalid-feedback">
          <strong>Kesalahan!</strong> {{ $message }}
        </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-info mb-4">Save</button>
</form>
@endsection