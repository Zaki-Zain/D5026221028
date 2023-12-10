@extends('master4')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Sepeda Motor</h3>

	<a href="/sepedamotor"> Kembali</a>

	<br/>
	<br/>

	<form action="/sepedamotor/store3" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "merksepedamotor" class = "col-sm-2 control-label">Merk Sepeda Motor</label>
            <div class = "col-sm-8">
               <input required="required" name="merksepedamotor" type = "text" class = "form-control" id = "merksepedamotor" placeholder = "Masukkan Merk Sepeda Motor">
            </div>
        </div>
        <div class = "form-group">
            <label for = "stocksepedamotor" class = "col-sm-2 control-label">Stock Sepeda Motor</label>
            <div class = "col-sm-8">
               <input required="required" name="stocksepedamotor" type = "number" class = "form-control" id = "stocksepedamotor" placeholder = "Masukkan Stock Sepeda Motor">
            </div>
        </div>
        <div class = "form-group">
            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
            <div class = "col-sm-8">
               <input required="required" name="tersedia" type = "text" class = "form-control" id = "tersedia" placeholder = "Apakah tersedia">
            </div>
        </div>
        <div class = "form-group">
            <div class = "col-sm-8">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
@endsection
