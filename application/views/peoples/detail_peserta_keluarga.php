<div class="container">
<div class="row mt-3">
	<div class="col-md-12">

		<div class="card">
			<div class="card-header">
				   Data Keluarga
			</div>
			<div class="card-body">

				<table class="table">
				<tr>
					<th width="40%">
						<img class="img-thumbnail" src="<?php if($alldata['img'] !== ''){
							echo base_url('assets/img/profile/').$alldata['img'];
						} else {
							echo base_url('assets/img/profile/default.jpg');
						} ?>" width="155">
						<br>
						<!-- <a href="<?= base_url(); ?>peoples" class="btn btn-success mt-3">kembali</a> -->
						<!-- <a href="<?= base_url(); ?>peoples/preview/<?= $alldata['noreg']; ?>" class="btn btn-primary mt-3">Preview</a> -->
						<!-- <a href="<?= base_url(); ?>peoples/riwayat/<?= $alldata['noreg']; ?>" class="btn btn-success mt-3">Riwayat Perubahan</a> -->
					</th>

					<td>
				<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" value="<?= $alldata['nama_pes']; ?>" readonly>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">NPK</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" value="<?= $alldata['noreg']; ?>" readonly>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Pensiun</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" value="<?= $alldata['nopes']; ?>" readonly>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Jabatan</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" value="<?= $alldata['st_peg']; ?>" readonly>
				    </div>
				</div>

				<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Usia</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" value="<?php /*$hitungan['usia'];*/
				    				
							    	$now		= new DateTime();
							    	$lahir		= new DateTime($alldata['tgl_lhr']);
							    	$intervallhr= date_diff($lahir, $now);
							    	//$lamakerja	= $interval->y + round((($interval->m)/12),2);
							    	//var_dump($lamakerja);
							    	echo $intervallhr->y.' tahun ';
							    	echo $intervallhr->m.' bulan ';
							    	//echo $intervallhr->d.' hari.';
							    	
							    	?>" readonly>
				    </div>
				</div>

					</td>

				</tr>
				</table>

				<!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  					<li class="nav-item">
    					<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Data Pribadi</a>
  					</li>
			  		<li class="nav-item">
			    		<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Pekerjaan</a>
			  		</li>
			  		<li class="nav-item">
			    		<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Alamat</a>
			  		</li>
			  		<li class="nav-item">
			    		<a class="nav-link" id="pills-keluarga-tab" data-toggle="pill" href="#pills-keluarga" role="tab" aria-controls="pills-keluarga" aria-selected="false">Data Keluarga</a>
			  		</li>
			  		<li class="nav-item">
			    		<a class="nav-link" id="pills-pensiun-tab" data-toggle="pill" href="#pills-pensiun" role="tab" aria-controls="pills-pensiun" aria-selected="false">Simulasi Manfaat Pensiun</a>
			  		</li>
				</ul> -->

				<nav class="nav nav-pills nav-justified mb-4">
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta/<?= $alldata['noreg']; ?>">Data Pribadi</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta_pekerjaan/<?= $alldata['noreg']; ?>">Pekerjaan</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta_alamat/<?= $alldata['noreg']; ?>">Alamat</a>
				  <a class="nav-link active" href="#">Data Keluarga</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/preview_peserta/<?= $alldata['noreg']; ?>">Simpan Semua Data</a>
				 <!--  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta_simulasi/<?= $alldata['noreg']; ?>">Simulasi Pensiun</a> -->
				 <a class="nav-link" href="<?= base_url(); ?>peoples/riwayat_peserta/<?= $alldata['noreg']; ?>">Riwayat Perubahan</a>
				</nav>


				<div class="tab-content" id="pills-tabContent">
					
				  <!--DATA PRIBADI-->
				  <a href="<?= base_url(); ?>peoples/tambah_ahliwaris/<?= $alldata['noreg'] ?>" class="btn btn-success mt-3 mb-3">
				  	<i class="fa fa-plus-square" aria-hidden="true"></i>
				  	Tambah Ahli Waris
				  </a>
				  <!--PEKERJAAN-->
				  
				  <!--ALAMAT-->
				  
				  <!--DATA KELUARGA-->
				<div class="tab-pane fade show active" id="pills-keluarga" role="tabpanel" aria-labelledby="pills-keluarga-tab">

					<table class="table">
				  	<thead>
				  	<tr>
				    		<th>
				    			<p class="card-text">
				    				Nama Ahli Waris
				    			</p>
				    		</th>
				    		<th>
				    			<p class="card-text">
				    				Jenis Kelamin
				    			</p>
				    		</th>
				    		<th>
				    			<p class="card-text">
				    				Status Keluarga
				    			</p>
				    		</th>
				    		<th>
				    			<p class="card-text">
				    				Tanggal Lahir
				    			</p>
				    		</th>
				    		<th>
				    			<p class="card-text">
				    				Status Tanggungan
				    			</p>
				    		</th>
				    		<th>
				    			<p class="card-text">
				    				Keterangan
				    			</p>
				    		</th>
				    		<th>
				    			<p class="card-text">
				    				Action
				    			</p>
				    		</th>
				    		
				    </tr>
					</thead>
					<tbody>
					<?php foreach ($ahli_waris as $aw) : ?>
					<tr>
						<td><?= $aw['nama_aw'] ?></td>
						<td>
							<?php 
							if($aw['jk_aw'] == "P") 
							{
								echo "Perempuan";
							}
							else{echo "Laki-Laki";}
							?>
								
						</td>
						<td>
							<?php 
							if($aw['stts_kel'] == "1"){
								echo "Suami/Istri";
							}
							elseif($aw['stts_kel'] == "2"){
								echo "Anak";
							}
							elseif($aw['stts_kel'] == "3"){
								echo "Orang Tua";
							}
							elseif($aw['stts_kel'] == "4"){
								echo "Pihak Ditunjuk";
							}
							else{
								echo "Peserta";
							}
							?>
							
						</td>
						<td><?= date('d/m/Y', strtotime($aw['tgl_lhr_aw'])); ?></td>
						<td>
							<?php
							if($aw['stts_tanggn'] == "MT"){
								echo "Menjadi Tanggungan";
							}
							else{
								echo "Tidak Menjadi Tanggungan";
							}
							?>
							
						</td>
						<td><?= $aw['ket'] ?></td>
						<td>
							<div style="font-size: 20px;">
							<a title="Edit Ahli Waris" href="<?= base_url(); ?>peoples/edit_ahliwaris/<?= $aw['no_id'] ?>" class="fas fa-edit" style="color: orange;"></a>

							<a title="Hapus Ahli Waris" href="<?= base_url(); ?>peoples/hapus_ahliwaris/<?= $aw['no_id'] ?>" class="fas fa-trash-alt" style="color: red;" onclick="konfirmasi()"></a>

							<a title="Riwayat Perubahan" href="<?= base_url(); ?>peoples/riwayat_ahliwaris/<?= $aw['no_id'] ?>" class="fas fa-history" style="color: #5e9cf9;"></a>

							</div>
						</td>
					</tr>
					<?php endforeach; ?>
					</tbody>
					</table>
				</div>
				<!--MANFAAT PENSIUN-->
				
			</div>
		</div>
		<script type="text/javascript">
		  function konfirmasi() {
		    confirm('Anda Yakin?')
		  }
		</script>
	</div>
</div>

</div>
</div>
</div>


