<?php

$con = mysqli_connect("localhost", "minispeedlo_db", "MsmgWS9hMKi", "generator_webu");

if (!$con) {
    echo "Error: Nelze se připojit k databázi." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>