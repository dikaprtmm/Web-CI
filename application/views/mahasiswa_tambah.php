<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #7A77FF">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('Mahasiswa')?>">Home</a>
			<a href="<?= site_url('mahasiswa_tambah')?>" class="nav-link active">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Daiki</a>
		</div>
	</nav>
	<div class="alert alert-success text-center mt-2 shadow">
		Tambah Mahasiswa
	</div>
	<br><br>
	<div>
		<div class="card mt-2">
			<div class="card-body">
				<div class="from-group row">
					<label for="inputNIM" class="col-sm-2 col-from-label">NIM</label>
					<div class="com-sm-10">
						<input type="text" class="from-control" id="NIM" placeholder="Masukan NIM">
					</div>
				</div>
				<div class="from-group row">
					<label for="inputNama" class="col-sm-2 col-from-label">Nama</label>
					<input type="text" class="from-control" id="Nama" placeholder="Masukan Nama">

				</div>
				<div class="from-group row">
					<label for="inputAlamat" class="col-sm-2 col-from-label">Alamat</label>
					<div class="col-md-10">
						<textarea name="Alamat" class="from-control" placeholder="Masukan Alamat"></textarea>
					</div>
				</div>
				<div align="right">
					<input type="submit" name="btnsubmit" value="simpan" class="btn btn-success mt-1">
				</div>
			</div>
			
		</div>
	</div>
	<h1>Tambah Mahasiswa</h1>
	<a href="">Kembali</a>
	<br>
	<form>
		<h6>Nim</h6>
		<input type="number" name="nim"> <br>

		<h6>Nama Mahasiswa</h6>
		<input type="text" name="nama_mahasiswa"> <br>

		<input type="submit" name="submit" value="simpan">
	</form>

</body>
</html>