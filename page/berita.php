<div class="col-md-8 mag-innert-left">
<!--    start halaman berita-->
    <?php
    $par=$_GET['berita'];
    if($par=='berita'){include ('innerleft/halaman-berita.php');}
    if($par=='kategori'){include ('innerleft/halaman-kategori.php');}
    ?>
<!--    end halaman berita-->

    <div class="post">
<!--       start latest post-->
        <?php
        include ('innerleft/latest-post.php');
        ?>

<!--        end latest post-->

        <!--start leave-->

        <?php
        include ('innerleft/leave.php');
        ?>
    </div>
    <!--//leave-->
</div>