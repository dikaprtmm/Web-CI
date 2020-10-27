<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa Index</title>
</head>
<body>

	<h1>Mahasiswa</h1>
	<h3>Selamat Datang, <?= $nama_lengkap ?></h3>
	<p>Nim saya <?= $nim ?></p>
	<hr>
	<a href="<?= site_url('mahasiswa/tambah')?>"></a>
	<table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama Mahasiswa</th>
		</tr>
		<?php foreach ($mahasis as $key): ?>
			<tr>
				<td><?= $key['nim'] ?></td>
				<td><?= $key['nama'] ?></td>
			</tr>
		<?php endforeach?>
	</table>

</body>
</html>