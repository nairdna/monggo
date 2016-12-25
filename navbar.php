        <!-- navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <a class="navbar-left" href="main.php"><img src="img/logo.png"></a>
                <form class="navbar-form navbar-left">                    
                    <div class="form-group">
                         <input type="text" size="50" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-success form-control">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </form>                    
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>                    
                    </li>
                </ul> 
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><img src="img/cart.png" style="filter:invert(100%)"></a></li>
                    <li><a href="#"><img src="img/group.png" style="filter:invert(100%)"></a></li>
                    <li><a href="#"><img src="img/comments.png" style="filter:invert(100%)"></a></li>
                    <li><a href="#"><img src="img/bell.png" style="filter:invert(100%)"></a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/user.png" style="filter:invert(100%)">&nbsp; &nbsp; Ivan</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="profile.php">Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>                    
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
		
<?php include "modal.php" ?>