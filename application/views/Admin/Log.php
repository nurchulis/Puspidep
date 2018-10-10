<div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <h3 class="box-title">Log Aktivitas Terbaru</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered data2">
                        <thead>
                            <tr style="background-color: #40C276; color: white">
                                <th style="color: white">#</th>
                                <th style="color: white">Nama</th>
                                <th style="color: white">Melakukan</th>
                                <th style="color: white">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no=1;
                          foreach ($data_log2 as $tampil): ?>
                              
                          
                            <tr <?php if($tampil->level == 1){
                                echo "class='success'";
                            }else if($tampil->level ==2){
                                echo "class='warning'";
                            }else {
                                echo "class='danger'";
                            } ?>
                            >
                                <td><?php echo $no++; ?></td>
                                <td class="txt-oflo">Admin</td>
                                <td><?php echo $tampil->do; ?></td>
                                <td class="txt-oflo"><?php echo $tampil->tgl ?></td>
                            </tr>
                          <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>