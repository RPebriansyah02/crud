@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12">
  		<h3>Edit Biodata Pegawai</h3>
  	  </div>
  	</div>

  	@if ($errors->any())
  	  <div class="alert alert-danger">
  	  	<strong>Maaf!!!</strong> Mungkin anda salah memasukan kata kunci.<br>
  	  	<ul>
  	  	  @foreach ($errors as $error)
  	  	    <li>{{$error}}</li>
  	  	  @endforeach
  	  	</ul>
  	  </div>
  	@endif

  	<form action="{{route('biodata.update',$biodata->id)}}" method="post">
  	  @csrf
      @method('PUT')
  	  <div class="row">
  	  	<div class="col-md-12">
  	  	  <strong>Nama :</strong>
  	  	  <input type="text" name="nama" class="form-control" value="{{$biodata->nama}}">
  	  	</div>
  	  	<div class="col-md-12">
  	  	  <strong>Jabatan :</strong>
  	  	  <input type="text" name="jabatan" class="form-control" value="{{$biodata->jabatan}}">
  	  	</div>

  	  	<div class="col-md-12">
  	  	  <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Kembali</a>
  	  	  <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
  	  	</div>
  	  </div>
  	</form>

  </div>
@endsection
