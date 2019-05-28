<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
<link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
</head>
<body>
 <div class="container">
     <div class="card">
         <div class="card-body">
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table class="table table-bordered">
		<tr>
                <th>kode</th>
			<th>tujuan</th>
			<th>tanggal</th>
			<th>pesawat</th>

		</tr>
		@foreach($tiket as $p)
		<tr>
                <td>{{ $p->kd_tiket }}</td>
			<td>{{ $p->tujuan }}</td>
			<td>{{ $p->tanggal }}</td>
			<td>{{ $p->pesawat }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->kd_tiket }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->kd_tiket }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
         </div></div></div>
 
</body>
</html>