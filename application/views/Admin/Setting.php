<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Pengaturan</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Settings</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <!-- ============================================================== -->
    <!-- .row -->

                    <h3 class="page-title">
                    <i class="fa fa-cog" aria-hidden="true"></i>    
                    Pengaturan Slider</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- PANEL HEADLINE -->
                            <div class="panel panel-headline">
                                <div class="panel-heading">
                                    <p class="panel-subtitle"></p>
                        
                                </div>
                                <div class="panel-body">
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr style="background-color: #76b852; color: white">
                                                <th><i class="fa fa-picture-o" aria-hidden="true"></i> FOTO SLIDER</th>
                                                <th><i class="fa fa-comment" aria-hidden="true"></i>JUDUL</th>
                                                 <th><i class="fa fa-wrench" aria-hidden="true"></i>CAPTION</th>
                                                <th><i class="fa fa-pencil-square-o" aria-hidden="true"></i>LINK</th>
                                                <th><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ACTION</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

            <?php
            foreach ($data_slider as $data) {
                $a=1;

            ?>
                                            <tr>
                                                <td>
<center>
       <img src="<?php echo base_url() ?>Assets/images/Kiriman/<?php echo $data->gambar_slider; ?>"  class="media-object" style="width: 400px; height: 200px;">
        </center>
                                                </td>
                                                <td>
                                                    <?php echo $data->judul; ?>
                                                                                                    
                                                </td>
                                                  <td>
                     
                                            <?php echo $data->sub_content ?>
                    
                                            </td>    
                                                <td>
                                                    <?php echo $data->link; ?>

                                                </td>

                                    <?php echo form_open_multipart('Kirim/edit_slider');?>
                                                <form action=""  enctype="multipart/form-data">
                                                                                            <td style="">
                                        <button type="button" class="btn btn-success" style="float: left; margin:2px;" data-toggle="modal" data-target="#myModalHorizontal<?php echo $data->id_slider; ?>"><span class="fa fa-pencil-square-o"></span></button>
                                        
                                                </td>
                                        <div class="modal fade" id="myModalHorizontal<?php echo $data->id_slider; ?>" tabindex="-1" role="dialog" 
                                             aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" 
                                                           data-dismiss="modal">
                                                               <span aria-hidden="true">&times;</span>
                                                               <span class="sr-only">Close</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">
                                                           Ganti Gambar
                                                        </h4>
                                                        <input type="hidden" name="id_slider" value="<?php echo $data->id_slider;?>">
                                                      
                                                        <input type="hidden" name="slider_lama" value="<?php echo $data->gambar_slider;?>">
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                    <h3 class="panel-title">Upload Gambar</h3>
                                                    <input class="form-control gambar_kirim" type="file" name="gambar_slider">
                                                    <br/>
                                                    <h3 class="panel-title">Judul</h3>
                                       
                                        <input class="form-control" type="text" name="judul" style="height: 40px;" value="<?php echo $data->judul ?>
                                        "><br/>
                                          <h3 class="panel-title">Caption</h3>
                                       
                                        <input class="form-control" type="text" name="caption" style="height: 100px;" value="<?php echo $data->sub_content ?>
                                        "><br/>
                                                Link
                                                <input class="form-control" value="<?php echo $data->link ?>" type="text" name="link">
                                                    </div>
                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">
                                                                  Batal
                                                        </button>
                                                        <button type="button submit" class="btn btn-success">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
</form>

                                        
                                            </tr>
                                        <?php } ?>  
                                        </tbody>
                                    </table>


                                </div>
                            
                            </div>
                            <!-- END PANEL HEADLINE -->
                        </div>
                            <!-- PANEL NO PADDING -->
                        
                            <!-- END PANEL NO PADDING -->
                            </form>
                        
                    </div>
            

    <!--/.row -->
    <!--row -->
    <!-- /.row -->

    <!-- ============================================================== -->
    <!-- table -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <h3 class="box-title">Log Aktivitas Terbaru</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Melakukan</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="txt-oflo">Elite admin</td>
                                <td>SALE</td>
                                <td class="txt-oflo">April 18, 2017</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="txt-oflo">Real Homes WP Theme</td>
                                <td>EXTENDED</td>
                                <td class="txt-oflo">April 19, 2017</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="txt-oflo">Ample Admin</td>
                                <td>EXTENDED</td>
                                <td class="txt-oflo">April 19, 2017</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="txt-oflo">Medical Pro WP Theme</td>
                                <td>TAX</td>
                                <td class="txt-oflo">April 20, 2017</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- chat-listing & recent comments -->
    <!-- ============================================================== -->

</div>
