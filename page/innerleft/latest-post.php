<a href="#"><h3>Latest Posts</h3></a>
<?php
$berita=$_GET['berita'];
if($berita=='berita'){
    $k=$con->query("SELECT nama_kategori FROM kategori WHERE id IN (SELECT id_kategori FROM berita WHERE id_berita=$_GET[id])");
    $kat=$k->fetch();
    $ambil=$con->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id
                      JOIN user ON berita.id_user = user.id WHERE nama_kategori='$kat[nama_kategori]' ORDER BY id_berita DESC LIMIT 4");
}
if($berita=='kategori'){
    $ambil=$con->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id
                      JOIN user ON berita.id_user = user.id WHERE nama_kategori='$_GET[kategori]' ORDER BY id_berita DESC LIMIT 4");
}

while ($data=$ambil->fetch()){
    $date=new DateTime( $data['tgl_posting']);
    $tgl =$date->format('d-F-Y H:i:s');
    echo"
    <div class='post-grids'>
    <div class='col-md-3 post-left'>
        <a href='?berita=berita&id=$data[id_berita]'>
        <img src='admin/foto_berita/$data[gambar]' alt='' class='img-responsive'></a>
    </div>
    <div class='col-md-9 post-right'>
        <h4><a href='?berita=berita&id=$data[id_berita]'>$data[judul]</a></h4>
        <p class='comments'>$tgl, <a href='#'>8 Comments</a></p>
      
    </div>
    <div class='clearfix'> </div>
</div>

    ";
}
?>
