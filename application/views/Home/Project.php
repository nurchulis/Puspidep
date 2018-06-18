<div id="colorlib-main">
  <div class="colorlib-work">
    <div class="colorlib-narrow-content">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
          <span class="heading-meta">PROJECT</span>
          <h2 class="colorlib-heading">Here are some of our expertise</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
<?php foreach ($tampil_project as $tampil) {
  ?>
              <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                <div class="colorlib-icon">
                  <i class="<?php echo $tampil->logo_project ?>"></i>
                </div>
                <div class="colorlib-text">
                  <h3><?php echo $tampil->judul_project ?></h3>
                  <p><?php echo $tampil->deskripsi_project ?> </p>
                </div>
              </div>
<?php } ?>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">


            <div class="col-md-6">
              <?php foreach ($tampil_slider_project as $tampil) { ?>

              <?php if($tampil->id_slider_project % 2 == 1){ ?>
              <a href="portofolio.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                <div class="services-img" style="background-image: url(<?php echo base_url() ?>Assets/images/<?php echo $tampil->Gambar ?>)"></div>
                <div class="desc">
                  <h3><?php echo $tampil->Judul ?></h3>
                </div>
              </a>
            <?php } ?>
            <?php } ?>
            </div>
            <div class="col-md-6 move-bottom">
  <?php foreach ($tampil_slider_project as $tampil) { ?>
              <?php if($tampil->id_slider_project % 2 == 0){ ?>
              <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                <div class="services-img" style="background-image: url(<?php echo base_url() ?>Assets/images/<?php echo $tampil->Gambar ?>)"></div>
                <div class="desc">
                  <h3><?php echo $tampil->Judul ?></h3>
                </div>
              </a>
            <?php } ?>
<?php } ?>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="get-in-touch" class="colorlib-bg-color">
    <div class="colorlib-narrow-content">
      <div class="row">
        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
          <h2>Get in Touch</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
          <p class="colorlib-lead">Get close with Puspidep</p>
          <p><a href="contact.html" class="btn btn-primary btn-learn">Contact us</a></p>
        </div>

      </div>
    </div>
  </div>
</div>


</div>
