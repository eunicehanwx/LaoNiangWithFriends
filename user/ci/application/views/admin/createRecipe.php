<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-3Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Activity</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/ui_admin/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/ui_admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/ui_admin/css/sb-admin.css');?>" rel="stylesheet">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/ui_admin/vendor/datatables/dataTables.bootstrap4.css');?>" rel="stylesheet">


</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">
        <img src="<?php echo base_url('assets/ui_admin/lib/LNWF_logo2.png');?>" height="30px" width="30px"/>
    </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <!--        <li class="nav-item dropdown no-arrow mx-1">-->
        <!--            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"-->
        <!--               aria-haspopup="true" aria-expanded="false">-->
        <!--                <i class="fas fa-bell fa-fw"></i>-->
        <!--                <span class="badge badge-danger">9+</span>-->
        <!--            </a>-->
        <!--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">-->
        <!--                <a class="dropdown-item" href="#">Action</a>-->
        <!--                <a class="dropdown-item" href="#">Another action</a>-->
        <!--                <div class="dropdown-divider"></div>-->
        <!--                <a class="dropdown-item" href="#">Something else here</a>-->
        <!--            </div>-->
        <!--        </li>-->
        <!--        <li class="nav-item dropdown no-arrow mx-1">-->
        <!--            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"-->
        <!--               aria-haspopup="true" aria-expanded="false">-->
        <!--                <i class="fas fa-envelope fa-fw"></i>-->
        <!--                <span class="badge badge-danger">7</span>-->
        <!--            </a>-->
        <!--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">-->
        <!--                <a class="dropdown-item" href="#">Action</a>-->
        <!--                <a class="dropdown-item" href="#">Another action</a>-->
        <!--                <div class="dropdown-divider"></div>-->
        <!--                <a class="dropdown-item" href="#">Something else here</a>-->
        <!--            </div>-->
        <!--        </li>-->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/AdminMain/dashboard')?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/AdminActivity/viewActivity')?>">
                <i class="fas fa-th-list"></i>
                <span>Review all activity requests</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/AdminActivity/createActivity')?>">
                <i class="fab fa-wpforms"></i>
                <span>Create New Activity</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/AdminRecipe/viewRecipe') ?>">
                <i class="fas fa-th-list"></i>
                <span>Review all recipe request</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/AdminRecipe/createRecipe') ?>">
                <i class="fab fa-wpforms"></i>
                <span>Create New Recipe</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/AdminManageClient/viewClient')?>">
                <i class="fas fa-handshake"></i>
                <span>View all clients</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/AdminManageClient/createClient')?>">
                <i class="fas fa-handshake"></i>
                <span>Create Clients</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/AdminActivity/viewActivityCat')?>">
                <i class="fab fa-wpforms"></i>
                <span>Categories</span></a>
        </li>

        <!--        <li class="nav-item">-->
        <!--            <a class="nav-link" href="--><?php //echo base_url('index.php/AdminActivity/createActivityCat')?><!--">-->
        <!--                <i class="fab fa-wpforms"></i>-->
        <!--                <span>Create New Category</span></a>-->
        <!--        </li>-->
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Review Recipe Requests</li>
            </ol>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Create new recipes ...
                </div>
                <div class="card-body">
                    <form method="post" action="" id="createForm" role="form" enctype="multipart/form-data" >

                        <div class="controls">
                            <label>Upload Photo:</label>
                            <input name="file" type="file"  id="image_file">
                            <p class="help-block"></p>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" name="recipe_name" id="recipe_name" class="form-control" placeholder="Recipe name" required="required" autofocus="autofocus">
                                <label for="recipe_name">Recipe name</label>
                            </div>
                        </div>
<!--                        <div class="form-group">-->
<!--                            <div class="form-label-group">-->
<!--                                <input type="text" name="activity_category" id="activity_category" class="form-control" placeholder="Activity category" required="required">-->
<!--                                <label for="activity_category">Category</label>-->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="form-group">
                            <div class="form-label-group">
                                <!--                                                    <input type="option" name="activity_status" id="activity_status" class="form-control" placeholder="Activity status" required="required">-->
                                <!--                                                    <label for="activity_status">Status</label>-->
                                <select name="recipe_cuisine" id="recipe_cuisine" class="form-control" placeholder="Recipe cuisine">
                                    <option value="">Select Cuisine</option>
                                    <?php foreach($cuisines as $cuisine) { ?>

                                        <option value="<?php echo $cuisine->cuisine_name; ?>"><?php echo $cuisine->cuisine_name; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                        </div>

<!--                        <p>*Insert Recipe Photo Blob here*<span id="activity_image"></span></p>-->

                        <div class="form-group">
                            <label for="recipe_step">Steps</label>
                            <textarea class="form-control" name="recipe_step" id="recipe_step" rows="7" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="recipe_ingredient">Ingredient</label>
                            <textarea class="form-control" name="recipe_ingredient" id="recipe_ingredient" rows="7" required></textarea>
                        </div>

                        <div class = "modal-footer">
                            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
                                Close
                            </button>

                            <button type="submit" id="btnSave" class = "btn btn-primary" name = "btnSave">
                                Create
                            </button>
                        </div>
                    </form>

                </div>
                <div class="card-footer small text-muted">
                    Updated at
                    <?php
                    date_default_timezone_set('Asia/Singapore');
                    $date = date('d/m/Y h:i:s a', time());
                    echo $date;
                    ?>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url('index.php/AdminAuth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/ui_admin/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/ui_admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/ui_admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/ui_admin/vendor/chart.js/Chart.min.js');?>"></script>
<script src="<?php echo base_url('assets/ui_admin/vendor/datatables/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('assets/ui_admin/vendor/datatables/dataTables.bootstrap4.js');?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/ui_admin/js/sb-admin.min.js');?>"></script>

<!-- Demo scripts for this page-->
<script src="<?php echo base_url('assets/ui_admin/js/demo/datatables-demo.js');?>"></script>
<script src="<?php echo base_url('assets/ui_admin/js/demo/chart-area-demo.js');?>"></script>

<script>
    $(document).ready(function() {
        $("#createForm").submit(function(e) {

            var recName = $("#recipe_name").val();
            var recCui = $("#recipe_cuisine").val();
            var recStep = $("#recipe_step").val();
            var recIng = $("#recipe_ingredient").val();
            var url = "<?php echo site_url('index.php/AdminRecipe/ajax_create') ?> ";

            $('#btnSave').text('saving...'); //change button text
            $('#btnSave').attr('disabled',true); //set button disable

            $.ajax({
                url : url,
                method: "POST",
                data: new FormData(this),
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                    // {recipe_name: recName, recipe_cuisine: recCui, recipe_ingredients: recIng},
                //     activity_date: actDate, activity_time: actTime, activity_fees: actFees,
                //     activity_mobile_num: actMobileNum, activity_desc: actDesc},
                success: function(data)
                {
                    alert('Successfully created!!');
                    top.location.href="<?php echo base_url('index.php/AdminRecipe/viewRecipe')?>";
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                    $('#btnSave').text('Save changes'); //change button text
                    $('#btnSave').attr('disabled',false); //set button enable

                }
            });
        });
    });


</script>

</body>

</html>
