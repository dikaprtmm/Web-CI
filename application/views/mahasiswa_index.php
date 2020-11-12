<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa Index</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #7A77FF">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Daiki</a>
		</div>
	</nav>
	<div class="alert alert-success text-center mt-2 shadow">
		Data Mahasiswa
	</div>
	<div class="container">
		<table class="table table-bordered table-striped table-hover">
			<tr class="text-center">
				<th>NO</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>AKsi</th>
			</tr>
			<tr>
				<th>1</th>
				<th>1810330026</th>
				<th>Dikaw</th>
				<th>Mataram</th>
				<td class="text-center">
					<a href="" class="btn btn-info btn-sm">Edit</a>
					<a href="" class="btn btn-danger btn-sm">Edit</a>
				</td>
			</tr>
		</table>
	</div>
	<h1>Mahasiswa</h1>
	<h3>Selamat Datang, <?= $nama_lengkap ?></h3>
	<p>Nim saya <?= $nim ?></p>
	<hr>
	<a href="<?= site_url('Mahasiswa')?>">Kembali</a>
	<a href="<?= site_url('Mahasiswa/tambah') ?>">Tambah Mahasiswa</a>
	<table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama Mahasiswa</th>
		</tr>
		<?php foreach ($mahasiswa as $key): ?>
			<tr>
				<td><?= $key['nim'] ?></td>
				<td><?= $key['nama'] ?></td>
			</tr>
		<?php endforeach?>
	</table>

</body>
</html>