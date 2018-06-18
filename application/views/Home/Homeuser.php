

		<div id="colorlib-main">
			<aside id="colorlib-hero" class="<?php echo base_url() ?>Assets/js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(<?php echo base_url() ?>Assets/images/bg1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>“Literatur  Keislaman  Millenial"</h1>
						   					<h2>Berisi kumpulan tulisan dari beberapa peneliti (Prof. Noorhaidi Hasan, Dr. Moch Nor Ichwan, Dr. Ahmad Rafiq, Dr. Ibnu Burdah, Dr. Suhadi, Dr. Najib Kailani dan DR. Munirul Ikhwan), sebagai sebuah refleksi hasil penelitian literatur keislaman di 16 kota di Indonesia </a></h2>
												<p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>

											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image:url(<?php echo base_url() ?>Assets/images/bg2.jpeg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>“Peta Literatur Keislaman  Pilenial: Ideologi dan Jaringan”</h1>
												<h2>Penelitian ini bertujuan untuk memetakan literatur keislaman yang tersebar dan diakses kalangan pelajar SMA dan mahasiswa di Indonesia.<a href="https://colorlib.com/" target="_blank"</a></h2>
												<p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(<?php echo base_url() ?>Assets/images/bg3.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>Diseminasi Jakarta</h1>
												<h2>Narasumber dan Pembahas Diseminasi di Jakarta<a h target="_blank"></a></h2>
												<p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
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



			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?php echo base_url() ?>Assets/images/header.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-sketch"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="11" data-speed="100" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="20" data-speed="100" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Researchers</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-engineering"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="15" data-speed="100" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Portofolio</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-collaboration"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="25" data-speed="100" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Partners</span>
						</div>
					</div>
				</div>
			</div>

			<div class="colorlib-work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">PORTOFOLIO</span>
							<h2 class="colorlib-heading animate-box">Recent Projects</h2>
						</div>
					</div>

					<div class="row">
<?php foreach ($tampil_portofolio_home as $tampil) {

 ?>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(<?php echo base_url() ?>Assets/images/<?php echo $tampil->Gambar_portofolio ?>);">
								<div class="desc">
									<div class="con">
										<h3><a href="project.html"><?php echo $tampil->Judul_portofolio ?></a></h3>
										<span><?php echo $tampil->isi_portofolio ?></span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
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
								<a href="blog.html" class="blog-img"><img src="<?php echo base_url() ?>Assets/images/<?php echo $tampil->gambar_blog ?>" style="height:230px" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small><?php echo $tampil->tgl_blog ?> </small> | <small><?php echo $tampil->kategori ?></small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html"><?php echo $tampil->judul_blog ?></a></h3>
									<p><?php echo $tampil->isi_blog ?></p>
								</div>
							</div>
						</div>
<?php } ?>
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
