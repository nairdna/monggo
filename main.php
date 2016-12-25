<html>
    <head>
        <title>Monggo</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-pVJelSCJ58Og1XDc2E95RVYHZDPb9AVyXsI8NoVpB2xmtxoZKJePbMfE4mlXw7BJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
            body{
                position: relative;
            }
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
            .affix{
                top:20px;
            }
        </style>
    </head>
    <body>
        <!-- navbar -->
        <?php include "navbar.php" ?>

        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                    <img src="img/banner.jpg" alt="New York">
                    <div class="carousel-caption">
                    </div> 
                    </div>

                    <div class="item">
                    <img src="img/banner2.png" alt="Chicago">
                    <div class="carousel-caption">
                    </div> 
                    </div>

                    <div class="item">
                    <img src="img/banner3.jpg" alt="Los Angeles">
                    <div class="carousel-caption">
                    </div> 
                    </div>
                </div>
            </div>            
            <div class="row">
            <!-- category -->
            <?php include "category-list.php" ?>

            <div class="col-lg-10 col-md-10 col-sm-9">
                <div class="thumbnail col-md-4">
                    <img src="img/1.jpg" alt="Placeholder">
                    <div class="caption">
                        <a href="page.php"><h3>Festival Seni</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum scelerisque nibh, vel fermentum mauris lacinia vitae. Pellentesque vulputate rhoncus massa, quis auctor urna sagittis nec. </p>
                        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Suka</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span> Bagikan</a></p>
                        <p align="right"></p>
                    </div>
                </div>
                <div class="thumbnail col-md-4">
                    <img src="img/1.jpg" alt="Placeholder">
                    <div class="caption">
                        <a href="page.php"><h3>Festival Seni</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum scelerisque nibh, vel fermentum mauris lacinia vitae. Pellentesque vulputate rhoncus massa, quis auctor urna sagittis nec. </p>
                        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Suka</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span> Bagikan</a></p>
                        <p align="right"></p>
                    </div>
                </div>
                <div class="thumbnail col-md-4">
                    <img src="img/1.jpg" alt="Placeholder">
                    <div class="caption">
                        <a href="page.php"><h3>Festival Seni</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum scelerisque nibh, vel fermentum mauris lacinia vitae. Pellentesque vulputate rhoncus massa, quis auctor urna sagittis nec. </p>
                        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Suka</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span> Bagikan</a></p>
                        <p align="right"></p>
                    </div>
                </div> 
                <div class="thumbnail col-md-4">
                    <img src="img/1.jpg" alt="Placeholder">
                    <div class="caption">
                        <a href="page.php"><h3>Festival Seni</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum scelerisque nibh, vel fermentum mauris lacinia vitae. Pellentesque vulputate rhoncus massa, quis auctor urna sagittis nec. </p>
                        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Suka</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span> Bagikan</a></p>
                        <p align="right"></p>
                    </div>
                </div>
                <div class="thumbnail col-md-4">
                    <img src="img/1.jpg" alt="Placeholder">
                    <div class="caption">
                        <a href="page.php"><h3>Festival Seni</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum scelerisque nibh, vel fermentum mauris lacinia vitae. Pellentesque vulputate rhoncus massa, quis auctor urna sagittis nec. </p>
                        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Suka</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span> Bagikan</a></p>
                        <p align="right"></p>
                    </div>
                </div>
                <div class="thumbnail col-md-4">
                    <img src="img/1.jpg" alt="Placeholder">
                    <div class="caption">
                        <a href="page.php"><h3>Festival Seni</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum scelerisque nibh, vel fermentum mauris lacinia vitae. Pellentesque vulputate rhoncus massa, quis auctor urna sagittis nec. </p>
                        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Suka</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span> Bagikan</a></p>
                        <p align="right"></p>
                    </div>
                </div>
                <div class="thumbnail col-md-4">
                    <img src="img/1.jpg" alt="Placeholder">
                    <div class="caption">
                        <a href="page.php"><h3>Festival Seni</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum scelerisque nibh, vel fermentum mauris lacinia vitae. Pellentesque vulputate rhoncus massa, quis auctor urna sagittis nec. </p>
                        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Suka</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span> Bagikan</a></p>
                        <p align="right"></p>
                    </div>
                </div>
                <div class="thumbnail col-md-4">
                    <img src="img/1.jpg" alt="Placeholder">
                    <div class="caption">
                        <a href="page.php"><h3>Festival Seni</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum scelerisque nibh, vel fermentum mauris lacinia vitae. Pellentesque vulputate rhoncus massa, quis auctor urna sagittis nec. </p>
                        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Suka</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span> Bagikan</a></p>
                        <p align="right"></p>
                    </div>
                </div>
                <div class="thumbnail col-md-4">
                    <img src="img/1.jpg" alt="Placeholder">
                    <div class="caption">
                        <a href="page.php"><h3>Festival Seni</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum scelerisque nibh, vel fermentum mauris lacinia vitae. Pellentesque vulputate rhoncus massa, quis auctor urna sagittis nec. </p>
                        <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Suka</a> <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span> Bagikan</a></p>
                        <p align="right"></p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="text-center">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
            </nav>
        </div>
        </div>

        <!-- footer -->
        <?php include "footer.php" ?>
    </body>
</html>