<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">

            <center>
                <div class="card mt-2 mb-4 col-8">
                    <div class="card-body">


                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>

                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('surat/suratmasuk'); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group" style="text-align:justify;">
                                    <b><label>Tanggal Agenda</label></b>
                                    <input type="date" class="form-control ready" id="tgl_agenda" name="tgl_agenda" placeholder="Tanggal Agenda">
                                </div>
                                <div class="form-group" style="text-align:justify;">
                                    <b><label for="file">Pengirim</label></b>
                                    <input type="text" class="form-control" id="pengirim" name="pengirim" placeholder="Pengirim">
                                </div>
                                <div class="form-group" style="text-align:justify;">
                                    <b><label for="file">Nomor Surat</label></b>
                                    <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="Nomor Surat">
                                </div>
                                <div class="form-group" style="text-align:justify;">
                                    <b><label for="file">Tanggal Surat</label></b>
                                    <input type="date" class="form-control ready" id="tgl_surat" name="tgl_surat" placeholder="Tanggal Surat">
                                </div>
                                <div class="form-group" style="text-align:justify;">
                                    <b><label for="file">Nomor Agenda</label></b>
                                    <input type="text" class="form-control" id="no_agenda" name="no_agenda" placeholder="Nomor Agenda">
                                </div>
                                <div class="form-group" style="text-align:justify;">
                                    <b><label for="file">Perihal</label></b>
                                    <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal">
                                </div>
                                <!-- Button Check Box -->
                                <div class="form-group" style="text-align:justify;">
                                    <b><label for="file">Tujuan</label></b>
                                    <!-- <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan"> -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dirut" value="Direktur Utama," id="dirut">
                                        <label class="form-check-label" for="file">
                                            1. Direktur Utama
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="direktur" value="Direktur," id="direktur">
                                        <label class="form-check-label" for="file">
                                            2. Direktur
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="menku" value="Manager Keuangan," id="menku">
                                        <label class="form-check-label" for="file">
                                            3. Manager Keuangan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="menkep" value="Manager Kepesertaan," id="menkep">
                                        <label class="form-check-label" for="file">
                                            4. Manager Keepesertaan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="menum" value="Manager SDM Umum & TI" id="menum">
                                        <label class="form-check-label" for="file">
                                            5. Manager SDM Umum & TI
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" style="text-align:justify;">
                                    <b><label for="file">Isi Disposisi</label></b>
                                    <input type="text" class="form-control" id="status" name="status" placeholder="Isi Disposisi">
                                </div>
                                <div class="form-group" style="text-align:justify;">
                                    <b><label label for="file">Status</label></b>
                                    <input type="text" class="form-control" id="salur" name="salur" placeholder="Status">
                                </div>
                                <div class="form-group" style="text-align:justify;">
                                    <b><label for="file">Cari Surat</label></b>
                                    <input type="file" class="form-control-file" id="berkas" name="berkas" accept=".pdf">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                <button type="submit" class="btn btn-primary">Tambah Surat Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSuratModal">Tambah Surat Masuk</a> -->
                <div class="card mt-2 col-12">

                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Surat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="<?= base_url('surat/suratmasuk'); ?>" class="btn btn-primary mb-4">Tambah Surat Masuk</a>
                                <a href="<?= base_url('surat/excel5'); ?>" class="btn btn-success mb-4">Export per Sheet Spout Excel</a>

                                <table class="table table-bordered" id="dataTableUser" width="100%" cellspacing="0">
                                    <thead style="text-align:center">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tanggal Agenda</th>
                                            <th scope="col">Pengirim</th>
                                            <th scope="col">Nomor Surat</th>
                                            <th scope="col">Tanggal Surat</th>
                                            <th scope="col">Nomor Agenda</th>
                                            <th scope="col">Perihal</th>
                                            <th scope="col">Tujuan</th>
                                            <th scope="col">Isi Disposisi</th>
                                            <th scope="col">Di Salurkan</th>
                                            <th scope="col">Berkas</th>
                                            <th scope="col">Lama Surat</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($allSurat as $as) : ?>
                                            <tr>
                                                <th scope="row"><?= ++$start; ?></th>
                                                <td style="word-wrap: break-word"><?= $as['tgl_agenda']; ?></td>
                                                <td style="word-wrap: break-word"><?= $as['pengirim']; ?></td>
                                                <td style="word-wrap: break-word"><?= $as['no_surat']; ?></td>
                                                <td style="word-wrap: break-word"><?= $as['tgl_surat']; ?></td>
                                                <td style="word-wrap: break-word"><?= $as['no_agenda']; ?></td>
                                                <td style="word-wrap: break-word"><?= $as['perihal']; ?></td>
                                                <td style="word-wrap: break-word"><?= $as['tujuan']; ?></td>
                                                <td style="word-wrap: break-word"><?= $as['disposisi']; ?></td>
                                                <td style="word-wrap: break-word"><?= $as['salur']; ?></td>
                                                <td style="word-wrap: break-word">
                                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal<?= $i ?>">
                                                        <?= $as['berkas']; ?>
                                                    </button>
                                                </td>
                                                <td>
                                                    <?php
                                                    $now = new DateTime();
                                                    $msk = new DateTime($as['tgl_agenda']);
                                                    $int = date_diff($msk, $now)->days;
                                                    echo $int;
                                                    echo " hari";
                                                    ?>
                                                </td>

                                                <td style="text-align: center;">
                                                    <input class="surat" id="surat" type="checkbox" <?= surat($as['id'], $as['status']); ?> data-id="<?= $as['id']; ?>" data-status="<?= $as['status']; ?>">
                                                </td>

                                                <td style="word-wrap: break-word">
                                                    <a href="<?= base_url(); ?>surat/editsurat/<?= $as['id']; ?>" class="badge badge-warning">Edit</a>
                                                    <!-- <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editModal">Edit</button> -->
                                                    <!-- <a href="" class="badge badge-danger">delet</a> -->
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="exampleModal<?= $i ?>">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><?= $as['berkas']; ?></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php
                                                            $a11 = $as['berkas'];
                                                            // var_dump($a11);
                                                            ?>
                                                            <iframe src="<?php echo base_url('assets/berkas/') . $a11; ?>" frameborder="0" width="100%" height="700px"></iframe>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
        </center>



    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Edit Modal -->
<!-- <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="newEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSuratlLabel">Edit Surat Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user/surat'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="date" class="form-control ready" id="tgl_agenda" name="tgl_agenda" placeholder="Tanggal Agenda" value="<?= $as['tgl_agenda']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pengirim" name="pengirim" placeholder="Pengirim">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="Nomor Surat">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control ready" id="tgl_surat" name="tgl_surat" placeholder="Tanggal Surat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="no_agenda" name="no_agenda" placeholder="Nomor Agenda">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="status" name="status" placeholder="Status">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="salur" name="salur" placeholder="Salur">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="berkas" name="berkas" accept=".pdf">
                        <label for="file">Cari Surat</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Surat Masuk</button> -->