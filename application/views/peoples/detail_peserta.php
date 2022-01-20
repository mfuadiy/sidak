<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">
					Data Pribadi
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


								<form action="<?= base_url(); ?>peoples/update_fotoprofil_p" method="post" enctype="multipart/form-data">

									<div class="custom-file col-md-8">
										<input type="hidden" id="noreg" name="noreg" value="<?= $alldata['noreg']; ?>">
										<input type="file" class="custom-file-input" id="image" name="image">
										<label class="custom-file-label" for="image">Masukan Foto Profile</label>
									</div>

									<button type="submit" class="btn btn-danger mt-2" id="savefoto">Simpan</button>

								</form>

								<!-- <a href="<?= base_url(); ?>peoples" class="btn btn-success mt-3">kembali</a> -->
								<!-- <a href="<?= base_url(); ?>peoples/preview/<?= $alldata['noreg']; ?>" class="btn btn-primary mt-3">Preview</a> -->

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
						<a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta_pekerjaan/<?= $alldata['noreg']; ?>">Pekerjaan</a>
						<a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta_alamat/<?= $alldata['noreg']; ?>">Alamat</a>
						<a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta_keluarga/<?= $alldata['noreg']; ?>">Data Keluarga</a>
						<a class="nav-link" href="<?= base_url(); ?>peoples/preview_peserta/<?= $alldata['noreg']; ?>">Simpan Semua Data</a>

						<a class="nav-link" href="<?= base_url(); ?>peoples/riwayat_peserta/<?= $alldata['noreg']; ?>">Riwayat Perubahan</a>

						<!--  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta_simulasi/<?= $alldata['noreg']; ?>">Simulasi Pensiun</a> -->
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
													<input type="file" class="custom-file-input" id="image" name="image" <?php
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
<style type="text/css">
	/*********************** Demo - 1 *******************/
	.box1 img,
	.box1:after,
	.box1:before {
		width: 100%;
		transition: all .3s ease 0s
	}

	.box1 .icon,
	.box2,
	.box3,
	.box4,
	.box5 .icon li a {
		text-align: center
	}

	.box10:after,
	.box10:before,
	.box1:after,
	.box1:before,
	.box2 .inner-content:after,
	.box3:after,
	.box3:before,
	.box4:before,
	.box5:after,
	.box5:before,
	.box6:after,
	.box7:after,
	.box7:before {
		content: ""
	}

	.box1,
	.box11,
	.box12,
	.box13,
	.box14,
	.box16,
	.box17,
	.box18,
	.box2,
	.box20,
	.box21,
	.box3,
	.box4,
	.box5,
	.box5 .icon li a,
	.box6,
	.box7,
	.box8 {
		overflow: hidden
	}

	.box1 .title,
	.box10 .title,
	.box4 .title,
	.box7 .title {
		letter-spacing: 1px
	}

	.box3 .post,
	.box4 .post,
	.box5 .post,
	.box7 .post {
		font-style: italic
	}

	body {
		background-color: #f1f1f2
	}

	.mt-30 {
		margin-top: 30px
	}

	.mt-40 {
		margin-top: 40px
	}

	.mb-30 {
		margin-bottom: 30px
	}

	.box1 .icon,
	.box1 .title {
		margin: 0;
		position: absolute
	}

	.box1 {
		box-shadow: 0 0 3px rgba(0, 0, 0, .3);
		position: relative
	}

	.box1:after,
	.box1:before {
		height: 50%;
		background: rgba(0, 0, 0, .5);
		position: absolute;
		top: 0;
		left: 0;
		z-index: 1;
		transform-origin: 100% 0;
		transform: rotateZ(90deg)
	}

	.box1:after {
		top: auto;
		bottom: 0;
		transform-origin: 0 100%
	}

	.box1:hover:after,
	.box1:hover:before {
		transform: rotateZ(0)
	}

	.box1 img {
		height: auto;
		transform: scale(1) rotate(0)
	}

	.box1:hover img {
		filter: sepia(80%);
		transform: scale(1.3) rotate(10deg)
	}

	.box1 .title {
		font-size: 19px;
		font-weight: 600;
		color: #fff;
		text-transform: uppercase;
		text-shadow: 0 0 1px #004cbf;
		bottom: 10px;
		left: 10px;
		opacity: 0;
		z-index: 2;
		transform: scale(0);
		transition: all .5s ease .2s
	}

	.box1:hover .title {
		opacity: 1;
		transform: scale(1)
	}

	.box1 .icon {
		padding: 7px 5px;
		list-style: none;
		background: #004cbf;
		border-radius: 0 0 0 10px;
		top: -100%;
		right: 0;
		z-index: 2;
		transition: all .3s ease .2s
	}

	.box1:hover .icon {
		top: 0
	}

	.box1 .icon li {
		display: block;
		margin: 10px 0
	}

	.box1 .icon li a {
		display: block;
		width: 35px;
		height: 35px;
		line-height: 35px;
		border-radius: 10px;
		font-size: 18px;
		color: #fff;
		transition: all .3s ease 0s
	}

	.box2 .icon li a,
	.box3 .icon a:hover,
	.box4 .icon li a:hover,
	.box5 .icon li a,
	.box6 .icon li a {
		border-radius: 50%
	}

	.box1 .icon li a:hover {
		color: #fff;
		box-shadow: 0 0 10px #000 inset, 0 0 0 3px #fff
	}

	@media only screen and (max-width:990px) {
		.box1 {
			margin-bottom: 30px
		}
	}
</style>