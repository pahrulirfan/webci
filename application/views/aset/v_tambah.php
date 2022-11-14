<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data Aset</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<h3 class="mb-2 alert alert-info">Tambah Data Aset</h3>

		<form action="<?= site_url('aset/simpanTambah') ?>" method="post">
			<div class="mb-3">
				<label for="">Nama Aset</label>
				<input type="text" name="txt_nama" class="form-control">
			</div>
			<div class="mb-3">
				<label for="">Jenis Aset</label>
				<input type="text" name="txt_jenis" class="form-control">
			</div>
			<div class="mb-3">
				<label for="">Lokasi Aset</label>
				<input type="text" name="txt_lokasi" class="form-control">
			</div>
			<div class="mb-3">
				<label for="">Jumlah Aset</label>
				<input type="number" name="txt_jumlah" class="form-control">
			</div>
			<input type="submit" value="Simpan Data" class="btn btn-primary">
			<a href="<?=site_url('aset/index');?>" class="btn btn-warning">Kembali</a>
		</form>

	</div>
</body>

</html>
