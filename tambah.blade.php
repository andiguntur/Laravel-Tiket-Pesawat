<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan TIKET</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
 <div class="container">
	
	<h3>Pemesanan TIkET Manual</h3>
 
	<a href="/tiket"> Kembali</a>
	
	<br/>
	<br/>
    <div class="col-md-4 col-md-offset-4">
	<form action="/tiket/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
    
        kode <input type="text" length="20" name="kode" required="required" class="form-control"><br/>
        </div>
        <div class="form-group">
        tujuan <input type="text" name="tujuan" required="required" class="form-control"> <br/>
        </div>
        <div class="form-group">
        tanggal <input type="text" name="tanggal" required="required" class="form-control"> <br/>
        </div>
        <div class="form-group">
        pesawat <input type="text" name="pesawat" required="required" class="form-control"> <br/>
        </div>
        <input type="submit" class="btn btn-warning btn-lg" value="Simpan Data">
    </form>
    </div>

 </div>
</body>
</html>