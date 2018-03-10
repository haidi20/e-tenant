@extends('_layouts.default')

@section('tubuh')
<div class="container text-center h3">Buat Tempat Event</div>
<div class="container-fluid">
	<div class="row">
		<form>
		<div class="col-sm-offset-1 col-sm-3">
			<div class="form-group">
				<div class="panel panel-default text-right">
			  		<div class="panel-heading text-left">Upload Gambar</div>
			  		<img id="image-holder" src="#" alt="" height="100%" width="100%">
				<input type="file" name="profileimg" id="profileimg">
				<label for="profileimg" class="btn btn-success btn-sm" style="margin: 5px 5px 5px 5px">Input file</label>	
			</div>
			</div>
		</div>

		<div class="col-sm-4">
	 <div class="form-group">
    	<label for="nama_event">Nama Event</label>
    	<input type="text" class="form-control" id="nama_event" placeholder="Email">
  	</div>
   	<div class="form-group">
	    <label for="deskripsi_event">Deskripsi Event</label>
	    <textarea type="text" class="form-control" id="deskripsi_event" placeholder="Password"></textarea>
  	</div>
  	<div class="form-group">
	    <label for="alamat_event">Alamat Event</label>
	 	<textarea type="text" class="form-control" id="alamat_event" placeholder="Password"></textarea>
  	</div>
  	<div class="row">
	  		<div class="form-group col-sm-6">
			<label for="bentuk_tenant">Bentuk Tenant</label>
		 	<select class="form-control" id="bentuk_tenant">
			  <option>Outdoor</option>
			  <option>Indoor</option>
			</select>			
	  	</div>
	  	<div class="form-group col-sm-6"> 
	  		<label for="jenis_tenant">Jenis Tenant</label>
	  		<div class="checkbox">
			 <label><input type="checkbox" value="">UKM</label>
			</div>
			<div class="checkbox">
			 <label><input type="checkbox" value="">Usaha Kreatif</label>
			</div>
			<div class="checkbox">
			 <label><input type="checkbox" value="">Makanan</label>
			</div>
			<div class="checkbox">
			 <label><input type="checkbox" value="">Minuman</label>
			</div>
			<div class="checkbox">
			 <label><input type="checkbox" value="">Merchandise</label>
			</div>
			<div class="checkbox">
			 <label><input type="checkbox" value="">Fashion</label>
			</div>
			<div class="checkbox">
			 <label><input type="checkbox" value="">Lainnya</label>
			</div>

	  	</div>
  	</div>
 	<div class="form-group">
    	<label for="no_rek">Nomor Rekening</label>
    	<input type="text" class="form-control" id="no_rek">
  	</div>
 	<div class="form-group">
    	<label for="nama_rek">Nama Pemilik Rekening</label>
    	<input type="text" class="form-control" id="nama_rek">
  	</div>
  	<div class="form-group">
  		<button class="btn btn-success">Buat Tenant</button>
  	</div>
		</div>
		</form>
	</div>
</div>
@endsection