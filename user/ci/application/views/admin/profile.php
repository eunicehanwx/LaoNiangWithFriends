<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/ui_admin/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/ui_admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/ui_admin/css/sb-admin.css');?>" rel="stylesheet">

    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            height:200px;
            width:200px;
            padding:10px;
        }

    </style>
</head>

<body class="bg-dark">

<div class="col-lg-5 col-lg-offset-2">
    <h1>Profile</h1>
    <?php
    if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"> <?php echo $_SESSION['success'];?></div>
    <?php
    }?>

    HELLO, <?php echo $_SESSION['admin_name'];?>

    <br><br>

    <a href="<?php echo base_url('index.php/AdminAuth/logout');?>">Logout</a>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/ui_admin/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/ui_admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/ui_admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

</body>

</html>
