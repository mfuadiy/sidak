<!DOCTYPE html>
<html>
<head>
	<title></title>
</head><body>
<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Nomor Pegawai</th>
						<th>Nama Peserta</th>
						<th>Usia</th>
						<th>Ahli Waris</th>
						<th>Usia Ahli Waris</th>
					</tr>
				</thead>
			<tbody>
				<?php foreach ($pensiun as $pen) : ?>
				<tr>
					<th><?= ++$start; ?></th>
					<td><?= $pen['npk']; ?></td>
					<td><?= $pen['nama']; ?></td>
					<td><?php
						$now		= new DateTime();
						$lahir		= new DateTime($pen['tgl_lhr']);
						$intervallhr= date_diff($lahir, $now);
						echo $intervallhr->y;
					?></td>

					<td>
						<?php 
						$query = $this->db->get_where('aw_pn', ['npk' => $pen['npk']])->result_array();

						?>

						<?php foreach ($query as $q) : ?>
							<?= $q['nama']; ?> <br>
						<?php endforeach; ?>
						 
					</td>
					<td>
						<?php foreach ($query as $q) : ?>
							<?php
							$now		= new DateTime();
							$lahir1		= new DateTime($q['tgl_lhr_aw']);
							$intervallhraw= date_diff($lahir1, $now);
							echo $intervallhraw->y; ; 
							 ?> <br>
						<?php endforeach; ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			</table>
</body></html>