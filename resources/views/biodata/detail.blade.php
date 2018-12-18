@extends('layouts.app')
@section('content')
  <div class="container">
  	<div class="row">
  	  <div class="col-md-12">
  	  	<h3>Detail Biodata Pegawai</h3>
  	  	<hr>
  	  </div>
  	</div>
  	<div class="row">
  	  <div class="col-md-12">
  	  	<div class="form-group">
  	  	  <strong>Nama : </strong> {{$biodata->nama}}
  	  	</div>
  	  </div>
  	  <div class="col-md-12">
  	  	<div class="form-group">
  	  	  <strong>Jabatan : </strong> {{$biodata->jabatan}}
  	  	</div>
  	  </div>
  	  <div class="col-md-12">
  	 	<a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Kembali</a>
  	  </div>
  	</div>
  </div>
@endsection
