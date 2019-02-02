<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Activity</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('resources/css/bootstrap.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'resources/dropify/css/dropify.css'?>">
</head>
<body>

<div class="container">
    <h1><center>Edit Product</center></h1>
    <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('upload/update');?>" method="post">

            <div class="form-group">
                <label for="exampleInputFile"></label>
                <input type="file" class="dropify" name="filefoto" data-height="300">

            </div>
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="activity_name" value="<?php echo $activity_name?>" placeholder="Activity Name">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="activity_fees" value="<?php echo $activity_fees;?>" placeholder="Price">
            </div>
            <input type="hidden" name="activity_id" value="<?php echo $activity_id?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url().'resources/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'resources/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'resources/dropify/js/dropify.js'?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify();
    });
</script>

</body>
</html>