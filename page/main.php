<div class="main-content">
    <div class="container">
        <?php
        $menu=isset($_GET['menu']) ? $_GET['menu'] : 'home';
        $kategori=isset($_GET['kategori']) ? $_GET['kategori'] : $menu;
        if ($menu=='home' || $menu=='materi' || $menu=='sirah' || $menu=='berita')
            include ('home.php');

        if ($kategori=='fiqih' || $kategori=='akhlaq' || $kategori=='tauhid' || $kategori=='dunia' || $kategori=='nasional' || $kategori=='anda tau?')
            include ('home.php');
        ?>
    </div>
</div>