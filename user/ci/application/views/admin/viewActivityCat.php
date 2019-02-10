<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-3Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Category</title>

    <!-- Bootstrap CSS-->
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
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
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
            <a class="nav-link" href="<?php echo base_url('index.php/AdminActivity/viewActivity')?>">
                <i class="fas fa-th-list"></i>
                <span>Review all requests</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/AdminActivity/createActivity')?>">
                <i class="fab fa-wpforms"></i>
                <span>Create New Activity</span></a>
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

        <li class="nav-item active">
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
                <li class="breadcrumb-item active">Review Category</li>
            </ol>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Create new category for activities ...
                </div>
                <div class="card-body">
                    <form method="post" action="" id="createCat" role="form">
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" name="create_category_name" id="create_category_name" class="form-control" placeholder="Create category name" required="required" autofocus="autofocus">
                                <label for="create_category_name">Category name</label>
                            </div>
                        </div>

                        <div class = "modal-footer">
                            <button type="submit" id="btnSave" class = "btn btn-primary" name = "btnSave">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    All Categories ...
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Activity Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($categories as $category) { ?>
                                    <tr>
<!--                                        <td>--><?php //echo $category->category_id; ?><!--</td>-->
                                        <td><?php echo $category->category_name; ?></td>

                                        <td>
                                            <!-- Button edit/review trigger modal -->
                                            <button id=" <?php echo $category->category_id; ?> " onclick='reviewDetails(this);' class = "btn btn-primary" data-toggle = "modal" data-target = "#editModal">
                                                <i class="far fa-edit"></i>
                                                <span></span>
                                            </button>

                                            <!-- Button view trigger modal -->
                                            <button id=" <?php echo $category->category_id; ?> " onclick='showDetails(this);' class = "btn btn-primary" data-toggle = "modal" data-target = "#viewModal">
                                                <i class="far fa-eye"></i>
                                                <span></span>
                                            </button>

                                            <!-- Button remove trigger modal -->
                                            <button id=" <?php echo $category->category_id; ?> " onclick='deleteDetails(this);' class = "btn btn-primary" data-toggle = "modal" data-target = "#deleteModal">
                                                <i class="far fa-trash-alt"></i>
                                                <span></span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>


                    </div>
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

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Once deleted, unable to undo.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="">Confirm</a>
            </div>
        </div>
    </div>
</div>

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

<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class = "modal-title" id = "myModalLabel">
                    <!--This Modal title-->
                    <span id="activity_name_title_v"></span>
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" value="" name="category_id_v" id="category_id_v"/>


                <p>*Insert Activity Photo Blob here*<span id="category_image_v"></span></p>

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" name="category_name_v" id="category_name_v" class="form-control" placeholder="Category name" required="required" autofocus="autofocus" readonly>
                        <label for="activity_name">Category name</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--                    <button type="button" class="btn btn-primary">Save changes</button>-->
                    <button type="submit" id="btnSave" class = "btn btn-primary" name = "btnSave">
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Activity Modal -->
<div class = "modal fade" id = "editModal" tabindex = "-1" role = "dialog"
     aria-labelledby = "myModalLabel" aria-hidden = "true">

    <div class = "modal-dialog">
        <div class = "modal-content">

            <div class = "modal-header">
                <h4 class = "modal-title" id = "myModalLabel">
                    <!--This Modal title-->
                    <span id="category_name_title"></span>
                </h4>

                <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                    &times;
                </button>
            </div>

            <div class = "modal-body">
                <form method="post" action="" id="editForm" role="form">
                    <input type="hidden" value="" name="category_id" id="category_id"/>


<!--                    <p>*Insert Activity Photo Blob here*<span id="category_image"></span></p>-->

                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Category name" required="required" autofocus="autofocus">
                            <label for="activity_name">Category name</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--                    <button type="button" class="btn btn-primary">Save changes</button>-->
                        <button type="submit" id="btnSave" class = "btn btn-primary" name = "btnSave">
                            Edit
                        </button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->

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
    //new category
    $(document).ready(function() {
        $("#createCat").submit(function(e) {
            // var actNameT = $("#activity_name_title").val();
            // var actId = $("#activity_id").val();
            // var actStatus = $("#activity_status").val();
            var catName = $("#create_category_name").val();
            var url = "<?php echo site_url('index.php/AdminActivity/ajax_cat_create') ?> ";

            $('#btnSave').text('saving...'); //change button text
            $('#btnSave').attr('disabled',true); //set button disable

            $.ajax({
                url : url,
                method: "POST",
                data: {category_name: catName},
                success: function(data)
                {
                    alert("success");

                    top.location.href="<?php echo base_url('index.php/AdminActivity/viewActivityCat')?>";
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


    $(document).ready(function() {
        $("#editForm").submit(function(e) {
            // var actNameT = $("#activity_name_title").val();
            var catId = $("#category_id").val();
            var catName = $("#category_name").val();
            var url = "<?php echo site_url('index.php/AdminActivity/ajax_cat_update') ?> ";

            $('#btnSave').text('saving...'); //change button text
            $('#btnSave').attr('disabled',true); //set button disable

            $.ajax({
                url : url,
                method: "POST",
                data: {category_name: catName, category_id: catId},
                success: function(data)
                {
                    alert("success");
                    $('#editModal').modal('hide');

                    $('#btnSave').text('Save changes'); //change button text
                    $('#btnSave').attr('disabled',false); //set button enable

                    table.ajax.reload(null,false); //reload datatable ajax
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

    function reviewDetails(button) {

        var category_id = button.id;
        category_id = category_id.replace(/\s+/g, '');

        alert(category_id);
        //AJAX call to get activity_id details
        $.ajax({
            url: "<?php echo site_url('index.php/AdminActivity/ajax_cat_edit/')?>/" + category_id,
            method: "GET",
            // dataType: "JSON",
            success: function(data) {
                // alert(data);
                var data = JSON.parse(data);

                // $("#activity_name_title").text(activity.activity_name);
                // $("#activity_name").text(activity.activity_name);
                // $("#activity_category").text(activity.activity_category);
                // $("#activity_venue").text(activity.activity_venue);
                // $("#activity_date").text(activity.activity_date);
                // $("#activity_time").text(activity.activity_time);
                // $("#activity_fees").text(activity.activity_fees);
                // $("#activity_mobile_num").text(activity.activity_mobile_num);
                // $("#activity_desc").text(activity.activity_desc);


                // alert(data.activity_name);
                $("#category_id").val(data.category_id);
                $("#category_name").val(data.category_name);
            }

        });
    }

    function showDetails(button) {

        var category_id = button.id;
        category_id = category_id.replace(/\s+/g, '');

        alert(category_id);
        //AJAX call to get activity_id details
        $.ajax({
            url: "<?php echo site_url('index.php/AdminActivity/ajax_cat_edit/')?>/" + category_id,
            method: "GET",
            // dataType: "JSON",
            success: function(data) {
                // alert(data);
                var data = JSON.parse(data);

                // alert(data.activity_name);
                $("#category_id_v").val(data.category_id);
                $("#category_name_v").val(data.category_name);
            }

        });
    }

    function deleteDetails(button) {

        var category_id = button.id;
        category_id = category_id.replace(/\s+/g, '');

        alert(category_id);
        //AJAX call to get activity_id details
        $.ajax({
            url: "<?php echo site_url('index.php/AdminActivity/ajax_cat_delete/')?>/" + category_id,
            method: "GET",
            // dataType: "JSON",
            success: function(data) {
                //if success reload ajax table
                if(data.status) {
                    $('#deleteModal').modal('hide');
                    table.ajax.reload(null, false);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }

        });
    }
</script>

</body>

</html>
