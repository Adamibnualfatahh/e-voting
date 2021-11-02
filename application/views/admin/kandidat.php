                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $title  ?></h1>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Visi & Misi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody class="position-relative">
                                <?php
                                $no = 0;
                                $query = $this->db->query('SELECT * FROM kandidat');
                                foreach ($query->result() as $log) {
                                    $no = $no + 1;
                                ?>
                                    <tr>
                                       
                                        <td><?= $no; ?></td>
                                        <td><?= $log->nama_calon; ?></td>
                                        <td><?= $log->visi_misi; ?></td>
                                        <td><img src="<?php echo base_url('assets/img/' . $log->foto );?>" class="mb-3" style="max-width: 200px;max-height: 200px;"></td>
                                        <td><?php echo anchor('kandidat/edit/' . $log->id, '<div class="btn btn-primary btn-sm">Edit</div>'); ?></td>

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
                                    <a class="btn btn-primary" href="<?php echo base_url('login1/logout') ?>">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>


                