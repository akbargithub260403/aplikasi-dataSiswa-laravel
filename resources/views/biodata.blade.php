@extends('template/master')
@section('judul','Halaman Biodata')

@section('content')
<h2>Halaman Biodata</h2>
    <div class="row">
        <div class="col-10">
        <div class="card mt-5" style="width: 30rem;">
            <div class="card-body col-10">
                <h5 class="card-title">Biodata Diri</h5>
                <p><i>{{$nama}}</i></p>
                @foreach($data as $dt)
                <p class="card-text">{{$dt}}</p>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endsection