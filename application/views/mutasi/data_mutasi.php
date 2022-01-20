<div class="container">
<div class="row mt-3">
	<div class="col-md-12">

		<div class="card">
			<div class="card-header">
				 <a href="<?= base_url(); ?>peoples" class="fas fa-arrow-circle-left"></a> Mutasi
			</div>
			<div class="card-body">

				<table class="table" >
				<tr>

					<td width="30%">

						<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-8 col-form-label">Masa Bekerja</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" value="<?= $alldata['nama_pes']; ?>" readonly>
					    </div>
						</div>

						<div class="form-group row">
						    <label for="inputEmail3" class="col-sm-8 col-form-label">MP Berkala</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" value="<?= $alldata['noreg']; ?>" readonly>
						    </div>
						</div>

						<div class="form-group row">
						    <label for="inputEmail3" class="col-sm-8 col-form-label">MP 20%</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" value="<?= $alldata['nopes']; ?>" readonly>
						    </div>
						</div>

						<div class="form-group row">
						    <label for="inputEmail3" class="col-sm-8 col-form-label">MP 100%</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" value="<?= $alldata['st_peg']; ?>" readonly>
						    </div>
						</div>

					</td>

					<th>
						<center>
						<img class="img-thumbnail" src="<?= base_url('assets/img/profile/').$alldata['img']; ?>" width="200" height="100">
						<br>

						<!-- <a href="<?= base_url(); ?>/peoples" class="btn btn-success mt-3">kembali</a>
						<a href="<?= base_url(); ?>peoples/preview/<?= $alldata['noreg']; ?>" class="btn btn-primary mt-3">Preview</a>
						<a href="<?= base_url(); ?>peoples/riwayat/<?= $alldata['noreg']; ?>" class="btn btn-warning mt-3">Riwayat</a> -->
					</th>

					<td style="text-align: right;" width="30%">

					<div class="form-group row" style="position: static; right: 0;">
					    <label for="inputEmail3" class="col-sm-8 col-form-label">Usia</label>
					    <div class="col-sm-8">
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

					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-8 col-form-label">Masa Bekerja</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" value="<?= $alldata['nama_pes']; ?>" readonly>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-8 col-form-label">MP Berkala</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" value="<?= $alldata['noreg']; ?>" readonly>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-8 col-form-label">MP 20%</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" value="<?= $alldata['nopes']; ?>" readonly>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-8 col-form-label">MP 100%</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" value="<?= $alldata['st_peg']; ?>" readonly>
					    </div>
					</div>

				

					</td>

				</tr>
				</table>

				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
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
			    		<a class="nav-link" id="pills-bank-tab" data-toggle="pill" href="#pills-bank" role="tab" aria-controls="pills-bank" aria-selected="false">Informasi Bank</a>
			  		</li>
				</ul>


				<div class="tab-content" id="pills-tabContent">
				  <!--DATA PRIBADI-->
				  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

				  	<form action="<?= base_url(); ?>peoples/update_datapribadi" method="post" enctype="multipart/form-data">

				  	<input type="hidden" id="noregDataPribadi" name="noregDataPribadi" value="<?= $alldata['noreg']; ?>">

				  	<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
				    <div class="col-sm-10">
				      <input type="text" id="nama" name="nama" class="form-control" value="<?= $alldata['nama_pes'];?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				    <div class="col-sm-10">

				      <!-- <input type="text" id="jk" name="jk" class="form-control" value="<?= $alldata['jk']; ?>" readonly> -->

				      <select id="jk" name="jk" class="form-control" readonly>
				      <?php foreach ($jk as $j) : ?>
				        <option value="<?= $j['id']; ?>" <?php if($alldata['jk'] == $j['id']){ echo "selected";} ?>>
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
				        <option value="<?= $ag['id']; ?>" <?php if($alldata['agama'] == $ag['id']){ echo "selected";} ?>>
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
					              		if($kk == "pdf"):
					              	?>
					              	<br><br><br>
					              	<iframe src="<?= base_url('assets/img/ktp/').$alldata['scan_ktp'];  ?>" width="200%" height="300px">
    								</iframe>
					              	<?php else : ?>
								<img class="img-thumbnail" src="<?php if($alldata['scan_ktp']==''){
									 echo base_url('assets/img/ktp/default.jpg');
								} else { echo base_url('assets/img/ktp/').$alldata['scan_ktp'];} ?>" width="200" height="100" data-toggle="modal" data-target="#fullimage">
								<?php endif; ?>
							</th>
							<td>
								<div class="col-sm-9">
					                <div class="custom-file">
					                  <input type="file" class="custom-file-input" id="image" name="image" value="<?= $alldata['scan_ktp']; ?>" <?php 
					                            if($alldata['scan_ktp'] == ''){
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

					      
					       		<img class="img-thumbnail" src="<?php if($alldata['scan_ktp']==''){
									 echo base_url('assets/img/ktp/default.jpg');
								} else { echo base_url('assets/img/ktp/').$alldata['scan_ktp'];} ?>"alt="Responsive image">
					   
					      
					    </div>
					  </div>
					</div>
					

					<!-- <button type="button" class="btn btn-warning" onclick="editProfile()">Edit</button>
					<button type="button" class="btn btn-primary" onclick="batalEditProfile()">Batal</button>
					<button type="submit" class="btn btn-danger" id="saveDataPribadi" onclick="konfirmasi()" disabled>Simpan Sementara</button>
					<script type="text/javascript">
						function editProfile(){
							document.getElementById("nama").removeAttribute("readonly",0);
							document.getElementById("jk").removeAttribute("readonly",0);
							document.getElementById("tp_lhr").removeAttribute("readonly",0);
							document.getElementById("tgl_lhr").removeAttribute("readonly",0);
							document.getElementById("nik").removeAttribute("readonly",0);
							document.getElementById("npwp").removeAttribute("readonly",0);
							document.getElementById("agama").removeAttribute("readonly",0);
							document.getElementById("saveDataPribadi").removeAttribute("disabled",0);
						}
						function batalEditProfile(){
							document.getElementById("nama").setAttribute("readonly",1);
							document.getElementById("jk").setAttribute("readonly",1);
							document.getElementById("tp_lhr").setAttribute("readonly",1);
							document.getElementById("tgl_lhr").setAttribute("readonly",1);
							document.getElementById("nik").setAttribute("readonly",1);
							document.getElementById("npwp").setAttribute("readonly",1);
							document.getElementById("agama").setAttribute("readonly",1);
							document.getElementById("saveDataPribadi").setAttribute("disabled",1);
						}
						
						function konfirmasi() {
    						confirm('Anda Yakin?')
  						}
					</script> -->
					</form>
				  </div>
				  <!--PEKERJAAN-->
				  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

				  	<form action="<?= base_url(); ?>peoples/update_pekerjaan" method="post" enctype="multipart/form-data">

				  	<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
				    <div class="col-sm-10">
				      <input type="text" id="st_peg" name="st_peg" class="form-control" value="<?= $alldata['st_peg']; ?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Cabang</label>
				    <div class="col-sm-10">

				      <!-- <input type="text" id="jk" name="jk" class="form-control" value="<?= $alldata['jk']; ?>" readonly> -->

				      <select id="cabang" name="cabang" class="form-control" readonly>
				      <?php foreach ($cabang as $cab) : ?>
				        <option value="<?= $cab['cab']; ?>" <?php if($alldata['cab'] == $cab['cab']){ echo "selected";} ?>>
				          <?= $cab['nama_cab']; ?>
				        </option>
				      <?php endforeach; ?>
				      </select>

				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">NPK</label>
				    <div class="col-sm-10">
				      <input type="text" id="noreg" name="noreg" class="form-control" value="<?= $alldata['noreg']; ?>" readonly>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Masuk</label>
				    <div class="col-sm-10">
				      <input type="date" id="tgl_mb" name="tgl_mb" class="form-control" value="<?= $alldata['tgl_mb']; ?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Golongan</label>
				    <div class="col-sm-10">
				      <input type="text" id="golongan" name="golongan" class="form-control" value="<?= $alldata['golongan']; ?>" readonly required> 
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Gaji Pokok</label>
				    <div class="col-sm-10">
				      <input type="text" id="phdp" name="phdp" class="form-control" value="<?= $alldata['phdp']; ?>" readonly required>
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">SK Terakhir Kenaikan Gaji Pokok/Golongan</label>
				    <div class="col-sm-10">
				      <input type="text" id="nskst" name="nskst" class="form-control" value="<?= $alldata['nskst']; ?>" readonly required>
				    </div>
					</div>

					
					<table class="table">
						<tr>
							<th>
								<?php  
					              		$kk = substr($alldata['scan_sk'], -3);
					              		if($kk == "pdf"):
					              	?>
					              	<br><br><br>
					              	<iframe src="<?= base_url('assets/img/sk/').$alldata['scan_sk'];  ?>" width="200%" height="300px">
    								</iframe>
					              	<?php else : ?>
								<img class="img-thumbnail" src="<?php if($alldata['scan_sk']==''){
									 echo base_url('assets/img/sk/default.jpg');
								} else { echo base_url('assets/img/sk/').$alldata['scan_sk'];} ?>" width="200" height="100" data-toggle="modal" data-target="#fullimage1">
								<?php endif; ?>
							</th>
							<td>
								<div class="col-sm-9">
					                <div class="custom-file">
					                  <input type="file" class="custom-file-input" id="image" name="image" <?php 
					                            if($alldata['scan_sk'] == ''){
					                            	echo "required";
					                            }
					                            ?>>
					                  <label class="custom-file-label" for="image">Choose file</label>
					                </div>
					                <label for="exampleFormControlFile1">Masukan Scan SK Maks. 2 Megabyte</label>
					            </div>
							</td>
						</tr>	
					</table>

					<!-- Modal -->
					<div class="modal fade" id="fullimage1" style=" background-color: rgba(0,0,0,.0001) !important;">
					  <div class="modal-dialog modal-dialog-centered">
					    <div class="modal-content" style=" background-color: rgba(0,0,0,.0001) !important;">
					      <!-- <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div> -->

					      
					       		<img class="img-thumbnail" src="<?php if($alldata['scan_sk']==''){
									 echo base_url('assets/img/sk/default.jpg');
								} else { echo base_url('assets/img/sk/').$alldata['scan_sk'];} ?>"alt="Responsive image">
					   
					      
					    </div>
					  </div>
					</div>
				

					<!-- <button type="button" class="btn btn-warning" onclick="editPekerjaan()">Edit</button>
					<button type="button" class="btn btn-primary" onclick="batalPekerjaan()">Batal</button>
					<button type="submit" class="btn btn-danger" id="savePekerjaan" href="#pills-profile" onclick="konfirmasi()" disabled>Simpan Sementara</button>
					<script type="text/javascript">
						function editPekerjaan(){
							document.getElementById("st_peg").removeAttribute("readonly",0);
							document.getElementById("tgl_mb").removeAttribute("readonly",0);
							document.getElementById("golongan").removeAttribute("readonly",0);
							document.getElementById("phdp").removeAttribute("readonly",0);
							document.getElementById("nskst").removeAttribute("readonly",0);
							document.getElementById("cabang").removeAttribute("readonly",0);
							document.getElementById("savePekerjaan").removeAttribute("disabled",0);
						}
						function batalPekerjaan(){
							document.getElementById("st_peg").setAttribute("readonly",1);
							document.getElementById("tgl_mb").setAttribute("readonly",1);
							document.getElementById("golongan").setAttribute("readonly",1);
							document.getElementById("phdp").setAttribute("readonly",1);
							document.getElementById("nskst").setAttribute("readonly",1);
							document.getElementById("cabang").setAttribute("readonly",1);
							document.getElementById("savePekerjaan").setAttribute("disabled",1);
						}
						function konfirmasi() {
    						confirm('Anda Yakin?')
  						}
					</script> -->
					</form>

				  </div>
				  <!--ALAMAT-->
				  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				  	
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
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Provinsi</label>
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
								} else { echo base_url('assets/img/kk/').$alldata['scan_kk'];} ?>" width="200" height="100" data-toggle="modal" data-target="#fullimage2">
									
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
					                            <label class="custom-file-label" for="image" >Choose file</label>
					                          </div>
					                          <label for="exampleFormControlFile1">Masukan Scan KK Maks. 2 Megabyte</label>
					                </div>
					              </td>
					            </tr> 
					</table>

					<!-- Modal -->
					<div class="modal fade" id="fullimage2" style=" background-color: rgba(0,0,0,.0001) !important;">
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

					<!-- <button type="button" class="btn btn-warning" onclick="editAlamat()">Edit</button>
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
							document.getElementById("hp").removeAttribute("readonly",0)
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
							document.getElementById("hp").setAttribute("readonly",1)
							document.getElementById("saveAlamat").setAttribute("disabled",1);
						}
						function konfirmasi() {
    						confirm('Anda Yakin?')
  						}
					</script> -->
					</form>
				  </div>
				<!--DATA KELUARGA-->
				<div class="tab-pane fade" id="pills-keluarga" role="tabpanel" aria-labelledby="pills-keluarga-tab">
					<a href="<?= base_url(); ?>peoples/tambah_ahliwaris/<?= $alldata['noreg'] ?>" class="btn btn-success mt-3 mb-3">
				  		<i class="fa fa-plus-square" aria-hidden="true"></i>
				  		Tambah Ahli Waris
				  	</a>
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
				<div class="tab-pane fade" id="pills-bank" role="tabpanel" aria-labelledby="pills-bank-tab">

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Perkiraan Pensiun</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" value="<?php
							    	$lhr 	= $peoples['tgl_lhr'];
							    	$pensiun= date('Y-m-d', strtotime('+57 year +1 month', strtotime($lhr)));
							    	echo date("01-m-Y", strtotime($pensiun));
							    	?>" >
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Perkiraan Masa Bekerja</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" value="<?php
							    	$pensN		= new DateTime($pensiun);
							    	$mbk		= new DateTime($peoples['tgl_mlai_krj']);
							    	$intervalkrj	= date_diff($mbk, $pensN);
							    	$lamakerja	= $intervalkrj->y + round((($intervalkrj->m+1)/12),2);
							    	//var_dump($lamakerja);
							    	echo $intervalkrj->y.' tahun ';
							    	echo $intervalkrj->m.' bulan ';
							    	//echo $intervalkrj->d.' hari.';
							    	?>" >
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">PhDP</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" value="<?php 

								    function rupiah($angka){
						
										$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
										return $hasil_rupiah;
									 	
									}
									$hasil = $peoples['phdp'];
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
				     				?>" >
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Kode Bayar<br>
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php echo rupiah($mpber);?>" >
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">No. RC Bank
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php echo rupiah($mpsek); ?>" >
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Atas Nama
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php echo rupiah($mpsek20); ?>" >
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Bank
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php echo rupiah($mpber80); ?>" >
				    </div>
					</div>

					<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-4 col-form-label">Alamat Bank
				    </label>
				    <div class="col-sm-8">
				    <input type="text" class="form-control" value="<?php echo rupiah($mpber80); ?>" >
				    </div>
					</div>

				</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>



