<?php
    // This file logs the user out and redirects them to the homepage.
    session_start();

    session_unset();
    session_destroy();

    header("location: index.php"); // Redirect to the homepage
    exit;

?>
