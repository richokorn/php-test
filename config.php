<?php

// Attempt to connect to PostgreSQL database
$link = pg_connect("host=localhost port=5432 dbname=php_test user=php_test password=php_test");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>