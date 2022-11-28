<!doctype html>
<html lang="en">
<head>
	<title>Data Kelas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h2>Tambah Data Kelas</h2>
<form action="<?= site_url('controllerc/proses_tambah') ?>" method="post">

	<div class="mb-3">
		<label>Jurusan</label>
		<input type="text" name="txt_jurusan" class="form-control">
	</div>
	<div class="mb-3">
		<label>Kelas</label>
		<input type="text" name="txt_kelas" class="form-control">
	</div>
	<div class="mb-3">
		<label>Isi</label>
		<input type="text" name="txt_isi" class="form-control">
	</div>
	<input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">

</form>
</body>
</html>
