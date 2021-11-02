
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
                        <div class="row">
                            <div class="col-6 col-sm-4"><a href="/evoting2/laporanpdf/dua"><button class="btn btn-info btn-sm" >Cetak data Sudah Memilih</button></a></div>
                            <div class="col-6 col-sm-4"> <a href="/evoting2/laporanpdf/tiga"><button class="btn btn-danger btn-sm" > Cetak data Belum Memilih   </button></a></div>
                        </div>
                        <!-- Button trigger modal -->
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                $query = $this->db->query('SELECT * FROM login WHERE level=2 ');
                                foreach ($query->result() as $log) {  ?>
                                    <tr>
                                        <td><?= $log->nis; ?></td>
                                        <td><?= $log->username; ?></td>
                                        <td>
                                            <?php if($log->status==1){?>
                                                <button class="btn btn-success" disabled>Sudah Memilih</button>
                                            <?php }else{?>
                                                <button class="btn btn-danger" disabled>Belum Memilih</button>
                                            <?php }?>

                                        </td>
                                        <td><?php echo anchor('admin/hapus/' . $log->id, '<div class="btn btn-danger btn-sm">Hapus</div>'); ?></td>

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

                   