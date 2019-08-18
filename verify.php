<?php
include "admin/connect.php";
session_start();
if (isset($_POST['submit'])) {

    include "admin/connect.php";/* připojení k databázi */
    $login = mysqli_real_escape_string($con,$_POST["username"]);
    $heslo = mysqli_real_escape_string($con,$_POST["password"]);
    $role = mysqli_real_escape_string($con,$_POST["role"]);
    $md5heslo = md5($heslo);

    $sql=" select * from users where username = '$login' and password = '$md5heslo'";
    $dotaz = mysqli_query($con,$sql);
    $overeni = mysqli_num_rows($dotaz);
    $row = mysqli_fetch_array($con,$dotaz);
    if ($overeni == 1) {
        session_start();
        $_SESSION['id'] = $row["id"];
        $_SESSION['login_user'] = stripslashes($login);

        header("Location: admin/index.php");
        die();
    } else {
        echo "Zadal jsi špatný login nebo heslo!";
    }

}
?>