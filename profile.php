<!DOCTYPE html>
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
                background: #ff9900;
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
                top:20px;
            }
            .glyphicon-star{
                color:#ff9900;
            }
            .white{
                color:white;
            }
            .vcenter {
                padding-top:5%;
            }
        </style>
    </head>
    <body>
        <!-- navbar -->
        <?php include "navbar.php" ?>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <img src="http://eadb.org/wp-content/uploads/2015/08/profile-placeholder.jpg" class="img-responsive">
                        <div class="progress">
                            <div class="progress-bar progress-bar-default progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                
                            </div>
                            <div class="text-right">
                            <b>40% to lv 5</b>
                            </div>
                        </div>
                        <h3 style="margin:0">Stefanus Ivan Siswanto</h3>  
                        Gading Serpong, South Tangerang
                        Founder and CEO of monggo <br>
                        <a href="http://www.eventmonggo.com">eventmonggo.com</a>
                        
                        <div class="text-center">
                        <div class="col-md-6" style="padding:0; padding-right:10px">
                        <button class="btn btn-primary" style="width:100%">Add as friend</button>
                        </div>
                        <div class="col-md-6" style="padding:0">
                        <button class="btn btn-success" style="width:100%">Message me!</button>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h3 style="margin-top:10px">Education</h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-2">2012 - 2015</div><div class="col-md-6"> SMA Sedes Sapientiae</div><div class="col-md-4">Semarang</div>
                        <div class="col-md-2">2015 - Present</div><div class="col-md-6">Surya University</div><div class="col-md-4">Tangerang</div>
                    </div>
                    <h3>Experience</h3>
                    <hr>
                    <ul style="padding-left: 0; list-style-type: none">
                        <li>Technical Staff at 15<sup>th</sup> World Renewable Energy Congress</li>
                        <li>Finalist of Indosat's IdeaBox</li>
                    </ul>
                    <h3>Business</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-2"><img src="img/br.png" class="img-responsive"></div><div class="col-md-4"><h2>Baskin Robbins</h2><p>Your Favorite Ice Cream!</p></div>
                        <div class="col-md-2"><img src="img/haagen.png" class="img-responsive"></div><div class="col-md-4"><h2>Häagen-Dazs</h2><p>Premium Ice Cream</p></div>
                    </div>
                    <h3 class="text-center">Track Record</h3>
                    <h3>As Eventmaker</h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">Zero to Hero</div>
                        <div class="col-md-4"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span> 4.8</div>
                        <div class="col-md-4">294 Reviews</div>
                    </div>
                    <h3>As Freelancer</h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">Zero to Hero</div>
                        <div class="col-md-4"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span> 3</div>
                        <div class="col-md-4">204 Reviews</div>
                    </div>
                    <h3>As Business Owners</h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">Zero to Hero</div>
                        <div class="col-md-4"><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                        <div class="col-md-4">Not yet reviewed</div>
                    </div>

                    <h3 class="text-center" style="margin-top:50px">Current Collaborators</h3>
                    <h3>Freelancer</h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-2"><img src="img/ivan.jpg" class="img-responsive"></div><div class="col-md-2 vcenter"><h4>Stefanus Ivan</h4></div>
                        <div class="col-md-2"><img src="img/kreshna.png" class="img-responsive"></div><div class="col-md-2 vcenter"><h4>Kreshna Agusta</h4></div>
                        <div class="col-md-2"><img src="img/bodhi.jpg" class="img-responsive"></div><div class="col-md-2 vcenter"><h4>Bodhi Jaya</h4></div>
                    </div>
                    <h3>Business</h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-2"><img src="img/haagen.png" class="img-responsive"></div><div class="col-md-2 vcenter"><h4>Häagen-Dazs</h4></div>
                        <div class="col-md-2"><img src="img/br.png" class="img-responsive"></div><div class="col-md-2 vcenter"><h4>Baskin Robbin</h4></div>
                    </div>
                    <h3>Community</h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-2"><img src="img/goblogit.jpg" class="img-responsive"></div><div class="col-md-2 vcenter"><h4>IT Goblogit</h4></div>
                        <div class="col-md-2"><img src="img/saungit.png" class="img-responsive"></div><div class="col-md-2 vcenter"><h4>Saung IT</h4></div>
                    </div>
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
</script>
    </body>
</html>