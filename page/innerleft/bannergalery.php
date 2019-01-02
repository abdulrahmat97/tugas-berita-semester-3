<div class="gallery">
    <div class="main-title-head">
        <h3 class="tittle"><i class="glyphicon glyphicon-picture"></i>Gallery</h3>
    </div>
    <div class="gallery-images">
        <div class="course_demo1">
            <ul id="flexiselDemo1">
                <?php
                $menu=isset($_GET['menu']) ? $_GET['menu'] : 'home';
                switch ($menu){
                    case 'home'     :
                        $query=$con->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
                        $query2=$con->query("SELECT * FROM berita ORDER BY id_berita ASC LIMIT 5");
                        break;
                    case 'materi'   :
                        $query=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE nama_kategori='akhlaq' 
                            ORDER BY judul ASC LIMIT 5");
                        $query2=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE nama_kategori='tauhid' 
                            ORDER BY judul DESC LIMIT 5");
                        break;

                    case 'berita'   :
                        $query=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE nama_kategori='nasional' 
                            ORDER BY judul ASC LIMIT 5");
                        $query2=$con->query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE nama_kategori='dunia' 
                            ORDER BY judul DESC LIMIT 5");
                        break;

                }

                while ($data=$query->fetch()) {
                    echo "
                 <li>
                    <a href='?berita=berita&id=$data[id_berita]'><img src='admin/foto_berita/$data[gambar]' alt='' /></a>
                </li>
                ";
                }
                ?>
            </ul>
        </div>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 3,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="../../js/jquery.flexisel.js"></script>
    </div>
    <div class="course_demo1">
        <ul id="flexiselDemo">
            <?php
            while ($data2=$query2->fetch()) {
                echo "
                 <li>
                    <a href='?berita=berita&id=$data2[id_berita]'><img src='admin/foto_berita/$data2[gambar]' alt='' /></a>
                </li>
                ";
            }
            ?>
        </ul>
    </div>
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 2
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>

</div>