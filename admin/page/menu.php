<div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                <?php
                if ($_SESSION['level']=='Administrator')
                    echo "Administrator";
                else if($_SESSION['level']=='Moderator')
                    echo "Moderator";
                else if($_SESSION['level']=='Operator')
                    echo "Operator";
                ?>
            </a>
        </div>
        <?php
        $page=isset($_GET['page']) ? $_GET['page'] : 'dasboard';
        ?>
        <ul class="nav">
            <li <?php if ($page=='dasboard') echo "class=\"active\""?>>
                <a href="?page=dasboard">
                    <i class="pe-7s-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li <?php if ($page=='kategori') echo "class=\"active\""?>>
                <a href="?page=kategori">
                    <i class="pe-7s-note2"></i>
                    <p>Kategori</p>
                </a>
            </li>
            <li <?php if ($page=='user') echo "class=\"active\""?>>
                <a href="?page=user">
                    <i class="pe-7s-user"></i>
                    <p>User Profile</p>
                </a>
            </li>

            <li <?php if ($page=='berita') echo "class=\"active\""?>>
                <a href="?page=berita">
                    <i class="pe-7s-news-paper"></i>
                    <p>Berita</p>
                </a>
            </li>
            <li>
                <a href="../index.php" target="_blank">
                    <i class="pe-7s-browser"></i>
                    <p>Islamic News</p>
                </a>
            </li>
        </ul>
    </div>
</div>