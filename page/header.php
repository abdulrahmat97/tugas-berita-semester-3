<?php
$menu=isset($_GET['menu']) ? $_GET['menu'] : 'home';
$kategori=isset($_GET['kategori']) ? $_GET['kategori'] : $menu;
?>
<div class="header" id="home">
    <div class="content white">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="?menu=home"><h1>Islamic<span> News</span></h1> </a>
                </div>
                <!--/.navbar-header-->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="?berita=menu&menu=home" <?php if ($menu=='home') {echo "class='active'";}?>>Home</a></li>
                        <li class="dropdown">
                            <a  href="?berita=menu&menu=berita" class='dropdown-toggle <?php if ($menu=='berita' || $kategori=='nasional' || $kategori=='dunia') {echo "  active";}?> '
                                data-toggle="dropdown">Berita<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="?berita=kategori&menu=berita&kategori=nasional" <?php if ($kategori=='nasional') {echo "class='active'";}?>>Nasional</a></li>
                                <li class="divider"></li>
                                <li><a href="?berita=kategori&menu=berita&kategori=dunia" <?php if ($kategori=='dunia') {echo "class='active'";}?>>Dunia</a></li>
                            </ul>
                        </li>
                        <li><a href="?berita=kategori&menu=sirah&kategori=sirah" <?php if ($menu=='sirah') {echo "class='active'";}?>>Sirah</a></li>
                        <li class="dropdown">
                            <a  href="?berita=menu&menu=materi" class='dropdown-toggle <?php if ($menu=='materi' || $kategori=='fiqih' || $kategori=='akhlaq' || $kategori=='tauhid') {echo "  active";}?> '
                                data-toggle="dropdown">Materi<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="?berita=kategori&menu=materi&kategori=fiqih" <?php if ($kategori=='fiqih') {echo "class='active'";}?>>Fiqih</a></li>
                                <li class="divider"></li>
                                <li><a href="?berita=kategori&menu=materi&kategori=akhlaq" <?php if ($kategori=='akhlaq') {echo "class='active'";}?>>Akhlaq</a></li>
                                <li class="divider"></li>
                                <li><a href="?berita=kategori&menu=Materi&kategori=tauhid" <?php if ($kategori=='tauhid') {echo "class='active'";}?>>Tauhid</a></li>
                            </ul>
                        </li>
                        <?php
                        $andatau=urldecode('anda tau?');
                        ?>
                        <li><a <?php echo"href='?berita=kategori&menu=$andatau&kategori=$andatau'";  if ($kategori==$andatau) {echo "class='active'";}?>>Anda Tau?</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
            </div>
        </nav>
    </div>
</div>