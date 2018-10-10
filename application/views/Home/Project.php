<div id="colorlib-main">

    <div class="colorlib-blog">
      <div class="colorlib-narrow-content">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
            <span class="heading-meta">Home/Project</span>
            <h2 class="colorlib-heading">Recent Project</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($tampil_project_post as $tampil) {
             ?>
          <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
            <div class="blog-entry">
              <a href="<?php echo base_url() ?>Project/Show_project/<?php echo $tampil->id_project_post ?>/<?php echo $tampil->tgl_project ?>" class="blog-img"><img src="<?php echo base_url() ?>Assets/images/Kiriman/<?php echo $tampil->gambar_project ?>" style="height:230px;" class="img-responsive" alt="Gambar Project"></a>
              <div class="desc">
                <span><small><?php echo $tampil->tgl_project ?> </small> | <small></small></span>
                <h3><a href="<?php echo base_url() ?>Project/Show_project/<?php echo $tampil->id_project_post ?>/<?php echo $tampil->tgl_project ?>"><?php echo $tampil->judul_project ?></a></h3>
                <p><?php echo mb_substr($tampil->deskripsi, 0, 50)."...";?></p>
              </div>
            </div>
          </div>
<?php } ?>
        </div>
      </div>
    </div>
    <div class="row">
      <center>
          <div class="col-md-12 animate-box" data-animate-effect="fadeInBottom">
            <ul class="pagination">
              <?php

echo $this->pagination->create_links();
?>

            </ul>
          </div>
        </center>
        </div>

        <div id="get-in-touch" class="colorlib-bg-color">

        </div>
      </div>




</div>
