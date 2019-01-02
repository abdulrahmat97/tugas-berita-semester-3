<div class="banner">
    <div class="container">
        <div class="banner-inner">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
                        <div class="banner-info">
                            <h3>Duduklah bersama orang-orang yang mencintai Allah, karena bersama mereka akan mencerahkan pikiran.
                            </h3>
                            <p>Umar bin Khattab</p>
                        </div>
                    </li>
                    <li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                        <div class="banner-info">
                            <h3>Jangan menjelaskan tentang dirimu kepada siapapun, karena yang menyukaimu tidak butuh itu. Dan yang membencimu tidak percaya itu.
                                </h3>
                            <p>Ali bin Abi Thalib</p>
                        </div>
                    </li>
                    <li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                        <div class="banner-info">
                            <h3>Kebanyakan Manusia Hidup dalam kelalaian,sementara ia tak sadar kain kafannya sedang di tenun</h3>
                            <p>Imam Syafi'i</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--banner-Slider-->
            <script src="js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav:false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
        </div>
    </div>
</div>