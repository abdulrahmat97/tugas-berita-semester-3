<div class="content">
    <div class="container-fluid">
        <?php
        $page=isset($_GET['page']) ? $_GET['page'] : 'dasboard';
        if ($page=='dasboard') include ('dasboard.php');
        if ($page=='kategori') include ('kategori.php');

        if ($page=='user') include ('user.php');
        if ($page=='berita') include ('berita.php');
        ?>
    </div>
</div>