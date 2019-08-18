<?php
include('connect.php');
session_start();

$user_check = $_SESSION['login_user'];
$role_check = $_SESSION['role'];


$ses_sql = mysqli_query($con, "select * from users where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['username'];
$role_session=$row['role'];


if (!isset($_SESSION['login_user'])) {
    header("location:../index.php");
    die();
}
?>