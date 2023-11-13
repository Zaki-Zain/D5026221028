<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>
    @extends("master")
    @section("IsiHalaman")
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

      	Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
		<input type="submit" value="Simpan">
	</form>
    @endsection
</body>
</html>
