@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Biodata Pegawai Baru</h3>
  	  </div>
  	</div>

  	@if ($errors->any())
  	  <div class="alert alert-danger">
  	  	<strong>Maaf!!! </strong> Mungkin anda salah memasukkan kata kunci.<br>
  	  	<ul>
  	  	  @foreach ($errors as $error)
  	  	    <li>{{$error}}</li>
  	  	  @endforeach
  	  	</ul>
  	  </div>
  	@endif

  	<form action="{{route('biodata.store')}}" method="post">
  	  @csrf
  	  <div class="row">
  	  	<div class="col-md-12">
  	  	  <strong>Nama :</strong>
  	  	  <input type="text" name="nama" class="form-control" placeholder="Casmad">
  	  	</div>
  	  	<div class="col-md-12">
  	  	  <strong>Jabatan :</strong>
  	  	  <input type="text" name="jabatan" class="form-control" placeholder="Manager">
  	  	</div>

  	  	<div class="col-md-12">
  	  	  <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Kembali</a>
  	  	  <button type="submit" class="btn btn-sm btn-primary">Tambahkan</button>
  	  	</div>
  	  </div>
  	</form>

  </div>
@endsection
