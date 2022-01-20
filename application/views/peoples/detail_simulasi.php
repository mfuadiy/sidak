<div class="container">
<div class="row mt-3">
	<div class="col-md-12">

		<div class="card">
			<div class="card-header">
				   <a href="<?= base_url(); ?>peoples" class="fas fa-arrow-circle-left"></a> Manfaat Pensiun
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
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail/<?= $alldata['noreg']; ?>">Data Pribadi</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_pekerjaan/<?= $alldata['noreg']; ?>">Pekerjaan</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_alamat/<?= $alldata['noreg']; ?>">Alamat</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_keluarga/<?= $alldata['noreg']; ?>">Data Keluarga</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/preview/<?= $alldata['noreg']; ?>">Simpan Semua Data</a>

				  <a class="nav-link active" href="#">Simulasi Pensiun</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/riwayat/<?= $alldata['noreg']; ?>">Riwayat Perubahan</a>
				</nav>


				<div class="tab-content" id="pills-tabContent">
				  <!--DATA PRIBADI-->
				  
				  <!--PEKERJAAN-->
				  
				  <!--ALAMAT-->
				  
				  <!--DATA KELUARGA-->
				
				<!--MANFAAT PENSIUN-->
				<div class="tab-pane fade show active" id="pills-pensiun" role="tabpanel" aria-labelledby="pills-pensiun-tab">

					

					<?php 
					$lhr 	 = $alldata['tgl_lhr'];
					$now	 = date('Y/m/d');
					$pensiun = date('Y/m/d', strtotime('+57 year', strtotime($lhr)));
					$skrg 	 = new DateTime($now);
					 ?>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Perkiraan Pensiun</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" value="<?php
							    	$lhr 	= $alldata['tgl_lhr'];
							    	$th1965 = date('1965-01-01');
							    	$th1968 = date('1968-01-01');
							    	$th1971 = date('1971-01-01');

							    	if($lhr >= $th1965 && $lhr <= $th1968){
							    	$pensiun= date('Y/m/d', strtotime('+58 year', strtotime($lhr)));
							    	} 
							    	else if($lhr >= $th1968 && $lhr <= $th1971){
							    	$pensiun= date('Y/m/d', strtotime('+59 year', strtotime($lhr)));
							    	}
							    	else if($lhr >= $th1971){
							    	$pensiun= date('Y/m/d', strtotime('+60 year', strtotime($lhr)));
							    	}
							    	else if($lhr <= $th1965){
							    	$pensiun= date('Y/m/d', strtotime('+57 year', strtotime($lhr)));
							    	}

							    	echo date("01/m/Y", strtotime($pensiun));
							    	?>" readonly>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Perkiraan Masa Bekerja</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" value="<?php
							    	$pensN			= new DateTime($pensiun);
							    	$mbk			= new DateTime($alldata['tgl_mb']);
							    	$intervalkrj	= date_diff($mbk, $pensN);
							    	$lamakerja		= $intervalkrj->y + round((($intervalkrj->m+1)/12),2);
							    	//var_dump($lamakerja);
							    	echo $intervalkrj->y.' tahun ';
							    	echo $intervalkrj->m.' bulan ';
							    	//echo $intervalkrj->d.' hari.';
							    	?>" readonly>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Sisa Masa Bekerja</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" value="<?php

							    	$now		= new DateTime();
							    	$sisaMb		= date_diff($pensN, $now);
							    	//$lamakerja	= $interval->y + round((($interval->m)/12),2);
							    	//var_dump($lamakerja);
							    	echo $sisaMb->y.' tahun ';
							    	echo $sisaMb->m.' bulan ';
							    	//echo $intervallhr->d.' hari.';
							    	
							    	?>" readonly>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Gaji Pokok <br>
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php  function rupiah($angka){
						
										$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
										return $hasil_rupiah;
									 	
									}
									$gaji 	= $alldata['phdp'];
									$hasil 	= $gaji;
									$sisaMsBk = $sisaMb->y;
									 echo rupiah($gaji);?>" readonly>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">PhDP Proyeksi<br>
 					<small>Asumsi Kenaikan PhDP sebesar 4%</small></label>
				    <div class="col-sm-8">

				      <input type="text" class="form-control" value="<?php 

				     				$x = 0;
									do{
										$x++;
										$hasil = ($hasil*1.04);
									} while ($x<$sisaMsBk);
				
									echo rupiah($hasil);
									
									$mp = $hasil*0.025*$lamakerja;
									$cutmp = $hasil*0.8;
									if($mp>$cutmp){
										$mpber = $cutmp;
									}
									else{
										$mpber = $mp;
									}
									$mpsek = $mpber*147.35181;
									$mpsek20 = 0.2*$mpsek;
									$mpber80 = 0.8*$mpber;
				     				?>" readonly>
				     				
				   
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Perkiraan MP Berkala (Maks. 80% dari PhDP) <br>
				    <small>PhDP x 2.5% x Masa Bekerja</small>
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php echo rupiah($mpber);?>" readonly>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Perhitungan MP Sekaligus 100%
				    				<br>
				    				<small><?= rupiah($mpber).' x 147,35181' ?></small>
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php echo rupiah($mpsek); ?>" readonly>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Perhitungan MP Sekaligus 20%
				    				<br>
				    				<small><?= rupiah($mpsek).' x 20%' ?></small>
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php echo rupiah($mpsek20); ?>" readonly>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Perhitungan MP Berkala Setelah Diambil 20%
				    				<br>
				    				<small><?= rupiah($mpber).' x 80%' ?></small>
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php echo rupiah($mpber80); ?>" readonly>
				    </div>
					</div>

				</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</div>



