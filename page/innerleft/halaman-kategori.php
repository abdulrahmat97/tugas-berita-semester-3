<?php
$id=$_GET['kategori'];
$ambil=$con->query("SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id
                      JOIN user ON berita.id_user = user.id WHERE nama_kategori='$id' ORDER BY id_berita ASC");
?>
<div class="banner-bottom-left-grids">
    <div class="single-left-grid">

        <div class="header">
            <h4 class="title"></h4>
        </div>
        <div class="content table-responsive">
            <table  class="table table-responsive" id="dataTables" border="0">
                <thead>
                <tr>
                    <th>

                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ( $data=$ambil->fetch()){
                    $isi=substr($data['isi_berita'],0,500);
                    echo "
                    <tr>
                        <td>
                        <br>
                        <br>
                        <a href='?berita=berita&id=$data[id_berita]'>
                         <img src='admin/foto_berita/$data[gambar]' class='img-responsive'>
                         </a>
                          $isi ...
                         <br><br>
                        <a class='read' href='?berita=berita&id=$data[id_berita]'>Read More</a>
                        </td>
                    </tr>
                    ";
                }
                ?>

                </tbody>
            </table>
        </div>

    </div>
</div>