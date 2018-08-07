<div id="colorlib-main">
			<div class="colorlib-portofolios">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Home/Portofolio</span>
							<h2 class="colorlib-heading">Recent Portofolio</h2>
						</div>
					</div>


					<div class="row">
						<?php foreach ($tampil_portofolio as $tampil) {
						 ?>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(<?php echo base_url() ?>Assets/images/Kiriman/thumb/<?php echo $tampil->Gambar_portofolio ?>);">
								<div class="desc">
									<div class="con">
										<h3><a href="<?php echo base_url() ?>Portofolio/Show_portofolio/<?php echo $tampil->id_portofolio ?>/<?php echo $tampil->tgl_portofolio ?>"><?php echo $tampil->Judul_portofolio ?></a></h3>
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
