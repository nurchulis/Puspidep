<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
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
                <h3 class="box-title">Total Blog</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?php echo $blg; ?></span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Jumlah Portofolio</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash2"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">
                        <?php echo $por; ?>
                    </span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Jumlah Project</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash3"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?php echo $pro; ?></span></li>
                </ul>
            </div>
        </div>
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
