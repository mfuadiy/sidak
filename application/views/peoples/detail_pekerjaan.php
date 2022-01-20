<div class="container">
<div class="row mt-3">
	<div class="col-md-12">

		<div class="card">
			<div class="card-header">
				   <a href="<?= base_url(); ?>peoples" class="fas fa-arrow-circle-left"></a>  Pekerjaan
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
				  <a class="nav-link active" href="#">Pekerjaan</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_alamat/<?= $alldata['noreg']; ?>">Alamat</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_keluarga/<?= $alldata['noreg']; ?>">Data Keluarga</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/preview/<?= $alldata['noreg']; ?>">Simpan Semua Data</a>

				  <a class="nav-link" href="<?= base_url(); ?>peoples/detail_simulasi/<?= $alldata['noreg']; ?>">Simulasi Pensiun</a>
				  <a class="nav-link" href="<?= base_url(); ?>peoples/riwayat/<?= $alldata['noreg']; ?>">Riwayat Perubahan</a>
				</nav>


				<div class="tab-content" id="pills-tabContent">
				  <!--DATA PRIBADI-->
				  
				  <!--PEKERJAAN-->
				  <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

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
								} else { echo base_url('assets/img/sk/').$alldata['scan_sk'];} ?>" width="200" height="100" data-toggle="modal" data-target="#fullimage">
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
					<div class="modal fade" id="fullimage" style=" background-color: rgba(0,0,0,.0001) !important;">
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
				

					<button type="button" class="btn btn-warning" onclick="editPekerjaan()">Edit</button>
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
					</script>
					</form>

				  </div>
				  <!--ALAMAT-->
				  
				<!--DATA KELUARGA-->
				
				<!--MANFAAT PENSIUN-->
				
			</div>
		</div>
	</div>
</div>

</div>
</div>



