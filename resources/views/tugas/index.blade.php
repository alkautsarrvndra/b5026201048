<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Tugas</h3>
 
	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->tugas_idpegawai}}</td>
			<td>{{ $p->tugas_tanggal}}</td>
			<td>{{ $p->tugas_namatugas}}</td>
			<td>{{ $p->tugas_status}}</td>
			<td>
				<a href="/tugas/edit/{{ $p->tugas_id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->tugas_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>