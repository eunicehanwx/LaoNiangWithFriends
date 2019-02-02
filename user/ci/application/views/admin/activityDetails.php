<?php
    include('server.php');
    $activity_id = $_GET["activity_id"];
    $activity_check_query = mysqli_query($db, "SELECT * FROM activity WHERE activity_id = $activity_id");

    $activity = mysqli_fetch_object($activity_check_query);
    echo json_encode($activity);

?>