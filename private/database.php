<?php
//functions related to database
require_once 'db_credentials.php';

//database connection
function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
   confirm_db_connect(); //error checking. connection error handle
    return $connection;
}

function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

function confirm_db_connect()
{
    if (mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}
function db_escape($connection, $string) {
    return mysqli_real_escape_string($connection, $string);
  }

function confirm_result_set($result_set){
    // Test if query succeeded
if (!$result_set) {
	exit("Database query failed.");
    }
}
?>