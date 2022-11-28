<!doctype html>
<html lang="en">
<head>
	<title>Data Kelas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h2>Data Kelas</h2>

<a href="<?= site_url('controllerc/tambah') ?>" class="btn btn-info">Tambah Data</a>

<table class="table table-bordered">
	<thead>
	<tr>
		<th>No</th>
		<th>Jurusan</th>
		<th>Kelas</th>
		<th>Isi</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no = 1;
	foreach ($data_kelas as $row) { ?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $row->kolom_jurusan; ?></td>
			<td><?= $row->kolom_kelas; ?></td>
			<td><?= $row->kolom_isi; ?></td>
			<td>Update | Delete</td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>

</body>
</html>
