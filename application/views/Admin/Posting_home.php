<div class="container-fluid">
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Posting</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
                          <li><a href="">Posting/</a></li>
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
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">

            <ul class="list-inline two-part">
                <li>
                    <div>  <h3 class="box-title">Create Project</h3></div>
                </li>
                <li class="text-right">
                  <a href="<?php echo base_url() ?>HalamanAdmin/Posting_Project"  class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-pen"></i>Menulis Project
                      </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">

            <ul class="list-inline two-part">
                <li>
                    <div>  <h3 class="box-title">Create Portofolio</h3></div>
                </li>
                <li class="text-right">
                  <a href="<?php echo base_url() ?>HalamanAdmin/Posting_portofolio"  class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-pen"></i>Menulis Portofolio
                      </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">

            <ul class="list-inline two-part">
                <li>
                    <div>  <h3 class="box-title">Create Blog</h3></div>
                </li>
                <li class="text-right">
                  <a href="<?php echo base_url() ?>HalamanAdmin/Posting_blog"  class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-pen"></i>Menulis Blog
                      </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
    <div class="container">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <h3 class="box-title">Daftar Project</h3>
                <div class="table-responsive">
                      <table class="table table-striped table-bordered data">

                        <thead>
                           <tr style="background-color: #40C276; color: white">

                                <th style="color: white">#</th>
                                <th style="color: white">Judul</th>
                                <th style="color: white">Tgl</th>
                                <th style="color: white">Deskripsi</th>
                                <th style="color: white">Status</th>
                                <th style="color: white">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        $no=1;
                         foreach ($data_project_semua as $tampil) {
                          ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td class="txt-oflo">
                                <a href="<?php echo base_url() ?>Project/Show_project/<?php echo $tampil->id_project_post ?>/<?php echo $tampil->tgl_project ?>" target="_blank">
                                <?php echo $tampil->judul_project ?>
                                </a>
                                </td>
                                <td><?php echo $tampil->tgl_project ?></td>
                                <td class="txt-oflo"><?php echo mb_substr($tampil->deskripsi, 0, 40).".."; ?></td>
                                 <td class="txt-oflo"><?php if($tampil->status == 1){
                                    echo "Masih Di Draft";
                                }else {
                                    echo "Sudah Terposting";
                                } ?></td>
                                <td class="txt-oflo">
                                     <a href="<?php echo base_url() ?>HalamanAdmin/Edit_Project/<?php echo $tampil->id_project_post ?>">
                            <button type="button" class="btn btn-primary btn-edit"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></button>
                          </a>
                            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $tampil->id_project_post; ?>" >
                            <button type="button" class="btn btn-danger btn-hapus" ><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></button>
                          </a>

                                </td>
                            </tr>

<!-- Modal -->
<div id="myModal<?php echo $tampil->id_project_post; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Peringatan !!</h4>
      </div>
      <div class="modal-body">
        <center>
        <p>Data yang dihapus tidak bisa dikembalikan.</p>
        <a href="<?php echo base_url() ?>Kirim/delete_project/<?php echo $tampil->id_project_post ?>">
            <button class="btn btn-danger">Hapus</button>
        </a>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>

  </div>
</div>
                          <?php } ?> 

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
  </div>
        <div class="container">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <h3 class="box-title">Daftar Blog</h3>
                <div class="table-responsive">
                    
                      <table class="table table-striped table-bordered data">
                          <thead>
                           <tr style="background-color: #40C276; color: white">

                                <th style="color: white">#</th>
                                <th style="color: white">Judul</th>
                                <th style="color: white">Tgl</th>
                                <th style="color: white">Deskripsi</th>
                                <th style="color: white">Status</th>
                                <th style="color: white">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        $no=1;
                         foreach ($data_blog as $tampil) {
                          ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td class="txt-oflo">
                                <a href="<?php echo base_url() ?>Blog/Show_blog/<?php echo $tampil->id_blog ?>/<?php echo $tampil->tgl_blog ?>" target="_blank">
                                <?php echo $tampil->judul_blog ?>
                                </a>
                                </td>
                                <td><?php echo $tampil->tgl_blog ?></td>
                                <td class="txt-oflo"><?php echo mb_substr($tampil->deskripsi, 0, 40).".."; ?></td>
                                <td class="txt-oflo"><?php if($tampil->status == 1){
                                    echo "Masih Di Draft";
                                }else {
                                    echo "Sudah Terposting";
                                } ?></td>
                                <td class="txt-oflo">
                                     <a href="<?php echo base_url() ?>HalamanAdmin/Edit_blog/<?php echo $tampil->id_blog ?>">
                            <button type="button" class="btn btn-primary btn-edit"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></button>
                          </a>
                            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $tampil->id_blog; ?>">
                            <button type="button" class="btn btn-danger btn-hapus"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></button>
                          </a>

                                </td>
                            </tr>
                            <!-- Modal -->
<div id="myModal<?php echo $tampil->id_blog; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Peringatan !!</h4>
      </div>
      <div class="modal-body">
        <center>
        <p>Data yang dihapus tidak bisa dikembalikan.</p>
        <a href="<?php echo base_url() ?>Kirim/delete_blog/<?php echo $tampil->id_blog ?>">
            <button class="btn btn-danger">Hapus</button>
        </a>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>

  </div>
</div>

                          <?php } ?> 

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

     <div class="container">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <h3 class="box-title">Daftar Portofolio</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered data">
                        <thead> 
                            <tr style="background-color: #40C276; color: white">
                                <th style="color: white">#</th>
                                <th style="color: white">Judul</th>
                                <th style="color: white">Tgl</th>
                                <th style="color: white">Status</th>
                                <th style="color: white">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                        $no=1;
                        foreach ($data_portofolio as $tampil) {
                          ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td class="txt-oflo">
                                <a href="<?php echo base_url() ?>Portofolio/Show_portofolio/<?php echo $tampil->id_portofolio?>/<?php echo $tampil->tgl_portofolio ?>" target="_blank">  
                                <?php echo $tampil->Judul_portofolio ?>
                                </a></td>
                                <td><?php echo $tampil->tgl_portofolio ?></td>
                               <td class="txt-oflo"><?php if($tampil->status == 1){
                                    echo "Masih Di Draft";
                                }else {
                                    echo "Sudah Terposting";
                                } ?></td>
                                <td class="txt-oflo">
                                     <a href="<?php echo base_url() ?>HalamanAdmin/Edit_portofolio/<?php echo $tampil->id_portofolio ?>">
                            <button type="button" class="btn btn-primary btn-edit"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></button>
                          </a>
                            <a href="#" data-toggle="modal" data-target="#myModal<?php echo $tampil->id_portofolio; ?>">
                            <button type="button" class="btn btn-danger btn-hapus"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></button>
                          </a>

                                </td>
                            </tr>
                                                       <!-- Modal -->
<div id="myModal<?php echo $tampil->id_portofolio; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Peringatan !!</h4>
      </div>
      <div class="modal-body">
        <center>
        <p>Data yang dihapus tidak bisa dikembalikan.</p>
        <a href="<?php echo base_url() ?>Kirim/delete_por/<?php echo $tampil->id_portofolio ?>">
            <button class="btn btn-danger">Hapus</button>
        </a>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>

  </div>
</div>
 
                          <?php } ?> 

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>