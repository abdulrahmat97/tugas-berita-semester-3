<!--
Author: Abdul Rahmat
From : w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <?php
    $menu=isset($_GET['menu']) ? $_GET['menu'] : 'home';
    $kategori=isset($_GET['kategori']) ? $_GET['kategori'] : $menu;

    if ($menu=='home' || $menu=='materi' || $menu=='sirah' || $menu=='berita') {
        echo "<title>Islamic News | $menu</title>";
    }
       else if ($kategori=='fiqih' || $kategori=='akhlaq' || $kategori=='tauhid' || $kategori=='dunia' || $kategori=='nasional' || $kategori=='anda tau?'){
            echo "<title>Islamic News | $menu |  $kategori</title>";
        }
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Motive Mag Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
    <!-- Custom Theme files -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"> </script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

    <!-- DataTables CSS -->
    <link href="admin/assets/plugins/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin/assets/plugins/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
</head>
<body>
<!--Start header-->
    <?php
        require_once ('page/header.php');
        $date=new DateTimeZone('Asia/Jakarta');
    ?>
<!--end header-->
<!--/start-banner-->
    <?php
        require_once ('page/banner.php');
    ?>
<!--//end-banner-->
<!--/start-main-->
<?php
require_once ('page/main.php');
?>
<!--//end-main-->
<!--/start-footer-section-->
    <?php
        require_once ('page/footer.php');
    ?>
<!--//end-footer-section-->
<!--/start-copyright-section-->
    <?php
        require_once ('page/copyright.php');
    ?>
<!--start-smoth-scrolling-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


<!--JS-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->
<!-- DataTables JavaScript -->
<script src="admin/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="admin/assets/plugins/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="admin/assets/plugins/datatables-responsive/dataTables.responsive.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
            responsive: true,
            "lengthMenu":[5,10,15]
        });
    });
</script>

</body>
</html>