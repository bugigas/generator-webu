<?php

$con = mysqli_connect("localhost", "minispeedlo_db", "MsmgWS9hMKi", "generator_webu");

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>