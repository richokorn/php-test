<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$connection_string = 'localhost', 'php_test', 'php_test', 'php_test';

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'demo');

/* Attempt to connect to MySQL database */
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$link = pg_connect(string $connection_string, int $flags = 0): PgSql\Connection|false

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>