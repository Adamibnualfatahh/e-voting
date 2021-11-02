
                <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + DATA SISWA
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan NIS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="<?= site_url('nis/tambah')?>"method="post">
                <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" name="nis"class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<h5>Total Nis Yang Sudah Dibuat <button class="btn btn-info btn-sm disabled"><?php echo $total_nis ?></button></h5>
<div class="row">
    <table class="table table-striped" id="example">
        <thead>
            <th>#</th>
            <th>NIS TERDAFTAR</th>
            <th>AKSI</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($rows as $row) {  ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nis; ?></td>
                    <td><?php echo anchor('nis/hapus/' . $row->id, '<div class="btn btn-danger btn-sm">Hapus</div>'); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('login1/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

