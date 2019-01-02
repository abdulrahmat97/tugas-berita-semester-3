<h4 class="side">Popular Posts</h4>
<div class="edit-pics">
    <?php
    $query=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id
                                     WHERE nama_kategori='fiqih' ORDER BY id_berita DESC LIMIT 4");
    while ($data=$query->fetch()){
        $date=new DateTime( $data['tgl_posting']);
        $tgl =$date->format('d-F-Y H:i:s');
        $no=100;
        echo "
                 <div class='editor-pics'>
                        <div class='col-md-3 item-pic'>
                             <img src='admin/foto_berita/$data[gambar]' class='img-responsive' alt=''/>
                         </div>
                        <div class='col-md-9 item-details'>
                            <h5 class='inner two'><a href='?berita=berita&id=$data[id_berita]'>$data[judul]</a></h5>
                         <div class='td-post-date two'><i class='glyphicon glyphicon-time'></i>
                         $tgl <a href='#'><i class='glyphicon glyphicon-comment'></i>$no </a></div>
                        </div>
                        <div class='clearfix'></div>
                  </div>
                ";
        $no-=8;
    }
    ?>
   
</div>