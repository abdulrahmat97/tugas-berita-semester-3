<!--//start-mag-inner-->
<div class="mag-inner">

    <!--            start inner left-->
    <?php
    require_once ('page/innerleft.php');
    ?>
    <!--            end inner left-->

    <!--            start inner right-->
    <?php
    require_once ('page/innerright.php');
    ?>
    <!--            end inner right-->

    <div class="clearfix"></div>
</div>
<!--//end-mag-inner-->
<!--/start mag-bottom-->
<?php
$par=isset($_GET['berita']) ? $_GET['berita'] : 'menu';
if($par=='menu')
    require_once ('page/magbottom.php');
?>
<!--//end mag-bottom-->