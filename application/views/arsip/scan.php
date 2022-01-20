<!-- <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/instascan.min.js"></script>


<div class="container">
	<h3 class="mt-3" style="text-align:center;">Scan Barcode</h3>
	 <input type="text" id="scan" name="scan" class="form-control" readonly>
</div>

<div class="container">
<video id="preview" width="500" height="500"></video>
</div>

</div>
 -->

<!-- <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script> -->
<?php
$nama = '';
if (isset($_POST['pilih'])) {
	$ci = get_instance();

	$f = $ci->db->get_where('dbpam_pa', ['noreg' => @$_POST['npk']])->row_array();

	if ($f->num_rows > 0) {
		$nama = $f['nama_pes'];
	} else {
		$nama = "Tidak Tersedia";
	}
}
?>
<div class="container">
	<script src="<?= base_url('assets/'); ?>js/qrcode-master/dist/html5-qrcode.min.js"></script>
	<center>


		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data User</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<div style="width: 400px" id="reader"></div>
					<table class="table	" style="width: 30%;">
						<tr>
							<th>NPK</th>
							<td>
								<form method="post" action="">
									<input type="text" id="npk" name="npk" class="form-control" readonly>
									<button type="submit" class="btn btn-success mt-2 mb-4" id="pilih" name="pilih" disabled>Pilih</button>
								</form>
							</td>
						</tr>

						<tr>
							<th>Nama</th>
							<td><input type="text" id="nama" name="nama" class="form-control" value="<?= $nama; ?>" readonly></td>
						</tr>
					</table>



				</div>
			</div>
		</div>

	</center>
</div>
</div>