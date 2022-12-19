<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Aset</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<h3 class="mb-2 alert alert-info">Data Aset</h3>

		<a href="<?= site_url('aset/tambah') ?>" class="mb-3 float-end btn btn-success">Tambah Data</a>

		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jenis</th>
					<th>Lokasi</th>
					<th>Jumlah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($data_aset as $row) {
				?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $row->nama_aset; ?></td>
						<td><?= $row->jenis; ?></td>
						<td><?= $row->lokasi; ?></td>
						<td><?= $row->jumlah; ?></td>
						<td>

							<a href="<?= site_url('aset/edit/' . $row->id) ?>" class="btn btn-warning">Edit</a>

							<a href="<?= site_url('aset/delete/' . $row->id) ?>" class="btn btn-danger">Delete</a>

						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>

</html>
