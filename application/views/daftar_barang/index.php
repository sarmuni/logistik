<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="col-12">
    <div class="card mb-3">
        <div class="card-header">
            <h3><i class="fas fa-user-friends"></i> <?php echo $title; ?></h3>
        </div>

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <div class="flash-data-required" data-flashdata="<?= $this->session->flashdata('required'); ?>"></div>

        <div class="card-body">
            <a role="button" href="#" class="btn bg-danger" title="Tambah Data Daftar Barang" data-toggle="modal" data-target=".tambah_daftar_barang">
                <i class="fas fa-user-plus"></i>
            </a>

            <a role="button" href="#" class="btn bg-danger" title="Cetak Data Daftar Barang">
                <i class="fas fa-print"></i>
            </a>
            <a role="button" href="<?php base_url('daftar_barang'); ?>" class="btn bg-danger" title="Refresh data daftar barang">
                <i class="fas fa-sync-alt"></i>
            </a>
            <hr>
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($daftar_barang as $row) {
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['nama_barang']; ?></td>
                            <td><?php echo $row['keterangan']; ?></td>
                            <td><?php if ($row['status'] == 0) { ?>
                                    <center><a role="button" href="<?php echo site_url(); ?>daftar_barang/publish/<?php echo $row['id']; ?>" id="publish" class="btn bg-danger publish" title="Aktif">
                                            <i class="fas fa-eye"></i>
                                        </a></center>
                                <?php } else { ?>
                                    <center><a role="button" href="<?php echo site_url(); ?>daftar_barang/unpublish/<?php echo $row['id']; ?>" id="unpublish" class="btn bg-danger unpublish" title="Non Aktif">
                                            <i class="fas fa-eye-slash"></i>
                                        </a></center>
                                <?php } ?>

                            </td>
                            <td>
                                <a role="button" href="#" class="btn bg-danger" title="Edit data daftar barang" data-toggle="modal" data-target="#edit_daftar_barang<?php echo $row['id']; ?>">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                                <?php if ($row['status'] == 1) { ?>
                                    <a role="button" href="<?php echo site_url(); ?>daftar_barang/delete/<?php echo $row['id']; ?>" id="hapus" class="btn bg-danger tombol-hapus" title="Hapus Data daftar_barang">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                <?php } ?>
                                <a role="button" href="<?php echo site_url(); ?>daftar_barang/barang_detail/<?php echo $row['id']; ?>" class="btn bg-info" title="Input Detail">
                                    <i class="fas fa-folder-plus"></i>
                                </a>

                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>

                </table>
            </div>

        </div>
    </div>
</div>

<!-- Modal Add -->
<div class="modal fade tambah_daftar_barang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Add Daftar Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="far fa-check-square"></i> <?php echo $title; ?></h3>
                    </div>

                    <div class="card-body">

                        <form autocomplete="off" action="<?php echo base_url('daftar_barang/add'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?= set_value('nama_barang'); ?>">
                                    <?= form_error('keterangan', '<p style="color:red; font-size:12px;">', '</p>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= set_value('keterangan'); ?>">
                                    <?= form_error('keterangan', '<p style="color:red; font-size:12px;">', '</p>'); ?>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn bg-danger">Save</button>
                <button type="button" class="btn bg-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Add -->


<!-- Modal Edit -->
<?php
foreach ($daftar_barang as $i) :
    $id = $i['id'];
    $nama_barang = $i['nama_barang'];
    $keterangan = $i['keterangan'];
    $status = $i['status'];
?>
    <?php if ($status == 1) {
        $publish = "readonly";
    } else {
        $publish = "";
    } ?>
    <div class="modal fade edit_daftar_barang" id="edit_daftar_barang<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Edit Daftar Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-check-square"></i> <?php echo $title; ?></h3>
                        </div>

                        <div class="card-body">

                            <form autocomplete="off" action="<?php echo base_url('daftar_barang/edit/' . $id); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="text" name="nama_barang" <?php echo $publish; ?> value="<?php echo $nama_barang; ?>" class="form-control" id="nama_barang">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" name="keterangan" <?php echo $publish; ?> value="<?php echo $keterangan; ?>" class="form-control" id="keterangan">
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <?php if ($publish == false) { ?>
                        <button type="submit" class="btn bg-danger">Update</button>
                    <?php } ?>
                    <button type="button" class="btn bg-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
<!-- End Modal Edit -->



<!-- Modal View -->
<?php
foreach ($daftar_barang as $i) :
    $id = $i['id'];
    $nama_barang = $i['nama_barang'];
    $keterangan = $i['keterangan'];
    $status = $i['status'];
?>
    <?php if ($status == 0) {
        $publish = "readonly";
    } else {
        $publish = "readonly";
    } ?>
    <div class="modal fade view_daftar_barang" id="view_daftar_barang<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">View Data Daftar Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-check-square"></i> <?php echo $title; ?></h3>
                        </div>

                        <div class="card-body">

                            <form autocomplete="off" action="<?php echo base_url('daftar_barang/edit/' . $id); ?>" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="text" name="nama_barang" <?php echo $publish; ?> value="<?php echo $nama_barang; ?>" class="form-control" id="nama_barang">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" name="keterangan" <?php echo $publish; ?> value="<?php echo $keterangan; ?>" class="form-control" id="keterangan">
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <?php if ($publish == false) { ?>
                        <button type="submit" class="btn bg-danger">Update</button>
                    <?php } ?>
                    <button type="button" class="btn bg-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
<!-- End Modal View -->