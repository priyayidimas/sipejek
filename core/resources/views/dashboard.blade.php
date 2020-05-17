@extends('t_index')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$auth->nama}}</h4>
                    <p class="card-text">Berhasil Masuk, Lokasi File {{base_path('Nama_File.png')}}</p>
                    <p>To Be Developed: Dashboard</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
