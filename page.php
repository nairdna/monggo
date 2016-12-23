<html>
    <head>
        <title>Monggo</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-pVJelSCJ58Og1XDc2E95RVYHZDPb9AVyXsI8NoVpB2xmtxoZKJePbMfE4mlXw7BJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
            p{
                text-align: justify;
            }
            .carousel{
                background:none;
                margin-bottom:10px;
            }
            .carousel-inner img { 
                max-height:400px;
                margin: auto;
            }

            .carousel-caption h3 {
                color: #fff !important;
            }

            @media (max-width: 600px) {
                .carousel-caption {
                    display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
                }
            }
			.hide-bullets {
				list-style:none;
				margin-left: -40px;
				margin-top:20px;
			}
			.affix{
				top: 10px;
			}
			.affix-bottom {
			  position: absolute;
			}
        </style>
    </head>
    <body>
        <!-- navbar -->
        <?php include "navbar.php" ?>

        <div class="container">
            <div class="row">
            <!-- category -->
            <?php include "category-list.php" ?>            

            <div class="col-lg-7 col-md-7 col-sm-6">
                <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/770x300&text=one"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/770x300&text=two"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/770x300&text=three"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/770x300&text=four"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/770x300&text=five"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/770x300&text=six"></div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                            </li>
                        </ul>                 
                </div>
        </div>
                <h3>DJAKARTA WAREHOUSE PROJECT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor massa ac congue imperdiet. Duis euismod diam eget blandit sollicitudin. Proin malesuada et nibh at molestie. Fusce in elit vitae arcu aliquet elementum. Etiam nec sapien id velit dictum dignissim. Aliquam hendrerit libero sit amet lacus interdum, non aliquam ligula egestas. Donec molestie, nunc vel viverra tincidunt, risus metus congue nibh, eget porta neque ante nec urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras cursus nisi nec sodales auctor. In et tristique risus. Nullam pellentesque eros eget gravida egestas.</p>

                <p>In risus enim, venenatis eget urna at, gravida luctus orci. Etiam convallis purus a urna scelerisque auctor. Duis id aliquet velit, quis tempus justo. Donec vel ex mi. Maecenas nec consequat risus, sit amet pharetra quam. Ut aliquet in augue eget imperdiet. Nam quis eleifend urna. Proin tristique massa quis tristique fermentum. Pellentesque hendrerit sed orci at lobortis. In consequat elit nec enim ultricies, eget maximus massa ullamcorper. Quisque nec tortor nec leo ullamcorper bibendum at eu ex. Donec posuere et est sit amet laoreet. Mauris id lacinia tellus, non blandit tortor. Donec blandit justo nec eros molestie, non viverra massa hendrerit. Duis ac ipsum tristique, varius dui in, tincidunt nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4>Featuring</h4>
                <div class="col-md-4 text-center"><img src="img/zedd.jpg" class="img-responsive img-circle"><h4>Zedd</h4></div>
                <div class="col-md-4 text-center"><img src="img/zedd.jpg" class="img-responsive img-circle"><h4>Zedd</h4></div>
                <div class="col-md-4 text-center"><img src="img/zedd.jpg" class="img-responsive img-circle"><h4>Zedd</h4></div>
                <h4>Location</h4>
                <div id="map" style="width:100%;height:300px"></div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3">
                Dec 22
                <h3>DJAKARTA WAREHOUSE PROJECT</h3>
                Created by: <br>
                <a href = "#">Ivan Siswanto</a>
                <br><br>
                Venue: <br>
                ICE Indonesia
                <br><br>
                Price range:
                <br>
                Rp 180.000 - Rp 1.800.000
                <button class="btn btn-primary" style="margin-right:5px;">We are recruiting!</button><button class="btn btn-success">Tickets</button>
                <hr>
            </div>
        </div>
        </div>

        <!-- footer -->
        <?php include "footer.php" ?>
        
		<script>
		jQuery(document).ready(function($) {
 
				$('#myCarousel').carousel({
						interval: 5000
				});
		 
				$('#carousel-text').html($('#slide-content-0').html());
		 
				//Handles the carousel thumbnails
			   $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel').carousel(id);
				});
		 
		 
				// When the carousel slides, auto update the text
				$('#myCarousel').on('slid.bs.carousel', function (e) {
						 var id = $('.item.active').data('slide-number');
						$('#carousel-text').html($('#slide-content-'+id).html());
				});
		});

        function myMap() {
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(51.5, -0.2), 
            zoom: 10
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

    </body>
</html>