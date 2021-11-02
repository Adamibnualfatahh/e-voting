

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1>Edit Nis</h1>
                <?php echo form_open_multipart('nis/update');?>
                <input type="hidden" name="id" value="<?php echo $row->id ?>">
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" name="nis"class="form-control"value="<?php echo $row->nis ?> ">
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>    
                    
                </div>


                  