@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3>Selamat anda berhasil masuk</h3>
        </div>
        <div class="col-sm-1">
            <a class="btn btn-sm btn-success" href="{{ route('biodata.index')}}">Biodatamu</a>
        </div>
    </div>
</div>
@endsection
