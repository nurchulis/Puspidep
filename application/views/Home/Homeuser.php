		<div id="colorlib-main">
			<aside id="colorlib-hero" class="<?php echo base_url() ?>Assets/js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<?php foreach ($data_slider as $tampil) {
				   	
				   	 ?>
				   	<li style="background-image: url(<?php echo base_url() ?>Assets/images/Kiriman/Slider/<?php echo $tampil->gambar_slider ?>);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>“<?php echo $tampil->judul ?>"</h1>
						   					<h2><?php echo $tampil->sub_content ?> </a></h2>
												<p><a href="<?php echo $tampil->link ?>" class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>

											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  
				  <?php } ?>
				  	</ul>
			  	</div>
			</aside>

			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6">
							<?php foreach ($tampil_about as $tampil) {
								if($tampil->place == 1){
								 ?>
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?php echo base_url() ?>Assets/images/<?php echo $tampil->isi_about ?>);">
							</div>
						<?php } } ?>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">ABOUT</span>
								<?php foreach ($tampil_about as $tampil) {
									if($tampil->place == 2){
										echo $tampil->isi_about;
									}
								} ?>
								</div>
							<div class="row padding">
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps active">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Konsentrasi <br>Keislaman</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Konsentrasi <br>Demokrasi</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Konsentrasi <br> Perdamaian</h3>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="colorlib-portofolios">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Video</span>
							<h2 class="colorlib-heading">See the Video</h2>
						</div>
					</div>
					<div class="row">
						<video width="100%" controls autoplay>
  <source src="<?php echo base_url() ?>Assets/images/vid1.mp4" type="video/mp4">
  
  Your browser does not support HTML5 video.
</video>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
					</div>
				</div>
			</div>



			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?php echo base_url() ?>Assets/images/header.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-sketch"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $pro; ?>" data-speed="100" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $por; ?>" data-speed="100" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Portofolio</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-engineering"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="<?php echo $blg ?>" data-speed="100" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Blog</span>
						</div>
						
					</div>
				</div>
			</div>

			<div class="colorlib-work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">PORTOFOLIO</span>
							<h2 class="colorlib-heading animate-box">Recent Portofolio</h2>
						</div>
					</div>

					<div class="row">
<?php foreach ($tampil_portofolio_home as $tampil) {

 ?>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(<?php echo base_url() ?>Assets/images/Kiriman/thumb/<?php echo $tampil->Gambar_portofolio ?>);">
								<div class="desc">
									<div class="con">
										<h3><a href="<?php echo base_url() ?>Portofolio/Show_portofolio/<?php echo $tampil->id_portofolio ?>/<?php echo $tampil->tgl_portofolio ?>"><?php echo $tampil->Judul_portofolio ?></a></h3>
										<span><?php echo $tampil->deskripsi ?></span>
										
									</div>
								</div>
							</div>
						</div>
<?php } ?>
					</div>
				</div>
			</div>

			<div class="colorlib-blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">BLOG</span>
							<h2 class="colorlib-heading">Recent Blog</h2>
						</div>
					</div>
					<div class="row">
<?php foreach ($tampil_blog_home as $tampil) { ?>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="blog.html" class="blog-img"><img src="<?php echo base_url() ?>Assets/images/Kiriman/thumb/<?php echo $tampil->gambar_blog ?>" style="height:230px" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small><?php echo $tampil->tgl_blog ?> </small> | <small><?php echo $tampil->kategori ?></small> </span>
									<h3><a href="blog.html"><?php echo $tampil->judul_blog ?></a></h3>
									<p><?php echo $tampil->deskripsi ?></p>
								</div>
							</div>
						</div>
<?php } ?>
					</div>
				</div>
			</div>

			
			</div>
