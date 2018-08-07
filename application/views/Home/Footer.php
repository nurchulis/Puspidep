
</div>
<script>
$(function () {
    var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
    var activePage = url.substring(url.lastIndexOf('/') + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
        $('.primary-nav li a').each(function () { //looks in each link item within the primary-nav list
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;
            if (activePage == linkPage) { //compares the path of the current window to the path of the linked page in the nav item
                $(this).parent().addClass('colorlib-active'); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
            }
        });
})

</script>

<!-- jQuery -->
<script src="<?php echo base_url() ?>Assets/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url() ?>Assets/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>Assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo base_url() ?>Assets/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="<?php echo base_url() ?>Assets/js/jquery.flexslider-min.js"></script>
<!-- Sticky Kit -->
<script src="<?php echo base_url() ?>Assets/js/sticky-kit.min.js"></script>
<!-- Owl carousel -->
<script src="<?php echo base_url() ?>Assets/js/owl.carousel.min.js"></script>
<!-- Counters -->
<script src="<?php echo base_url() ?>Assets/js/jquery.countTo.js"></script>


<!-- MAIN JS -->
<script src="<?php echo base_url() ?>Assets/js/main.js"></script>

</body>
</html>
