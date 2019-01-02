<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <?php
                if ($page=='dasboard') echo "Dasboard";
                if ($page=='kategori') echo "Kategori";
                if ($page=='user') echo "User";
                if ($page=='berita') echo "Berita";
                ?>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="page/logout.php">
                        <p>Log out</p>
                    </a>
                </li>
                <li class="separator "></li>
            </ul>
        </div>
    </div>
</nav>