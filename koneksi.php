<?php
    $con = mysqli_connect("localhost","root","","sig");
    mysqli_select_db($con, "sig");
    if ($con->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
?>
