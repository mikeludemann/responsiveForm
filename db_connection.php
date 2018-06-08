<?php

$servername = "localhost";
$database = "contact_feedback";
$username = "root";
$password = "admin";

// Create connection

$connection = new mysqli($servername, $username, $password, $database);

// Checking connection

define("FAILED", "Connection failed");
define("SUCCESS", "Connection successfull");

if (!$connection) {

    die(FAILED);
    consoleLog(mysqli_errno);
    consoleLog(mysqli_error);

} else {

    consoleLog(SUCCESS);

}

function consoleLog($data){

    echo '<script>';
    echo 'console.log('. $data .')';
    echo '</script>';

}

?>