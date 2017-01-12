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
                    <a class="navbar-left" href="main.php"><img src="img/logo.png" class="img-responsive" style="max-height:50px"></a>                 
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="result-page.php">Event</a></li>
                        <li><a href="#">Job Opportunities</a></li>
                        <li><a href="#">Social Community</a></li>
                        <li><a href="#">Business Owner</a></li>
                        <li><a href="#">Freelancer</a></li>
                    </ul>                    
                    </li>                   
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="completed-page.php">Event</a></li>
                        <li><a href="company-profile.php">Business</a></li>
                        <li><a href="team.php">Team</a></li>
                        <li><a href="#">Sponsorship</a></li>
                        <li><a href="#">Design</a></li>
                    </ul>                    
                    </li>                 
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notification<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Invite</a></li>
                        <li><a href="#">Message</a></li>
                        <li><a href="#">Friend Request</a></li>
                    </ul>                    
                    </li>
                    <li><a href="#">Help</a></li>       
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
		
<?php include "login-modal.php" ?>
<?php include "cart-modal.php" ?>