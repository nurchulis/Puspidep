<div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <h3 class="box-title">Log Aktivitas Terbaru</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered data2">
                        <thead>
                            <tr style="background-color: #40C276; color: white">
                                <th style="color: white">#</th>
                                <th style="color: white">Username</th>
                                
                                <th style="color: white">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>

                       <?php
                       $no=1;
                        foreach ($admin as $tampil) {
                         ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td class="txt-oflo"><?php echo $tampil->username; ?></td>
                                
                                <td class="txt-oflo">
                                    <center>
                                    <a href="#" data-toggle="modal" data-target="#modaltok<?php echo $tampil->id_admin ?>">
                                    <button class="btn btn-success">Ganti Password</button>
                                    </a>
                                    <button class="btn btn-danger">Hapus</button>
                                     </center>   
                                </td>
                            </tr>

                             <!-- /.container-fluid -->
   <div class="modal fade" id="modaltok<?php echo $tampil->id_admin ?>" tabindex="-1" role="dialog" 
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
                                      Menganti Passowrd
                                    </h4>
                                </div>
                                <!-- Modal Body -->
                                <div class="modal-body">
                          <h3 class="panel-title"><center><h2>
                            <form action="<?php echo base_url() ?>Kirim/ganti_password" method="post">
                                <input type="hidden" name="id_admin" value="<?php echo $tampil->id_admin ?>">

                                <input type="hidden" name="username" value="<?php echo $tampil->username ?>">
                              <input type="text" class="form-control" name="passowrd" placeholder="Masukan Passowrd Baru">
                          </h2></center>      
                  <br/>     </div>
                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default"
                                            data-dismiss="modal">
                                              Batal
                                    </button>
                                    <button type="button submit" class="btn btn-success">
                                        Simpan
                                    </button>
                                    </form>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                      <?php 
                        }
                      ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


   