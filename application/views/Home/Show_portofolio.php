<div id="colorlib-main">
  <div class="colorlib-work">
    <div class="colorlib-narrow-content">
      <div class="row">
        <?php foreach ($tampil_portofolio_id as $tampil)  {
         ?>
        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
          <span class="heading-meta">Home/Portofolio/<?php echo $tampil->Judul_portofolio ?></span>
          <h2 class="colorlib-heading"><?php echo $tampil->Judul_portofolio ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">

              <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                <img class="img-responsive" src="<?php echo base_url() ?>Assets/images/Kiriman/<?php echo $tampil->Gambar_portofolio ?>">
                <br>
          <?php echo $tampil->isi_portofolio ?>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
<?php } ?>

<div class="col-md-12">
  <div class="list-group">
<a href="#" class="list-group-item" style="border:none; font-size:15px;">
<i class="fa fa-newspaper-o" aria-hidden="true" ></i> Project Terbaru
</a>
<?php foreach ($tampil_project_post_1 as $tampil) {
?>
<a href="<?php echo base_url() ?>Project/Show_project/<?php echo $tampil->id_project_post ?>/<?php echo $tampil->tgl_project?>" class="list-group-item list-group-item-action" style="border:none;">
<i class="fa fa-angle-right" aria-hidden="true"></i>
<?php echo $tampil->judul_project ?></a>
<?php } ?>
</div>
</div>

<div class="col-md-12">
  <div class="list-group">
<a href="#" class="list-group-item" style="border:none; font-size:15px;">
<i class="fa fa-newspaper-o" aria-hidden="true" ></i> Blog Terbaru
</a>
<?php foreach ($tampil_blog_1 as $tampil) {
?>
<a href="<?php echo base_url() ?>Blog/Show_blog/<?php echo $tampil->id_blog ?>/<?php echo $tampil->tgl_blog ?>" class="list-group-item list-group-item-action" style="border:none;">
<i class="fa fa-angle-right" aria-hidden="true"></i>
<?php echo $tampil->judul_blog ?></a>
<?php } ?>
</div>
</div>



          </div>
        </div>
      </div>
    </div>
  </div>


</div>


</div>
