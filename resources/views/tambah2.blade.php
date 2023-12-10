@extends('master3')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store2" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-8">
               <input required="required" name="nrp" type = "text" class = "form-control" id = "nrp" placeholder = "Masukkan NRP">
            </div>
        </div>
        <div class = "form-group">
            <label for = "nilaiangka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-8">
               <input required="required" name="nilaiangka" type = "text" class = "form-control" id = "nilaiangka" placeholder = "Masukkan Nilai Angka">
            </div>
        </div>
        <div class = "form-group">
            <label for = "sks" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-8">
               <input required="required" name="sks" type = "number" class = "form-control" id = "sks" placeholder = "Masukkan SKS">
            </div>
        </div>
        <div class = "form-group">
            <div class = "col-sm-8">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
@endsection
