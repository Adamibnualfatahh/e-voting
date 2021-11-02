
<div class="header-3-2 container-xxl mx-auto p-0 position-relative">
    <nav class="navbar navbar-expand-lg navbar-light">

      <!-- <img style="margin-right: 0.75rem"
             src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-5.png"
             alt="" /> -->
      <a href="" style="text-decoration: none;">
        <h3 style="margin-right: 0.75rem; color: #FF7468;font-weight: bold;">E-PILKETOS</h3>
      </a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo">

      </div>
    </nav>


    <div>
      <div class="mx-auto d-flex flex-lg-row flex-column hero">
        <!-- Column kiri -->
        <div class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
          <h1 class="title-text-big">
            Terimakasih,<br class="d-lg-block d-none" />
            <span style="color: #FF7468">Telah Melakukan Pemilihan</span>

          </h1>
          <p class="text-caption">
            Pilihan Anda Akan Masuk Kedalam Penyimpanan Kami
          </p>
          <div>
            <form method="post" action="<?= site_url('selesai/s')?>">
              <input type="hidden" name="status" value="1">
              <button type="submit" class="btn btn-get text-white">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>