<div class="container">
    <h3 class="mt-3">DAFTAR PENSIUNAN</h3>



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <a href="<?= base_url('datul/export'); ?>" class="btn btn-success">Export Data Excel</a>
                <br><br>

                <table class="table table-bordered" id="dataTableUser" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomor Pensiun</th>
                            <th>Nama Peserta</th>
                            <th>Aksi</th>
                            <th style="text-align: center;">Update Simadu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($peoples)) : ?>
                            <tr>
                                <td colspan="4">
                                    <div class="alert alert-danger" role="alert">
                                        DATA TIDAK DITEMUKAN!
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php foreach ($peoples as $ppl) : ?>
                            <tr>
                                <?php $npk = $ppl['nopen'];  ?>
                                <th><?= ++$start; ?></th>
                                <td><?= $ppl['nopen']; ?></td>
                                <td><?= $ppl['nama']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>datul/detail/<?= $ppl['npk']; ?>" class="badge badge-warning">detail</a>
                                </td>
                                <td style="text-align: center;">
                                    <input class="simadu" id="simadu" type="checkbox" <?= simadu($ppl['nopen'], $datul['simadu']); ?> data-nopen="<?= $ppl['npk']; ?>" data-simadu="<?= $datul['simadu']; ?>">
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