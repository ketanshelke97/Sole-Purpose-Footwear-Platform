<?php

    $servername = "SERVER_NAME_HERE";
    $username = "USERNAME_HERE";
    $password = "PASSWORD_HERE";
    $database = "DATABASE_NAME_HERE";
    // $port = 3307;
    mysqli_report(MYSQLI_REPORT_ERROR);
    $connection = mysqli_connect($servername, $username, $password, $database);
    if (!$connection){
        die("Connection failed!" . mysqli_connect_error());
    }
    // echo "Connection was successful.<br>";

?>
