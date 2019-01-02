<div class="mag-bottom">
    <h3 class="tittle bottom"><i class="glyphicon glyphicon-globe"></i>From around the World</h3>
    <div class="grid">
        <?php
        include ('koneksi.php');
        $query=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id
                                     WHERE nama_kategori='dunia' ORDER BY id_berita DESC LIMIT 3");
        while ($data=$query->fetch()){
            echo "
             <div class='col-md-4 m-b'>
                 <a href='?berita=berita&id=$data[id_berita]'> <figure class='effect-layla'></a>
                 <img src='admin/foto_berita/$data[gambar]' alt=''/>
            <figcaption>
                <h4>Islamic <span>News</span></h4>
                <a href='?berita=berita&id=$data[id_berita]'>View more</a>
            </figcaption>
            </figure>
            <div class='m-b-text'>
                <a href='?berita=berita&id=$data[id_berita]' class='wd'>$data[judul]</a>
                    <br>
                <a class='read' href='?berita=berita&id=$data[id_berita]'>Read More</a>
            </div>
        </div>
                    ";
        }
        ?>

        <div class="clearfix"></div>
    </div>
</div>