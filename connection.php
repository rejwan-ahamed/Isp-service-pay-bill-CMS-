<?php
$server = "localhost";
    $username = "root";
    $password = "";
    $db = "project-3";

    $con = mysqli_connect($server, $username, $password, $db);

    if (!$con) {
        die("check the connection error" . mysqli_connect());
    }
    // echo "connection sucessfull you are awesome";

?>
