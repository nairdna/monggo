<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="monggo - Event to Connect People">
    <meta name="author" content="monggo">

    <title>Binus Student Learning Community</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
    .mission{
        font-size:24pt; 
        font-weight:bold;
    }
    .divider{
        border:none;
        margin:80px;
    }
</style>
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color:white;border-color: rgba(34, 34, 34, 0.1);">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/" style="color: #222222">Binus Student Learning Community</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="nindyas.php" style="color: #000000">Nindya</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading" style="margin-bottom:40px">
                        <h2>Contact Us!</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid">
						<div class="row">
						  <div class="col-sm-3 col-md-3">
							<h3 style="margin-top:0"><strong>About BSLC</strong></h3>
							<p>BINUS Student Learning Community (BSLC) merupakan komunitas belajar bagi Binusian dari berbagai jurusan untuk meningkatkan prestasi akademik, employability & organizational skills.</p>		
						  </div>							
							

						  <div class="col-sm-3 col-md-3">	
							<p><strong>BSLC – Kemanggisan</strong> <br/>
							Anggrek Campus, R.515 <br/>
							Binus University <br/>
							Jl. Kebon Jeruk Raya No. 27
							</p>
							<p>
							<strong>BSLC – Alam Sutera</strong><br/>
							Alam Sutera, R.SACDC<br/>
							Binus University<br/>
							Jl. Alam Sutera Boulevard No. 1	
							</p>
						  </div>
						  <div class="col-sm-6 col-md-6">
							<form enctype="multipart/form-data" action="tambah.php" method="post">
							  <input type="hidden" value="0" id="no_nindya" name="no_nindya">
							  <div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email" required>
							  </div>
							  <div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" placeholder="Nama" required>
							  </div>
							  <div class="form-group">
								<label for="subjek">Subjek</label>
								<input type="text" class="form-control" id="subjek" placeholder="Subjek" required>
							  </div>
							  <div class="form-group">
								<textarea class="form-control" rows="5" id="pesan" placeholder="Pesan Anda..." required></textarea>
							  </div>
							  <div class="form-group">
							    <input type="reset" class="btn btn-default">
								<button class="btn btn-primary">Submit</button>
							  </div>
							</form>
							</div>
						  </div>
						</div>                        
                    </div>
                </div>
            </div>
    </section>



    <footer>
        <div class="container">
            <p>&copy; 2017 BSLC. All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>
	
	<script>
		function ganti(no,nama,jabatan,gambar){
			document.getElementById('no_nindya').value = no;
			document.getElementById('nama').value = nama.replace('%20',' ');
			document.getElementById('jabatan').value = jabatan.replace('%20',' ');
			document.getElementById('profilepicture').src = gambar;
		}
		
		function baru(){
			document.getElementById('no_nindya').value = 0;
			document.getElementById('nama').value = '';
			document.getElementById('jabatan').value = '';
			document.getElementById('profilepicture').src = "http://via.placeholder.com/250x300?text=Nindya";
		}
	</script>

</body>
</html>
