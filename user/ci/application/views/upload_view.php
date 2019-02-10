<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Create Activity</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'resources/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'resources/dropify/css/dropify.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
    <div class="row">
        <div class="col-6 offset-md-3">
            <h4>Create Activity</h4>
            <form action="<?php echo site_url('upload/do_upload');?>" method="post" enctype="multipart/form-data">

    
              <div class="form-group">
                <label for="exampleInputFile"></label>
                <input type="file" class="dropify" name="filefoto" data-height="300">
              </div>
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" name="category" class="form-control" placeholder="Category">
                </div>
                <div class="form-group">
                    <input type="text" name="fees" class="form-control" placeholder="Fees">
                </div>
                <div class="form-group">
                    <input type="text" name="venue" class="form-control" placeholder="Venue">
                </div>
                <div class="form-group">
                    <input type="text" name="date" class="form-control" placeholder="Date">
                </div>
                <div class="form-group">
                    <input type="text" name="time" class="form-control" placeholder="Time">
                </div>
                <div class="form-group">
                    <input type="text" name="desc" class="form-control" placeholder="Description">
                </div>
                <div class="form-group">
                    <input type="text" name="mobileno" class="form-control" placeholder="Contact Number">
                </div>
              <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            
        </div>
    </div>
        
</div>


<!--<script type="text/javascript" src="--><?php //echo base_url().'resources/js/jquery-3.2.1.js'?><!--"></script>-->
<!--<script type="text/javascript" src="--><?php //echo base_url().'resources/js/bootstrap.js'?><!--"></script>-->
<!--<script type="text/javascript" src="--><?php //echo base_url().'resources/dropify/js/dropify.js'?><!--"></script>-->

<script type="text/javascript">
	$(document).ready(function(){
		$('.dropify').dropify();
	});

</script>
</body>
</html>