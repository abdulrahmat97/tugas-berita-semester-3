<?php
$menu=isset($_GET['menu']) ? $_GET['menu'] : 'home';
switch ($menu){
    case 'home'     :
        $query=$con->query("SELECT * FROM berita JOIN kategori on kategori.id=berita.id_kategori JOIN user ON berita.id_user=user.id
                             WHERE nama_kategori='sirah' ORDER BY user.id DESC limit 2");
        $query2=$con->query("SELECT * FROM berita JOIN kategori on kategori.id=berita.id_kategori JOIN user ON berita.id_user=user.id
                             WHERE nama_kategori='sirah' ORDER BY judul DESC limit 2");
        $query3=$con->query("SELECT * FROM berita JOIN kategori on kategori.id=berita.id_kategori JOIN user ON berita.id_user=user.id
                             WHERE nama_kategori='sirah' ORDER BY judul ASC limit 2");
        break;
    case 'materi'   :
        $query=$con->query("SELECT * FROM berita JOIN kategori on kategori.id=berita.id_kategori JOIN user ON berita.id_user=user.id
                             WHERE nama_kategori='akhlaq' ORDER BY user.id DESC limit 2");
        $query2=$con->query("SELECT * FROM berita JOIN kategori on kategori.id=berita.id_kategori JOIN user ON berita.id_user=user.id
                             WHERE nama_kategori='tauhid' ORDER BY judul DESC limit 2");
        $query3=$con->query("SELECT * FROM berita JOIN kategori on kategori.id=berita.id_kategori JOIN user ON berita.id_user=user.id
                             WHERE nama_kategori='fiqih' ORDER BY judul ASC limit 2");
        break;

    case 'berita'   :
        $query=$con->query("SELECT * FROM berita JOIN kategori on kategori.id=berita.id_kategori JOIN user ON berita.id_user=user.id
                             WHERE nama_kategori='dunia' ORDER BY user.id DESC limit 2");
        $query2=$con->query("SELECT * FROM berita JOIN kategori on kategori.id=berita.id_kategori JOIN user ON berita.id_user=user.id
                             WHERE nama_kategori='nasional' ORDER BY judul DESC limit 2");
        $query3=$con->query("SELECT * FROM berita JOIN kategori on kategori.id=berita.id_kategori JOIN user ON berita.id_user=user.id
                             WHERE nama_kategori='dunia' ORDER BY judul ASC limit 2");
        break;

}
?>
<div class="business">
    <h3 class="tittle"><i class="glyphicon glyphicon-book"></i>
        <?php
        if($menu=='home')
            echo"SIRAH";
        if($menu=='materi')
            echo"HARUS ANDA PELAJARI";
        if($menu=='berita')
            echo"GOOD NEWS";
        ?>

    </h3>

    <?php
    while ($data2=$query2->fetch()){
        $data=$query->fetch();
        $data3=$query3->fetch();
        $date=new DateTime( $data['tgl_posting']);
        $tgl =$date->format('d-F-Y H:i:s');
        $date2=new DateTime( $data2['tgl_posting']);
        $tgl2 =$date2->format('d-F-Y H:i:s');
        $date3=new DateTime( $data3['tgl_posting']);
        $tgl3 =$date3->format('d-F-Y H:i:s');
        echo"
 <!--    start header content 1-->
    <div class='business-inner'>
        <div class='col-md-6 b-img'><a href='?berita=berita&id=$data[id_berita]'><img class='img-responsive' src='admin/foto_berita/$data[gambar]' alt=''/></a></div>
        <div class='col-md-6 b-text'>
            <h5><a href='?berita=berita&id=$data[id_berita]'>$data[judul]</a></h5>
            <h6><i class='glyphicon glyphicon-time'></i>$tgl</h6>
            <div class='icons'>
                <a href='#'><i class='glyphicon glyphicon-user'></i>$data[username]</a>
                <a href='#'><i class='glyphicon glyphicon-comment'></i>2</a>
                <a href='#'><i class='glyphicon glyphicon-thumbs-up'></i>152</a>
                <a href='#'><i class='glyphicon glyphicon-thumbs-down'></i> 26</a>
            </div>
            <div class='clearfix'></div>
                  <a class='read' href='?berita=berita&id=$data[id_berita]'>Read More</a>
        </div>
        <div class='clearfix'></div>
        <!--        end header content -->

            <!--       start bootom content -->
        <div class='business-bottom-content'>
            <div class='col-md-6 business-bottom'>
                <div class='col-md-3 b-bottom-pic'>
                    <a href='?berita=berita&id=$data2[id_berita]'><img class='img-responsive' src='admin/foto_berita/$data2[gambar]' alt=''/></a>
                </div>
                <div class='col-md-9 b-bottom-text'>
                    <h5><a href='?berita=berita&id=$data2[id_berita]'> $data2[judul]</a></h5>
                    <h6><i class='lyphicon glyphicon-time'></i>$data2[tgl_posting]</h6>
                    <div class='icons'><a href='#'><i class='glyphicon glyphicon-user'></i>$tgl2</a>
                        <a href='#'><i class='glyphicon glyphicon-comment'></i>2</a>
                        <a href='#'><i class='glyphicon glyphicon-thumbs-up'></i>152</a>
                        <a href='#'><i class='glyphicon glyphicon-thumbs-down'></i> 26</a>
                    </div>
                    <div class='clearfix'></div>
                </div>
                <div class='clearfix'></div>
            </div>
            <div class='col-md-6 business-bottom'>
                <div class='col-md-3 b-bottom-pic'>
                    <a href='?berita=berita&id=$data3[id_berita]'><img class='img-responsive' src='admin/foto_berita/$data3[gambar]' alt=''/></a>
                </div>
                <div class='col-md-9 b-bottom-text'>
                    <h5><a href='?berita=berita&id=$data3[id_berita]'> $data3[judul]</a></h5>
                    <h6><i class='glyphicon glyphicon-time'></i>$data3[tgl_posting]</h6>
                    <div class='icons'>
                        <a href='#'><i class='glyphicon glyphicon-user'></i>$tgl3</a>
                        <a href='#'><i class='glyphicon glyphicon-comment'></i>2</a>
                        <a href='#'><i class='glyphicon glyphicon-thumbs-up'></i>152</a>
                        <a href='#'><i class='glyphicon glyphicon-thumbs-down'></i> 26</a>
                    </div>
                    <div class='clearfix'></div>
                </div>
                <div class='clearfix'></div>
            </div>
            <div class='clearfix'></div>
        </div>
        <!--separator-->
        <hr>
    </div>
    <!--       end bootom content -->
        ";
    }
    ?>

</div>