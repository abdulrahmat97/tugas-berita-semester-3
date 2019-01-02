<div class="top-news">
    <h4 class="side">Top News</h4>
    <div class="top-inner">
        <?php
        $query=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id
                                     WHERE nama_kategori='tauhid' ORDER BY id_berita DESC LIMIT 4");
        while ($data=$query->fetch()){
            $date=new DateTime( $data['tgl_posting']);
            $tgl =$date->format('d-F-Y H:i:s');
            $no=150;
            echo "
                 <div class='top-text'>
                        <a href='single.html'><img src='admin/foto_berita/$data[gambar]' class='img-responsive' alt=''/></a>
                        <h5 class='top'><a href='?berita=berita&id=$data[id_berita]'>$data[judul]</a></h5>
                        <div class='td-post-date two'><i class='glyphicon glyphicon-time'></i>$tgl 
                            <a href='#'><i class='glyphicon glyphicon-comment'></i>$no </a>
                        </div>
                 </div>
                ";
            $no-=11;
        }
        ?>
    </div>
</div>