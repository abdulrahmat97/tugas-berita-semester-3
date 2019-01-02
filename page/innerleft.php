<?php
include ('koneksi.php');
$berita= isset($_GET['berita']) ? $_GET['berita'] : 'menu';
switch ($berita){
    case 'menu':
        echo "
        <div class='col-md-8 mag-innert-left'>";
    
    require ('koneksi.php');
    
//    <!--/start-banner1-->

    require_once ('innerleft/banner1.php');

//    <!--//end-banner1-->
//
//    <!--    start banner galery-->

    require_once ('innerleft/bannergalery.php');

//    <!--    end banner galery-->
//
//    <!--/start-banner2-->

    require_once ('innerleft/banner2.php');

//    <!--//end-banner2-->
//
//    <!--//latest-articles-->
//
    require_once ('innerleft/latest-articels.php');
    break;

    case 'berita':
    case 'kategori':
        include ('berita.php');
        break;
}
?>
</div>

