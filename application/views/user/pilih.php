

  <div class="header-3-2 container-xxl mx-auto p-0 position-relative">
    <nav class="navbar navbar-expand-lg navbar-light">

      <!-- <img style="margin-right: 0.75rem"
               src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-5.png"
               alt="" /> -->
      <a href="/view/index.html" style="text-decoration: none;">
        <h3 style="margin-right: 0.75rem; color: #FF7468;font-weight: bold;">E-PILKETOS</h3>
      </a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
          <li class="nav-item active position-relative">
            <a class="nav-link main=" style="color: #243142;" href="#">Halaman Pilihan</a>
          </li>
        </ul>
      </div>
      <div>
        <a href="<?php echo base_url('login1/logout') ?>" class="btn btn-fill text-white">Logout</a>
      </div>
    </nav>

    <div>
      <div class="mx-auto flex-lg-row flex-column hero">
        <!-- Column kiri -->
        <div class="left-column d-flex flex-column  text-lg-start  text-center">
          <h1 class="title-text-big">
            E-PILKETOS
          </h1>
          <h3><span style="color: #FF7468">BEBAS, RAHASIA, JUJUR, DAN ADIL</span></h3>
          <p class="text-caption">
            Memilihlah dengan rasa tanggung jawab
          </p>
        </div>
      </div>
    </div>
    <div class="container-sm mx-auto mb-5">
      <section class="h-100 w-100 " style="box-sizing: border-box; background-color: #fff; ">
        <div class="row md-auto ">
          <?php
        
        $kandidat = $this->db->query('SELECT * FROM kandidat');
        foreach ($kandidat->result() as $knd) {
        ?> 
          <div class="col-sm-4 mb-2">
            <div class="card">
              <img src="<?php echo base_url('assets/img/'.$knd->foto)?>" class="card-img-top" height="250">
              <div class="card-body bg-dark text-light">
                <hr>
              <h5 class="card-title mb-4 text-center"><?= $knd->nama_kandidat; ?></h5>
              <hr>
                <h5 class="card-title mb-4 text-center"><?= $knd->nama_calon; ?></h5>
 
                <div class="accordion accordion-flush text-dark" id="accordionFlushExample">
                  <div class="accordion-item ">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <div class="text-center bg-dark">
                    <button class="btn btn-secondary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                       Visi Dan Misi
                    </button>
                    </div>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body"><?= $knd->visi_misi; ?></div> 
                    </div>
                  </div>
                </div>
                <p class="card-text"></p>
                <div class="d-grid gap-2 col-6 mx-auto">
                <?php if ($user->status==0) : ?>
                  <a href="<?php echo base_url('selesai/simpan/'), $knd->id;?>" class="btn btn-light">PILIH </a>
                    <?php else : ?>
                      <a href="" class="btn btn-sm text-danger" >ANDA SUDAH MEMILIH</a>
                    <?php endif ?>
                 
                </div>
              </div>
            </div>
            </div>
            <?php } ?>
         
      </section>
    </div>
  </div>
