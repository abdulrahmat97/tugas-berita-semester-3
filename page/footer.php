<div class="footer-section">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-4 footer-grid">
                <h4>EDITOR PICKS</h4>
                <?php
                include ('koneksi.php');
                $query=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id
                                     WHERE nama_kategori='anda tau?' ORDER BY id_berita ASC LIMIT 3");
                while ($data=$query->fetch()){
                    $date=new DateTime( $data['tgl_posting']);
                    $tgl =$date->format('d-F-Y H:i:s');
                    echo "
                    <div class='editor-pics'>
                    <div class='col-md-3 item-pic'>
                        <img src='admin/foto_berita/$data[gambar]' class='img-responsive' alt=''/>

                    </div>
                    <div class='col-md-9 item-details'>
                        <h5 class='inner'><a href='?berita=berita&id=$data[id_berita]'>$data[judul]</a></h5>
                        <div class='td-post-date'>$tgl</div>
                    </div>
                    <div class='clearfix'></div>
                </div>
                    ";
                }
                ?>
            </div>
<!--            Start Popular post-->
            <div class="col-md-4 footer-grid">
                <h4>POPULAR POSTS</h4>
                <?php
                $query=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id
                                     WHERE nama_kategori='sirah' ORDER BY id_berita DESC LIMIT 3");
                while ($data=$query->fetch()){
                    $date=new DateTime( $data['tgl_posting']);
                    $tgl =$date->format('d-F-Y H:i:s');
                    echo "
                    <div class='editor-pics'>
                    <div class='col-md-3 item-pic'>
                        <img src='admin/foto_berita/$data[gambar]' class='img-responsive' alt=''/>

                    </div>
                    <div class='col-md-9 item-details'>
                        <h5 class='inner'><a href='?berita=berita&id=$data[id_berita]'>$data[judul]</a></h5>
                        <div class='td-post-date'>$tgl</div>
                    </div>
                    <div class='clearfix'></div>
                </div>
                    ";
                }
                ?>
            </div>
<!--            end Popular post-->

            <div class="col-md-4 footer-grid">
                <h4>POPULAR CATEGORY</h4>
                <ul class="td-pb-padding-side">
                    <?php
                    $query=$con->query("SELECT * FROM kategori ORDER BY id DESC");
                    $no=30;
                    while ($data=$query->fetch()){
                        switch ($data['nama_kategori']){
                            case $data['nama_kategori'] == 'tauhid' ||
                            $data['nama_kategori']=='fiqih' ||
                            $data['nama_kategori']=='akhlaq': $menu='materi';break;
                            case $data['nama_kategori']=='dunia'||
                                $data['nama_kategori']== 'nasional': $menu='berita';break;
                            case 'sirah':$menu='sirah';break;
                            case 'anda tau?' :  $menu=urldecode('anda tau?');
                        }
                        echo "<li><a href='?berita=kategori&menu=$menu&kategori=$data[nama_kategori]'>$data[nama_kategori]
                           <span class='td-cat-no'>$no</span></a></li>";
                        $no-=3;
                    }
                    ?>

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>