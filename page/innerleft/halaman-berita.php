<?php
$id=$_GET['id'];
$ambil=$con->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id
                      JOIN user ON berita.id_user = user.id WHERE id_berita=$id");
$berita=$ambil->fetch();
?>
<div class="banner-bottom-left-grids">
    <div class="single-left-grid">
        <img src='admin/foto_berita/<?php echo $berita['gambar'];?> ' class="img-responsive" alt="">
        <?php
        echo $berita['isi_berita'];
        ?>
        <div class="single-bottom">
            <ul>
                <li><?php echo  $berita['nama_kategori']?></li>
                <?php $date=new DateTime( $berita['tgl_posting']);
                $tgl =$date->format('d-F-Y H:i:s');
                ?>
                <li><?php echo $tgl;?></li>
                <li><?php echo $berita['username']; ?></li>
                <li>5 Comments</li>
            </ul>
        </div>
    </div>
</div>