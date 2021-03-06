<div class="container-fluid">
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Edit Portofolio</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
                          <li><a href="#">Posting/</a></li>
                      </ol>

    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- ============================================================== -->
<!-- Different data widgets -->
<!-- ============================================================== -->
<!-- .row -->
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box analytics-info">

            <ul class="list-inline two-part">
                <li>
                    <div>  <h3 class="box-title">Create Portofolio</h3></div>
                </li>
                <li class="text-right">
                  <a href="" target="_blank" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-pen"></i>Save Portofolio
                      </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-8">
      <div class="white-box analytics-info">
      <i class="fa fa-pencil" aria-hidden="true"> Tulis Judul</i>
      <?php foreach ($ambil_portofolio as $tampil) {
       ?>
      <?php echo form_open_multipart('Kirim/edit_portofolio');?>
                <form method="post" action="<?php echo base_url(); ?>Kirim/edit_portofolio" name="kirimanlur" enctype="multipart/form-data">  
      <input type="text" style="margin-bottom:15px;" class="form-control" name="judul_portofolio" value="<?php echo $tampil->Judul_portofolio ?>"   required autofocus>
      <input type="hidden" name="id_portofolio" value="<?php echo $tampil->id_portofolio ?>">
      <input type="hidden" name="gambar_lama" value="<?php echo $tampil->Gambar_portofolio ?>">
      <div class="panel-body" style="padding:0px;">
									<textarea id="summernote" name="isi"  required/><?php echo $tampil->isi_portofolio ?></textarea>
									 <button type="submit" name="status" value="1" class="btn btn-warning">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Simpan di Draft</button>
                    <button  type="submit" name="status" value="2" class="btn btn-success">
                    <span class="fa fa-paper-plane-o"></span>
                    Kirim Berita</button>
								</div>

      </div>
    </div>


    <div class="col-md-4">
      <div class="white-box analytics-info">
        <!-- PANEL NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Selengkapnya</h3>
								</div>
								<div class="panel-body">

									<p class="panel-subtitle">
									<i class="fa fa-file-image-o" aria-hidden="true"></i>
									Upload Gambar Portofolio</p>
									<img src="<?php echo base_url() ?>Assets/images/Kiriman/thumb/<?php echo $tampil->Gambar_portofolio ?>" width="240px">
										<input class="form-control" type="file" name="gambar_kiriman" >
										<br/>
									<h3 class="panel-title">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									Deskripsi</h3>
									<br/>
									<textarea class="form-control" name="deskripsi" placeholder="Tuliskan Diskripsi" rows="4"  required/>
										<?php echo $tampil->deskripsi ?>
									</textarea>
									<br/>
									<h3 class="panel-title">
									<i class="fa fa-user-circle-o" aria-hidden="true"></i>
									Pengirim</h3>
									<br/>
									<select class="form-control" name="pengirim">
										<option value="Admin">Admin</option>
										<option value="Operator1">Operator1</option>
										<option value="Operator2">Operator2</option>
										<option value="Operator3">Operator3</option>
									</select>
								</div>
							</div>

      </div>
    </div>
    <?php } ?>
</form>



</div>
</div>
