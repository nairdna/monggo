<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Monggo</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-pVJelSCJ58Og1XDc2E95RVYHZDPb9AVyXsI8NoVpB2xmtxoZKJePbMfE4mlXw7BJ" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!-- text editor -->
        <!-- include summernote css/js-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">        
        <script src="js/summernote.js"></script>        
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
            #editor{
                min-height:300px !important;
            }
        </style>
    </head>
    <body>
        <!-- navbar -->
        <?php include "navbar.php" ?>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                <h3>Event Details</h3>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="title">Event Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title">
                    </div>
                     <div class="form-group">
                        <label for="location">Location</label>
                        <textarea class="form-control" id="location" placeholder="Location"></textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="startdate">Start Date</label>
                        <input type="date" class="form-control" id="startdate" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="starttime">Start Time</label>
                        <input type="time" class="form-control" id="starttime" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="enddate">End Date</label>
                        <input type="date" class="form-control" id="enddate" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="endtime">End Time</label>
                        <input type="time" class="form-control" id="endtime" >
                    </div>
                    <div class="form-group">
                        <label for="banners">Banners</label>
                        <input type="file" id="banners" class="form-control" style="margin-bottom:5px">
                        <img class="img-thumbnail" src="http://placehold.it/300x150?text=Banner+1">
                        <img class="img-thumbnail" src="http://placehold.it/300x150?text=Banner+2">
                    </div>
                     <div class="form-group">
                        <label for="editor">Event Description</label>
                        <div id="editor">
                            Write here...
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="editor">Event Category</label>
                        <select class="form-control">
                            <option>This</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="number">Contact Number</label>
                        <input type="text" class="form-control" id="number" placeholder="0812 1234 9xxx">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Contact Email</label>
                        <input type="email" class="form-control" id="email" placeholder="your@email.com">
                    </div>
                </form>
                </div>

                <div class="row">
                    <h3>Event Tickets</h3>
                    <hr>
                    <div class="panel panel-primary container-fluid">
                        <div class="panel-heading row">
                            <div class="col-md-6">Ticket Type</div>
                            <div class="col-md-2">Qty</div>
                            <div class="col-md-4">Price</div>
                        </div>
                        <div class="panel-body row">
                            <form>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="0" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="0" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="0" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control">
                            </div>
                            <button class="btn btn-primary btn-block">Add Ticket</button>
                            </form>
                        </div>
                    </div>
                    <button class="btn btn-success btn-block">Create Event!</button>                    
                </div>
            </div>

            <div class="col-md-2"></div>
        </div>

        <!-- footer -->
        <?php include "footer.php" ?>
        <script>
            $(document).ready(function() {
                $('#editor').summernote({
                    minHeight: 200
                });
            });
        </script>
    </body>
</html>