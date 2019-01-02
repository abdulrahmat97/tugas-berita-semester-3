<div class="latest-articles">
    <h3 class="tittle"><i class="glyphicon glyphicon-file"></i>latest Articles</h3>
    <div class="world-news-grids">
        <?php
        $query=$con->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 3");
        $no=1;
        while ($data=$query->fetch()){
            $date=new DateTime( $data['tgl_posting']);
            $tgl =$date->format('d-F-Y H:i:s');
            if ($no==3){
                echo "<div class='world-news-grid lost'>";
            }
            else{
                echo"
                    <div class='world-news-grid'>
                  ";
            }
            echo "
                     <img src='admin/foto_berita/$data[gambar]' alt='' />
                    <a href='?berita=berita&id=$data[id_berita]' class='wd'>$data[judul] </a>
                     <br>
                    <a class='read' href='?berita=berita&id=$data[id_berita]'>Read More</a>
                </div>
            
            ";

            $no++;
        }
        ?>
    </div>
</div>