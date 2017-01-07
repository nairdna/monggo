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
            .profile-section{
                margin-left: 10px;
                border-left: 3px solid #e95420;
                padding:5px;
            }
            .profile-section a{
                color:black;
            }

            .profile-section.active{
                color:black;
                font-weight:bold;
                background-color:lightgray;
            }
            .statusbar{
                list-style-type: none;
                margin:0;
                padding:0;
            }
            .statusbar li{
                display:inline;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <!-- navbar -->
        <?php include "navbar.php" ?>

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div>
                        <img src="img/monggo.png" class="img-responsive">
                        <h3 style="margin:0">EventMonggo</h3>  
                        <a href="http://www.eventmonggo.com">eventmonggo.com</a>
                    </div>
                    <h4 class="profile-section active"><a href="#about">Home</a></h4>
                    <h4 class="profile-section"><a href="#track">Posts</a></h4>
                    <h4 class="profile-section"><a href="#track">Videos</a></h4>
                    <h4 class="profile-section"><a href="#track">Photos</a></h4>
                </div>
                <div class="col-md-8">
                    <img src="img/banner.jpg" class="img-responsive">
                    <h3 id="about" style="margin-top:10px">About EventMonggo</h3>
                    <p>Our startup are Integrated Multiplatform focused on event. Someone who are independent that have creative ideas and desired to make it live as event must using Monggo because we helped so much for eventmaker with our features and etc.</p>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul class="statusbar">
                                <li><strong>Status</strong></li>
                                <li><strong>Photos/Videos</strong></li>
                                <li><strong>Offers/Events</strong></li>
                            </ul>
                        </div>
                            <div class="panel-body">
                                <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                    <img class="media-object" src="img/monggo.png" width="40" height="40">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <form>
                                        <textarea class="form-control" placeholder="Write something"></textarea>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                    <img class="media-object" src="img/monggo.png" width="40" height="40">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><strong>EventMonggo</strong></h4>
                                    Two days ago
                                    <br>
                                </div>
                            </div>
                        </div>
                            <div class="panel-body">
                                EventMonggo is going live soon! Stay tuned!
                            </div>
                        </div>
                </div>

                <div class="col-md-2">
                    <h4>Upcoming Events!</h4>
                <table class="table-condensed table-bordered table-striped">
                <thead>
                    <tr>
                      <th colspan="7">
                        <span class="btn-group text-center" style="width:100%; padding-left:10px;">
                            <button class="btn"><i class="glyphicon glyphicon-chevron-left"></i></button>
                        	<button class="btn">Jan 2017</button>
                        	<button class="btn"><i class="glyphicon glyphicon-chevron-right"></i></button>
                        </span>
                      </th>
                    </tr>
                    <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="muted">29</td>
                        <td class="muted">30</td>
                        <td class="muted">31</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td class="btn-primary"><strong>20</strong></td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td class="muted">1</td>
                        <td class="muted">2</td>
                        <td class="muted">3</td>
                    </tr>
                </tbody>
            </table>
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