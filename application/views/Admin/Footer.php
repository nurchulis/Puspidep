<!-- /.container-fluid -->
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
