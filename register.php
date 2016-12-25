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
        </style>
    </head>
    <body>
        <!-- navbar -->
        <?php include "navbar.php" ?>

        <div class="container">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-4" style="padding-top:10%">
                    <button class="btn btn-primary btn-block" style="background-color:#4286c1; border-color:#4286c1; font-weight:bold">Register with  <img src="img/glyph-facebook.png" style="filter:invert(100%)"> acebook</button>
                    <button class="btn btn-primary btn-block" style="background-color:#fff; border-color:#4286c1; color:#606060; font-weight:bold">Register with <img src="img/gplus.png" width="24" height="24">oogle</button>
                    <button class="btn btn-primary btn-block" style="background-color:#754cbf; border-color:#754cbf; color:#fff; font-weight:bold">Register with <img src="img/yahoo.png" style="filter:brightness(0) invert(100%)" width="24" height="24">ahoo</button>
                </div>
                <div class="col-md-2">
                </div>

                <div class="col-md-4">
                    <form class="form-horizontal">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="repassword">Retype password</label>
                        <input type="password" class="form-control" id="repassword" placeholder="Retype password">
                    </div>
                    <div class="form-group">
                        <label for="birth">Date of Birth</label>
                        <input type="date" size="10" class="form-control" id="birth">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox"> Remember me
                            </label>
                        </div>
                        </div>
                        <div class="col-sm-6 text-right">
                        <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                    </form>                    
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