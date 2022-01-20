<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Barang Masuk</title>
</head>
<body>

	Tanggal Cetak : <?= date('d F Y'); ?>
	<br>
	<br>
	<br>
	<table width="100%" style="border: 0.1mm solid #0000;" cellpadding="8">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Tanggal Masuk</th>
			</tr>
		</thead>

		<tbody>
			<?php $i=1; foreach($semuabarang as $barang): ?>
			<tr>
				<th><?= $i++; ?></th>
				<td><?= $barang['kode_barang']; ?></td>
				<td><?= $barang['nama_barang']; ?></td>
				<td><?= $barang['jumlah_barang']; ?></td>
				<td><?= date('d F Y', $barang['date_created']); ?></td>
			</tr>
			<?php  endforeach;?>
		</tbody>
	</table>
 
</body>
</html>