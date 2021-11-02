

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <?php echo form_open_multipart('kandidat/update');?>
                <input type="hidden" name="id" value="<?php echo $row->id ?>">
                <img src="<?php echo base_url('assets/img/' . $row->foto );?>" class="mb-3" style="max-width: 200px;">
                    <div class="mb-3">
                        <label for="nama_kandidat" class="form-label">Nama Kandidat</label>
                        <input type="text" name="nama_kandidat"class="form-control"value="<?php echo $row->nama_kandidat ?> " readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama_calon" class="form-label">Nama Calon</label>
                        <input type="text" name="nama_calon" class="form-control" id="exampleInputPassword1" value="<?php echo $row->nama_calon ?>">
                    </div>
                    <div class="mb-3">
                        <label for="visi_misi" class="form-label">Visi Misi</label>
                        <textarea name="visi_misi" id="visi_misi" class="form form-control ckeditor">
                        <?php echo $row->visi_misi ?>
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Gambar</label>
                        <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                    </div>
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
                </form>    
                    
                </div>


                  