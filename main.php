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
            .thumbnail{
                position:relative;
            }
            .price{
                position: absolute;
                right: 4px;
                top: 10px;
                background:#e95420;
                color:white;
                margin:0;
                font-size:16pt;
                border: 1px solid white;
                padding:5px;
            }
        </style>
    </head>
    <body>
        <!-- navbar -->
        <?php include "navbar.php" ?>

        <div class="container"> 
            <div class="row">
                <h2 class="text-center">Events</h2>
                <div class="thumbnail col-md-6">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        <div class="col-md-8" style="padding:0">
                            Monday, June 28, 2017<br>
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>            

                <div class="thumbnail col-md-6">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        <div class="col-md-8" style="padding:0">
                            Monday, June 28, 2017<br>
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>

                <div class="thumbnail col-md-3">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        Monday, June 28, 2017
                        <div class="col-md-8" style="padding:0">
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>

                <div class="thumbnail col-md-3">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        Monday, June 28, 2017
                        <div class="col-md-8" style="padding:0">
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>

                <div class="thumbnail col-md-3">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        Monday, June 28, 2017
                        <div class="col-md-8" style="padding:0">
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>

                <div class="thumbnail col-md-3">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        Monday, June 28, 2017
                        <div class="col-md-8" style="padding:0">
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>

                <div class="thumbnail col-md-3">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        Monday, June 28, 2017
                        <div class="col-md-8" style="padding:0">
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>

                <div class="thumbnail col-md-3">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        Monday, June 28, 2017
                        <div class="col-md-8" style="padding:0">
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>

                <div class="thumbnail col-md-3">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        Monday, June 28, 2017
                        <div class="col-md-8" style="padding:0">
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>

                <div class="thumbnail col-md-3">
                    <a href="page.php">
                        <img src="img/1.jpg" alt="Placeholder">
                    </a>
                    <h3 class="price">
                        150K
                    </h3>
                    <div class="caption">
                        Monday, June 28, 2017
                        <div class="col-md-8" style="padding:0">
                            From Zero to hero<br>
                            Jakarta Convention Center
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> 
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-bullhorn"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">

                </div>
                <div class="col-md-2 text-right">
                    <a role="button" href="result-page.php" class="btn btn-primary btn-block">See more</a>
                </div>
        </div>
        </div>

        <!-- footer -->
        <?php include "footer.php" ?>
    </body>
</html>