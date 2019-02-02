<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Product List</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('resources/css/bootstrap.css');?>" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1><center>Activity List</center></h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Activity Name</th>
            <th scope="col">Fees</th>
            <th width="200">Action</th>
        </tr>
        </thead>
        <?php
        $count = 0;
        foreach ($activity->result() as $row) :
            $count++;
            ?>
            <tr>
                <th scope="row"><?php echo $count;?></th>
                <td><?php echo $row->activity_name;?></td>
                <td><?php echo number_format($row->activity_fees);?></td>
                <td>
                    <a href="<?php echo site_url('upload/get_edit/'.$row->activity_id);?>" class="btn btn-sm btn-info">Update</a>
                    <a href="<?php echo site_url('upload/delete/'.$row->activity_id);?>" class="btn btn-sm btn-danger">Delete</a>
                <td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>

</div>

<!-- load jquery js file -->
<script src="<?php echo base_url('resources/js/jquery-3.2.1.js');?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('resources/js/bootstrap.js');?>"></script>

</body>
</html>