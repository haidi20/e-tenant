@extends('_layouts.default')


@section('tubuh')
<div class="panel panel-primary" style="border-bottom:0px">
  <div class="panel-heading text-center">
    <div class="h3">Informasi Event Anda Berhasil Dibuat</div>
  </div>
  <div class="panel-body text-center">
    <div class="h4">Simpan kode unik ini untuk kebutuhan tenant anda</div>
    <div class="row">
	   	<div class="well col-sm-offset-4 col-sm-4">
	  		<div class="h3">
	  			{{$kunci}}
	  		</div>
		</div>
  	</div>
    <div class="row">
    	<div class="col-sm-4 col-sm-offset-4">
    		{{-- <button class="col-sm-12 btn btn-success">Selesai</button> --}}
        <a href="{{url('/')}}" class="btn btn-success btn-lg">Selesai</a>
    	</div>
  	</div>
    </div>
@endsection
