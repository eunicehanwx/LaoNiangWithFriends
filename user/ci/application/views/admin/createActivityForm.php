<?php
include('server.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form

    $activity_name = $_POST["activity_name"];
    $activity_category = $_POST["activity_category"];
    $activity_venue = $_POST["activity_venue"];
    $activity_time = $_POST["activity_time"];
    $activity_date = $_POST["activity_date"];
    $activity_desc = $_POST["activity_desc"];
    $activity_fees = $_POST["activity_fees"];
    $activity_mobile_num = $_POST["activity_mobile_num"];
    $activity_image = $_POST["activity_image"];
    $activity_status = $_POST["activity_status"];

//echo ($activity_name);

    $insert_activity_details_query = "INSERT INTO activity (activity_name, activity_category, activity_venue,
                      activity_time, activity_date, activity_desc, activity_fees,
                      activity_mobile_num, activity_image, activity_status)
                      VALUES ('" . $activity_name . "', '" . $activity_category . "', '" . $activity_venue . "', '" . $activity_time . "',
                                '" . $activity_date . "', '" . $activity_desc . "', '" . $activity_fees . "', '" . $activity_mobile_num . "',
                                '" . $activity_image . "', '" . $activity_status . "')";

    $activity_check_query = mysqli_query($db, $insert_activity_details_query);
    $activity = mysqli_fetch_object($activity_check_query);
//echo json_encode($activity);
}
?>