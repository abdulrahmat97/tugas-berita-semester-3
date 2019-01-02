<div class="modern">
    <h4 class="side">Make it modern</h4>
    <div id="example1">
        <div id="owl-demo" class="owl-carousel text-center">
            <div class="item">

                <img class="img-responsive lot" src="images/p1.jpg" alt=""/>
            </div>
            <div class="item">

                <img class="img-responsive lot" src="images/p2.jpg" alt=""/>
            </div>
            <div class="item">

                <img class="img-responsive lot" src="images/p33.jpg" alt=""/>
            </div>
            <div class="item">

                <img class="img-responsive lot" src="images/p1.jpg" alt=""/>
            </div>
            <div class="item">

                <img class="img-responsive lot" src="images/p1.jpg" alt=""/>
            </div>
            <div class="item">

                <img class="img-responsive lot" src="images/p2.jpg" alt=""/>
            </div>
            <div class="item">

                <img class="img-responsive lot" src="images/p33.jpg" alt=""/>
            </div>
            <div class="item">

                <img class="img-responsive lot" src="images/p1.jpg" alt=""/>
            </div>
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