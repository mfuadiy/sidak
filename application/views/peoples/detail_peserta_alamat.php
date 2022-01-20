<div class="container">
<div class="row mt-3">
	<div class="col-md-12">

		<div class="card">
			<div class="card-header">
				    Alamat
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
				  <a class="nav-link active" href="#">Alamat</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta_keluarga/<?= $alldata['noreg']; ?>">Data Keluarga</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/preview_peserta/<?= $alldata['noreg']; ?>">Simpan Semua Data</a>
				  <!-- <a class="nav-link" href="<?= base_url(); ?>peoples/detail_peserta_simulasi/<?= $alldata['noreg']; ?>">Simulasi Pensiun</a> -->
				  <a class="nav-link" href="<?= base_url(); ?>peoples/riwayat_peserta/<?= $alldata['noreg']; ?>">Riwayat Perubahan</a>
				</nav>


				<div class="tab-content" id="pills-tabContent">
				  <!--DATA PRIBADI-->
				  
				  <!--PEKERJAAN-->
				  
				  <!--ALAMAT-->
				  <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				  	
				  	<form action="<?= base_url(); ?>peoples/update_alamat" method="post" enctype="multipart/form-data">

				  	<input type="hidden" id="noregAlamat" name="noregAlamat" value="<?= $alldata['noreg']; ?>">

				  	<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
				    <div class="col-sm-10">
				      <input type="text" id="almt" name="almt" class="form-control" value="<?= $alldata['almt']; ?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">RT/RW</label>
				    <div class="col-sm-10">
				      <input type="text" id="rt_rw" name="rt_rw" class="form-control" value="<?= $alldata['rt_rw']; ?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Kelurahan</label>
				    <div class="col-sm-10">
				      <input type="text" id="kelurahan" name="kelurahan" class="form-control" value="<?= $alldata['kelurahan']; ?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Kecamatan</label>
				    <div class="col-sm-10">
				      <input type="text" id="kecamatan" name="kecamatan" class="form-control" value="<?= $alldata['kecamatan']; ?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Kota</label>
				    <div class="col-sm-10">
				      <input type="text" id="kota" name="kota" class="form-control" value="<?= $alldata['kota']; ?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Pos</label>
				    <div class="col-sm-10">
				      <input type="text" id="kodepos" name="kodepos" class="form-control" value="<?= $alldata['kodepos']; ?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telepon</label>
				    <div class="col-sm-10">
				      <input type="text" id="phone" name="phone" class="form-control" value="<?= $alldata['phone']; ?>" readonly>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Handphone</label>
				    <div class="col-sm-10">
				      <input type="text" id="hp" name="hp" class="form-control" value="<?= $alldata['telphp']; ?>" readonly required>
				    </div>
					</div>

					<table class="table">
					            <tr>
					              <th>
					               <?php  
					              		$kk = substr($alldata['scan_kk'], -3);
					              		if($kk == "pdf"):
					              	?>
					              	<br><br><br>
					              	<iframe src="<?= base_url('assets/img/kk/').$alldata['scan_kk'];  ?>" width="200%" height="300px">
    								</iframe>
					              	<?php else : ?>
					                <img class="img-thumbnail" src="<?php if($alldata['scan_kk']==''){
									 echo base_url('assets/img/kk/default.jpg');
								} else { echo base_url('assets/img/kk/').$alldata['scan_kk'];} ?>" width="200" height="100" data-toggle="modal" data-target="#fullimage">
									
									<?php endif; ?>
					              </th>
					              <td>
					                <div class="col-sm-9">
					                          <div class="custom-file">
					                            <input type="file" class="custom-file-input" id="image" name="image" <?php 
					                            if($alldata['scan_kk'] == ''){
					                            	echo "required";
					                            }
					                            ?>>
					                            <label class="custom-file-label" for="image">Choose file</label>
					                          </div>
					                          <label for="exampleFormControlFile1">Masukan Scan KK Maks. 2 Megabyte</label>
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

			                <img class="img-thumbnail" src="<?php if($alldata['scan_kk']==''){
									 echo base_url('assets/img/kk/default.jpg');
								} else { echo base_url('assets/img/kk/').$alldata['scan_kk'];} ?>"alt="Responsive image">
			                
			              </div>
			            </div>
			          </div>

					<button type="button" class="btn btn-warning" onclick="editAlamat()">Edit</button>
					<button type="button" class="btn btn-primary" onclick="batalAlamat()">Batal</button>
					<button type="submit" class="btn btn-danger" id="saveAlamat" onclick="konfirmasi()" disabled>Simpan Sementara</button>
					<script type="text/javascript">
						function editAlamat(){
							document.getElementById("almt").removeAttribute("readonly",0);
							document.getElementById("rt_rw").removeAttribute("readonly",0);
							document.getElementById("kelurahan").removeAttribute("readonly",0);
							document.getElementById("kecamatan").removeAttribute("readonly",0);
							document.getElementById("kota").removeAttribute("readonly",0);
							document.getElementById("kodepos").removeAttribute("readonly",0);
							document.getElementById("phone").removeAttribute("readonly",0);
							document.getElementById("hp").removeAttribute("readonly",0);
							document.getElementById("saveAlamat").removeAttribute("disabled",0);
						}
						function batalAlamat(){
							document.getElementById("almt").setAttribute("readonly",1);
							document.getElementById("rt_rw").setAttribute("readonly",1);
							document.getElementById("kelurahan").setAttribute("readonly",1);
							document.getElementById("kecamatan").setAttribute("readonly",1);
							document.getElementById("kota").setAttribute("readonly",1);
							document.getElementById("kodepos").setAttribute("readonly",1);
							document.getElementById("phone").setAttribute("readonly",1);
							document.getElementById("hp").setAttribute("readonly",1);
							document.getElementById("saveAlamat").setAttribute("disabled",1);
						}
						function konfirmasi() {
    						confirm('Anda Yakin?')
  						}
					</script>
					</form>
				  </div>
				
				<!--MANFAAT PENSIUN-->
				
			</div>
		</div>
	</div>
</div>

</div>
</div>



