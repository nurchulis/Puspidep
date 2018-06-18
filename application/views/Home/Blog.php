<div id="colorlib-main">

    <div class="colorlib-blog">
      <div class="colorlib-narrow-content">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
            <span class="heading-meta">BLOG</span>
            <h2 class="colorlib-heading">Recent Blog</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($tampil_blog as $tampil) {
             ?>
          <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
            <div class="blog-entry">
              <a href="blog.html" class="blog-img"><img src="<?php echo base_url() ?>Assets/images/<?php echo $tampil->gambar_blog ?>" style="height:230px;" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
              <div class="desc">
                <span><small><?php echo $tampil->tgl_blog ?> </small> | <small><?php echo $tampil->kategori ?></small></span>
                <h3><a href="blog.html"><?php echo $tampil->judul_blog ?></a></h3>
                <p>Buku ini berisi beberapa 8 Bab, meliputi: Pendahuluan-Menuju Islamisme Populer, Menu Bacaan Pendidikan Agama Islam di SMA dan Perguruang Tinggi, Produksi wacana islam(is) di Indonesia</p>
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
