<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">
					<a href="<?= base_url(); ?>peoples" class="fas fa-arrow-circle-left"></a> Data Pribadi
				</div>
				<div class="card-body">

					<table class="table">
						<tr>
							<th width="40%">
								<img class="img-thumbnail" src="<?php if ($alldata['img'] !== '') {
																	echo base_url('assets/img/profile/') . $alldata['img'];
																} else {
																	echo base_url('assets/img/profile/default.jpg');
																} ?>" width="155">


								<form action="<?= base_url(); ?>peoples/update_fotoprofil" method="post" enctype="multipart/form-data">
									<div class="custom-file col-md-8">
										<input type="hidden" id="noreg" name="noreg" value="<?= $alldata['noreg']; ?>">

										<input type="file" class="custom-file-input" id="image" name="image">

										<label class="custom-file-label" for="image">Masukan Foto Profile</label>
									</div>
									<button type="submit" class="btn btn-danger mt-2" id="savefoto">Simpan</button>
								</form>


								<!-- <a href="<?= base_url(); ?>/peoples" class="btn btn-secondary mt-3">kembali</a>
						
						<a href="<?= base_url(); ?>peoples/riwayat/<?= $alldata['noreg']; ?>" class="btn btn-success mt-3">Riwayat Perubahan</a> -->
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
										<input type="text" class="form-control" value="<?php

																						$now		= new DateTime();
																						$lahir		= new DateTime($alldata['tgl_lhr']);
																						$intervallhr = date_diff($lahir, $now);
																						//$lamakerja	= $interval->y + round((($interval->m)/12),2);
																						//var_dump($lamakerja);
																						echo $intervallhr->y . ' tahun ';
																						echo $intervallhr->m . ' bulan ';
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
						<a class="nav-link active" href="#">Data Pribadi</a>
						<a class="nav-link" href="<?= base_url(); ?>peoples/detail_pekerjaan/<?= $alldata['noreg']; ?>">Pekerjaan</a>
						<a class="nav-link" href="<?= base_url(); ?>peoples/detail_alamat/<?= $alldata['noreg']; ?>">Alamat</a>
						<a class="nav-link" href="<?= base_url(); ?>peoples/detail_keluarga/<?= $alldata['noreg']; ?>">Data Keluarga</a>
						<a class="nav-link" href="<?= base_url(); ?>peoples/preview/<?= $alldata['noreg']; ?>">Simpan Semua Data</a>

						<a class="nav-link" href="<?= base_url(); ?>peoples/detail_simulasi/<?= $alldata['noreg']; ?>">Simulasi Pensiun</a>
						<a class="nav-link" href="<?= base_url(); ?>peoples/riwayat/<?= $alldata['noreg']; ?>">Riwayat Perubahan</a>
					</nav>


					<div class="tab-content" id="pills-tabContent">
						<!--DATA PRIBADI-->
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

							<form action="<?= base_url(); ?>peoples/update_datapribadi" method="post" enctype="multipart/form-data">

								<input type="hidden" id="noregDataPribadi" name="noregDataPribadi" value="<?= $alldata['noreg']; ?>">

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
									<div class="col-sm-10">
										<input type="text" id="nama" name="nama" class="form-control" value="<?= $alldata['nama_pes']; ?>" readonly required>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
									<div class="col-sm-10">

										<!-- <input type="text" id="jk" name="jk" class="form-control" value="<?= $alldata['jk']; ?>" readonly> -->

										<select id="jk" name="jk" class="form-control" readonly>
											<?php foreach ($jk as $j) : ?>
												<option value="<?= $j['id']; ?>" <?php if ($alldata['jk'] == $j['id']) {
																						echo "selected";
																					} ?>>
													<?= $j['jk']; ?>
												</option>
											<?php endforeach; ?>
										</select>

									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Agama</label>
									<div class="col-sm-10">

										<!-- <input type="text" id="jk" name="jk" class="form-control" value="<?= $alldata['jk']; ?>" readonly> -->

										<select id="agama" name="agama" class="form-control" readonly>
											<?php foreach ($agama as $ag) : ?>
												<option value="<?= $ag['id']; ?>" <?php if ($alldata['agama'] == $ag['id']) {
																						echo "selected";
																					} ?>>
													<?= $ag['agama']; ?>
												</option>
											<?php endforeach; ?>
										</select>

									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Tempat Lahir</label>
									<div class="col-sm-10">
										<input type="text" id="tp_lhr" name="tp_lhr" class="form-control" value="<?= $alldata['tp_lhr']; ?>" readonly required>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
									<div class="col-sm-10">
										<input type="date" id="tgl_lhr" name="tgl_lhr" class="form-control" value="<?= $alldata['tgl_lhr']; ?>" readonly required>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">NPWP</label>
									<div class="col-sm-10">
										<input type="text" id="npwp" name="npwp" class="form-control" value="<?= $alldata['npwp']; ?>" readonly required>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
									<div class="col-sm-10">
										<input type="text" id="nik" name="nik" class="form-control" value="<?= $alldata['nik']; ?>" readonly required>
									</div>
								</div>


								<table class="table">
									<tr>
										<th>
											<?php
											$kk = substr($alldata['scan_ktp'], -3);
											if ($kk == "pdf") :
											?>
												<br><br><br>
												<iframe src="<?= base_url('assets/img/ktp/') . $alldata['scan_ktp'];  ?>" width="200%" height="300px">
												</iframe>
											<?php else : ?>
												<img class="img-thumbnail" src="<?php if ($alldata['scan_ktp'] == '') {
																					echo base_url('assets/img/ktp/default.jpg');
																				} else {
																					echo base_url('assets/img/ktp/') . $alldata['scan_ktp'];
																				} ?>" width="200" height="100" data-toggle="modal" data-target="#fullimage">
											<?php endif; ?>
										</th>
										<td>
											<div class="col-sm-9">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="image" name="image" value="<?= $alldata['scan_ktp']; ?>" <?php
																																								if ($alldata['scan_ktp'] == '') {
																																									echo "required";
																																								}
																																								?>>
													<label class="custom-file-label" for="image">Choose file</label>
												</div>
												<label for="exampleFormControlFile1">Masukan Scan KTP Maks. 2 Megabyte</label>
											</div>
										</td>
									</tr>
								</table>

								<!-- Modal -->
								<div class="modal fade" id="fullimage" style=" background-color: rgba(0,0,0,.0001) !important;">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content" style=" background-color: rgba(0,0,0,.0001) !important;">
											<!-- <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div> -->


											<img class="img-thumbnail" src="<?php if ($alldata['scan_ktp'] == '') {
																				echo base_url('assets/img/ktp/default.jpg');
																			} else {
																				echo base_url('assets/img/ktp/') . $alldata['scan_ktp'];
																			} ?>" alt="Responsive image">


										</div>
									</div>
								</div>


								<button type="button" class="btn btn-warning" onclick="editProfile()">Edit</button>
								<button type="button" class="btn btn-primary" onclick="batalEditProfile()">Batal</button>
								<button type="submit" class="btn btn-danger" id="saveDataPribadi" onclick="konfirmasi()" disabled>Simpan Sementara</button>
								<script type="text/javascript">
									function editProfile() {
										document.getElementById("nama").removeAttribute("readonly", 0);
										document.getElementById("jk").removeAttribute("readonly", 0);
										document.getElementById("tp_lhr").removeAttribute("readonly", 0);
										document.getElementById("tgl_lhr").removeAttribute("readonly", 0);
										document.getElementById("nik").removeAttribute("readonly", 0);
										document.getElementById("npwp").removeAttribute("readonly", 0);
										document.getElementById("agama").removeAttribute("readonly", 0);
										document.getElementById("saveDataPribadi").removeAttribute("disabled", 0);
									}

									function batalEditProfile() {
										document.getElementById("nama").setAttribute("readonly", 1);
										document.getElementById("jk").setAttribute("readonly", 1);
										document.getElementById("tp_lhr").setAttribute("readonly", 1);
										document.getElementById("tgl_lhr").setAttribute("readonly", 1);
										document.getElementById("nik").setAttribute("readonly", 1);
										document.getElementById("npwp").setAttribute("readonly", 1);
										document.getElementById("agama").setAttribute("readonly", 1);
										document.getElementById("saveDataPribadi").setAttribute("disabled", 1);
									}

									function konfirmasi() {
										confirm('Anda Yakin?')
									}
								</script>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>