<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:page/login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin Page Backend | Islamic News</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!-- DataTables CSS -->
    <link href="assets/plugins/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets/plugins/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!--/script TinyMCE-->
    <script type="text/javascript" src="plugin/tinymce/js/tinymce/tinymce.min.js"></script>
    <!--/script-->
</head>
<body>

<div class="wrapper">
    <?php
    include_once ('page/menu.php');
    ?>

    <div class="main-panel">
        <?php
        include_once ('page/header.php');
        ?>

        <?php
        include_once ('page/main.php');
        ?>


        <?php
        include_once ('page/footer.php');
        ?>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
<!-- DataTables JavaScript -->
<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="assets/plugins/datatables-responsive/dataTables.responsive.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
            responsive: true,
            "lengthMenu":[5,10,25,50]
        });
    });
</script>

<!--script TinyMCE-->
<script>
    tinymce.init({
        selector: '#isiberita',
        mode    : 'textareas',
        theme   : 'modern',
        height  : '300',
        plugins : [
            'advlist autolink link image lists charmap print  hr anchor pagebreak spellchecker',
            ' wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
        ] ,
        content_css: 'css/content.css',
        toolbar : 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print  media fullpage | forecolor | backcolor emoticons'
    });
</script>
<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!---->
<!--        demo.initChartist();-->
<!---->
<!--        $.notify({-->
<!--            icon: 'pe-7s-user',-->
<!--            message: "Welcome  <b>Abdul Rahmat</b> ."-->
<!---->
<!--        },{-->
<!--            type: 'info',-->
<!--            timer: 4000-->
<!--        });-->
<!---->
<!--    });-->
<!--</script>-->

</html>
