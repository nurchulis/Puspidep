<!-- /.container-fluid -->
   <div class="modal fade" id="modaltok" tabindex="-1" role="dialog" 
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
                                       Perhatian !!
                                    </h4>
                                </div>
                                <!-- Modal Body -->
                                <div class="modal-body">
                          <h3 class="panel-title"><center><h2>Yakin ingin Keluar</h2></center>      
                  <br/>     </div>
                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default"
                                            data-dismiss="modal">
                                              Batal
                                    </button>
                                    <a href="<?php echo base_url() ?>Login/logout">
                                    <button type="button submit" class="btn btn-success">
                                        Keluar
                                    </button>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
<footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script>
$('#summernote').summernote({
  maximumImageFileSize: 1300000,
  tabsize:2,
  height: 500
});



$('#summernote').summernote({
callbacks: {
onImageUpload: function(files) {
// upload image to server and create imgNode...
$summernote.summernote('insertNode', imgNode);
}
}
});
 </script>

<script>
$('#summernote2').summernote({
  maximumImageFileSize: 1300000,
  tabsize:2,
  height: 260
});



$('#summernote2').summernote({
callbacks: {
onImageUpload: function(files) {
// upload image to server and create imgNode...
$summernote.summernote('insertNode', imgNode);
}
}
});
 </script>
 <script>
$('#summernote3').summernote({
  maximumImageFileSize: 1300000,
  tabsize:2,
  height: 260
});



$('#summernote3').summernote({
callbacks: {
onImageUpload: function(files) {
// upload image to server and create imgNode...
$summernote.summernote('insertNode', imgNode);
}
}
});
 </script>
  <script>
$('.summernoteall').summernote({
  maximumImageFileSize: 1300000,
  tabsize:2,
  height: 150
});



$('.summernoteall').summernote({
callbacks: {
onImageUpload: function(files) {
// upload image to server and create imgNode...
$summernote.summernote('insertNode', imgNode);
}
}
});
 </script>


  <script type="text/javascript">
  $(document).ready(function(){
    $('.data').DataTable({
      paging: true,
        searching: false,
          pageLength: 5,
        bLengthChange: false,
    });
  });
</script>
 <script type="text/javascript">
  $(document).ready(function(){
    $('.data2').DataTable({
      paging: true,
        searching: false,
          pageLength: 30,
        bLengthChange: false,
    });
  });
</script>


<!-- Bootstrap Core JavaScript -->
<!-- Menu Plugin JavaScript -->
<script src="<?php echo base_url() ?>Assets/Admin/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?php echo base_url() ?>Assets/Admin/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url() ?>Assets/Admin/js/waves.js"></script>
<!--Counter js -->
<script src="<?php echo base_url() ?>Assets/Admin/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo base_url() ?>Assets/Admin/bower_components/counterup/jquery.counterup.min.js"></script>
<!-- chartist chart -->
<script src="<?php echo base_url() ?>Assets/Admin/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="<?php echo base_url() ?>Assets/Admin/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="<?php echo base_url() ?>Assets/Admin/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url() ?>Assets/Admin/js/custom.min.js"></script>
<script src="<?php echo base_url() ?>Assets/Admin/js/dashboard1.js"></script>
<script src="<?php echo base_url() ?>Assets/Admin/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
