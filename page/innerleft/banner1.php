<?php
$kategori=isset($_GET['kategori']) ? $_GET['kategori'] : 'home';
switch ($kategori){
    case 'home'     :
        $query=$con->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 4");
        $query2=$con->query("SELECT * FROM berita LIMIT 1");
        break;
    case 'materi'   :
        $query=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE nama_kategori='akhlaq' 
                            ORDER BY judul ASC LIMIT 4");
        $query2=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE nama_kategori='tauhid' 
                            ORDER BY judul ASC LIMIT 1");
        break;

    case 'berita'   :
        $query=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE nama_kategori='nasional' 
                            ORDER BY judul ASC LIMIT 4");
        $query2=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE nama_kategori='dunia' 
                            ORDER BY judul ASC LIMIT 1");
        break;
}
?>
<div class="">
    <h2 class="tittle"><i class="glyphicon glyphicon-certificate"> </i>
        <?php
        if($kategori=='home')
            echo"NEW";
        if($kategori=='materi')
            echo"MATERI PILIHAN";
        if($kategori=='berita')
            echo"HOT NEWS";
        ?>


    </h2>
    <div class="col-md-6 tech-img">
        <?php
        $data2=$query2->fetch();
        echo "<img src='admin/foto_berita/$data2[gambar]' class='img-responsive' alt=''/>";
        ?>
    </div>
    <div class="col-md-6 tech-text">
        <div class="editor-pics">
            <?php
            while ($data=$query->fetch()){
                $date=new DateTime( $data['tgl_posting']);
                $tgl =$date->format('d-F-Y H:i:s');
                echo "
                <div class='col-md-3 item-pic'>
                <img src='admin/foto_berita/$data[gambar]' class='img-responsive' alt='' />

                </div>
                <div class='col-md-9 item-details'>
                    <h5 class='inner two'><a href='?berita=berita&id=$data[id_berita]' >$data[judul]</a></h5>
                    <div class='td-post-date two'>$tgl</div>
                </div>
                <div class='clearfix'></div>
                ";
            }
            ?>

        </div>
    </div>
    <div class="clearfix"></div>
</div>