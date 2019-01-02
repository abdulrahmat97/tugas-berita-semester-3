<div class="modern">
    <h4 class="side">Motivation Videos</h4>
    <div id="example1">
        <div id="owl-demo" class="owl-carousel text-center">
            <?php
            $kategori=isset($_GET['kategori']) ? $_GET['kategori'] : 'home';
            for($i=1;$i<=8;$i++){
                echo "
                 <div class='item'>
                       <video class='img-responsive lot' src='admin/video_berita/$i.mp4' controls";
                        if($i==1 && $kategori=='home')echo " autoplay";
                        echo "></video>
                 </div>
                ";
            }
            ?>
        </div>
    </div>
    <!-- requried-jsfiles-for owl -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items :1,
                lazyLoad : true,
                autoPlay : false,
                navigation : true,
                navigationText :  true,
                pagination : false,
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
    <!-- //requried-jsfiles-for owl -->
</div>