<?php 

header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>

<!-- <div class="container"> -->
	<!-- <h3 class="mt-3">DAFTAR PESERTA PASIF Lebih dari 70 Tahun</h3> -->

	<!-- <div class="row">
		<div class="col-md-5">
			<form action="<?= base_url('pensiunan'); ?>" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Cari siapa..." id="keyword" name="keyword" autocomplete="off" autofocus="" value="<?= set_value('keyword'); ?>">
				  <div class="input-group-append">
				    <input class="btn btn-primary" type="submit" name="submit">
				  </div> 
				</div>
			</form>
		</div>
	</div> -->

	<!-- <div class="row">
		<div class="col-md-10">
			<h5>Hasil pencarian sebanyak : <?= $total_rows; ?></h5>
			<a href="<?= base_url('export/pdf_preview'); ?>">Export Data</a>  -->
			<table border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nomor Registrasi</th>
						<th>Tanggal Pensiun</th>
						<th>Nama Peserta</th>

						<th>Penerima Pensiun</th>
						<th>Golongan</th>
						<th>Status Pegawai</th>
						<th>Cabang</th>
						<th>Tempat Lahir</th>
						<th>Tangal Lahir</th>

						<th>Usia Pensiunan</th>
						<th>Jenis Kelamin</th>
						<th>Status Pensiun</th>
						<th>Jenis Pensiun</th>
						<th>Alamat</th>
						<th>RT/RW</th>
						<th>Kelurahan</th>
						<th>Kecamatan</th>
						<th>Kota</th>
						<th>No HP</th>
						<th>Telpon</th>

						<th>Nomor Urut</th>
						<th>Ahli Waris</th>

						<th>Status Keluarga</th>
						<th>Tanggal Lahir Ahli Waris</th>
						<th>Usia Ahli Waris</th>
						<th>Keterangan</th>
						<!-- <th>Usia Ahli Waris</th> -->
						
					</tr>
				</thead>
				<tbody>
					

				<!-- <?php if(empty($peoples)) : ?>
					<tr>
						<td colspan="4">
							<div class="alert alert-danger" role="alert">
							  DATA TIDAK DITEMUKAN!
							</div>
						</td>
					</tr>
					<?php endif; ?> -->
					<?php foreach ($peoples as $ppl) : ?>
						<tr>
							<!-- No -->
							<th><?= ++$start; ?></th>
							<!-- Nomor Pensiun -->
							<td><?= $ppl['npk']; ?></td>
							<!-- Tanggal Pensiun -->
							<td><?= $ppl['tgmul_pen']; ?></td>
							<!-- Nama -->
							<td><?= $ppl['nama']; ?></td>
							
							<!-- Penerima Pensiun -->
							<td><?= $ppl['an_bank'];?></td> 
							<!-- Golongan -->
							<td><?= $ppl['gol']; ?></td>
							<!-- Status Pegawai -->
							<td><?= $ppl['stpeg']; ?></td>
							<!-- Cabang -->
							<td><?= $ppl['cab']; ?></td>
							<!-- Tempat Lahir -->
							<td><?= $ppl['tplhr']; ?></td>
							<!-- Tanggal Lahir -->
							<td><?= $ppl['tglhr']; ?></td>

							<!-- Usia Pensiunan -->
							<td>
								<?php
								$now		= new DateTime();
								$lahir		= new DateTime($ppl['tglhr']);
								$intervallhr= date_diff($lahir, $now);
								echo $intervallhr->y;
								?>
							</td>
							<!-- Jenis Kelamin -->
							<td><?= $ppl['jk']; ?></td>
							<!-- Status Pensiun -->
							<td><?php 
							$aw1 = $this->db->get_where('jenis_pensiun', ['stppp' => $ppl['stppp']])->result_array();
							?>
							<?php foreach ($aw1 as $a) : ?>
								<?= $a['desk1'];  ?>
							<?php endforeach; ?>
							
						</td> 
						<!-- Jenis Pensiun -->
						<td><?php foreach ($aw1 as $a) : ?>
						<?= $a['desk2'];  ?>
						<?php endforeach; ?></td> 
						<!-- Alamat -->
						<td><?= $ppl['alamat']; ?></td>
						<!-- rt_rw -->
						<td><?= $ppl['rt_rw']; ?></td>
						<!-- kelurahan -->
						<td><?= $ppl['kelurahan']; ?></td>
						<!-- kecamatan -->
						<td><?= $ppl['kecamatan']; ?></td>
						<!-- Kota -->
						<td><?= $ppl['kota']; ?></td>
						<!-- No HP -->
						<td><?= $ppl['hp']; ?></td>
						<!-- Telepon -->
						<td><?= $ppl['telp']; ?></td>


						<!-- Nama Alih Waris Pensiunan  -->
						<td>
							<?php 
							$query = $this->db->get_where('aw_pn', ['npk' => $ppl['npk']])->result_array();
							?>
							<?php foreach ($query as $q) : ?>
								<?= $q['norut']; ?> <br>
							<?php endforeach; ?>

						</td>
						<td>
							<?php foreach ($query as $q) : ?>
								<?= $q['nama']; ?> <br>
							<?php endforeach; ?>

						</td> 
						<td>
							<?php foreach ($query as $q) : ?>
								<?php 
								$aw1 = $this->db->get_where('status_keluarga', ['id' => $q['st_kel']])->result_array();
								?>
								<?php foreach ($aw1 as $a) : ?>
									<?= $a['stts_kel'];  ?><br>
								<?php endforeach; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach ($query as $q) : ?>
								<?= $q['tgl_lhr_aw']; ?> <br>
							<?php endforeach; ?>
						</td>
						

						<!--Usia Alih Waris Pensiunan  -->
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
					<td>
						<?php foreach ($query as $q) : ?>
							<?= $q['ket']; ?> <br>
						<?php endforeach; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
			<!-- <?= $this->pagination->create_links(); ?>
		</div>	
	</div>
</div> -->
<!-- </div> -->