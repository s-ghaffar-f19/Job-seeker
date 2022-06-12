<?php
include 'connection.php';
if (isset($_GET['aid_id'])) {
    $aid_id = ($_GET['aid_id']);

    $query = "DELETE FROM aiddetails WHERE id='$aid_id'";
    $res = mysqli_query($conn, $query);
    header("location:manageAids.php");
}