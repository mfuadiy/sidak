<div class="container-fluid">
	<div class="card mt-2 col-12">

		<div class="row mt-4">
			<div class="">


				<div class="col">
					<center>
						<h2>Daftar User</h2>
					</center>
				</div>
			</div>
		</div>

		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data User</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">

					<table class="table table-bordered" id="dataTableUser" width="100%" cellspacing="0">
						<thead>
							<tr>
								<td>#</td>
								<td>Nama</td>
								<td>NPK</td>
								<td>Email</td>
								<td>Role</td>
								<td>Status</td>
								<td style="text-align: center;">Aksi</td>
							</tr>
						</thead>


						<tbody>
							<?php $i = 1;
							foreach ($list_user as $ls) : ?>
								<tr>
									<td><?= $i++; ?></td>
									<td><?= $ls['name']; ?></td>
									<td><?= $ls['npk']; ?></td>
									<td><?= $ls['email']; ?></td>
									<td><?php

										switch ($ls['role_id']) {
											case '1':
												echo "Admin";
												break;
											case '2':
												echo "Pegawai";
												break;
											case '3':
												echo "Peserta Aktif";
												break;
											case '4':
												echo "Pensiunan";
												break;
										}

										?></td>
									<td><?php

										if ($ls['is_active'] == '1') {
											echo "Active";
										} else {
											echo "Non-Active";
										} ?>

									</td>
									<td style="text-align: center;">
										<a href="<?= base_url(); ?>admin/edituser/<?= $ls['id']; ?>" class="badge badge-warning">edit</a>
										<a href="#" class="badge badge-danger">hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>

					</table>


				</div>
			</div>
		</div>
	</div>
</div>
</div>