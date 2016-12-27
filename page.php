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
            .orange-panel{
                border-left: 5px solid #e95420;
            }
            .vcenter {
                padding-top:2%;
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
                <h3>EVENT DESCRIPTION</h3>
                <div class="row">
                <p class="col-md-12">Bekraf Game Prime 2016 merupakan bentuk evolusi dari Game Developers Gathering (GDG) yang setiap tahun menjadi ajang berkumpulnya para pelaku industri game di Indonesia. Dengan sedikit perubahan identitas ini, event ini bukan  hanya akan menjadi event industri game B2B dan B2C terbesar di Indonesia, akan tetapi juga akan menjadi salah satu yang terbesar di Asia Tenggara.                
                <div class="col-md-2"></div>
                <img src="img/gameprime.jpg" class="col-md-8 img-responsive">       
                <div class="col-md-2"></div>
                </p>

                <div class="col-md-12">
                <h4>Workshop</h4>
                <p>Ada juga berbagai macam workshop yang bisa diikuti untuk meningkatkan skill di bidang game development dari Unity, Mintsphere, dan Microsoft. Diharapkan setelah mengikuti workshop, peserta sudah memiliki portofolio sendiri.</p>

                <h4>Prime Connect</h4>
                <p>Ingin mencari investor atau publisher baru? Siapkan portofolio terbaikmu dan tunjukkan kepada beberapa investor dan publisher besar di sini!</p>

                <h4>Networking</h4>
                <p>Bertemu dengan rekan-rekan developer, publisher, investor, media dan pelaku industri game dari kota lain, untuk membuka kesempatan kolaborasi baru.</p>
                </div>

                <div class="col-md-2"></div>
                <img src="img/network.jpg" class="col-md-8 img-responsive">       
                <div class="col-md-2"></div>
                
                <div class="col-md-12">
                <h4>Artist Alley</h4>
                <p>Melihat pameran karya para Artist dan designer lokal berbakat di Indonesia.</p>

                <h4>Board Game Area</h4>
                <p>Rasakan serunya bermain aneka board game yang tersedia bersama peserta lainnya.</p>

                <h4>VR Play Area</h4>
                <p>Rasakan serunya bermain di dunia Virtual Reality dengan berbagai macam jenis game yang dapat dicoba.</p>
                </div>

                <div class="col-md-2"></div>
                <img src="img/vr.jpg" class="col-md-8 img-responsive">       
                <div class="col-md-2"></div>

                </div>
                <h3>Benefits for participants</h3>
                <hr>
                <ol>
                <li>Mendapatkan materi seminar “Zero to One” yang tidak pernah ada di seminar manapun.</li>
                <li>Mendapatkan makan siang berupa snack.</li>
                <li>Bagi VIP :
                <ul>
                <li>Duduk paling depan.</li>
                <li>Ekslusif foto dan tanda tangan bersama Merry Riana.</li>
                <li>Gratis sesi perkenalan untuk life academy untuk 1 keluarga yang senilai 100 ribu.</li>
                <li>Gratis sesi perkenalan public speaking school untuk 1 keluarga yang senilai 100 ribu.</li>
                <li>Gratis sesi perkenalan Merry Riana Accelerated School untuk 1 keluarga yang senilai 100 ribu.</li>
                </li>
                </ol>                

                <h3>Collaborators</h3>
                <hr>
                <div class="col-md-2"><img src="img/haagen.png" class="img-responsive"></div><div class="col-md-2 vcenter"><h4>Häagen-Dazs</h4></div>
                <div class="col-md-2"><img src="img/br.png" class="img-responsive"></div><div class="col-md-2 vcenter"><h4>Baskin Robbin</h4></div>


                <h3 class="col-md-12">Location</h3>
                <div id="map" style="width:100%;height:300px"></div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3">
                Dec 22
                <h3>BEKRAF <br> Game Prime Jakarta</h3>
                <button class="btn btn-primary" style="margin-right:5px;">Volunteers Wanted!</button>                
                <hr>
                Created by: <br>
                <a href = "#">Ivan Siswanto</a>
                <br><br>
                Venue: <br>
                Balai Kartini Jakarta
                <br><br>
                <h4>Tickets</h4>
                <div class="panel panel-default blue-panel">
                    <div class="panel-body">
                        <div class="col-md-8 text-left" style="padding-left:0 !important;">
                            <h5 style="margin-top:0 !important">Bronze Class Ticket</h5>
                                Rp 540.000
                        </div>
                        <div class="col-md-4" style="padding-right:0 !important;">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default blue-panel">
                    <div class="panel-body">
                        <div class="col-md-8 text-left" style="padding-left:0 !important;">
                            <h5 style="margin-top:0 !important">Silver Class Ticket</h5>
                                Rp 540.000
                        </div>
                        <div class="col-md-4" style="padding-right:0 !important;">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default blue-panel">
                    <div class="panel-body">
                        <div class="col-md-8 text-left" style="padding-left:0 !important;">
                            <h5 style="margin-top:0 !important">Gold Class Ticket</h5>
                                Rp 540.000
                        </div>
                        <div class="col-md-4" style="padding-right:0 !important;">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-block" data-toggle="modal" data-target="#cart-modal">Add to cart</button>

            </div>
        </div>
        </div>
        
        <?php include "cart-modal.php" ?>
        

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
            center: new google.maps.LatLng(-6.241018, 106.628202), 
            zoom: 15
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:mapOptions.center});
        marker.setMap(map);
        }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyAok-AmT12cjgAH3IPVvX-blSIuQhvazjw"></script>

    </body>
</html>