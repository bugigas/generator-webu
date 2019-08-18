<?php
include("connect.php");

if (isset($_POST["addUser"])) {
    $username = mysqli_real_escape_string($con, $_REQUEST['username']);
    $password = mysqli_real_escape_string($con, $_REQUEST['password']);
    $role = mysqli_real_escape_string($con, $_REQUEST['role']);

    $sql = "INSERT INTO users (username,password,role) VALUES ('$username',md5('$password'), '$role')";

    if (mysqli_query($con, $sql)) {
        $message = "Uspěšně přidán uživatel";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.close();</script>";

    } else {
        echo "ERROR: Nelze přidat $sql. " . mysqli_error($con);
    }
}
if (isset($_POST["user_name"])) {
    $username = mysqli_real_escape_string($con, $_POST["user_name"]);
    $query = "SELECT * FROM users WHERE username = '" . $username . "'";
    $result = mysqli_query($con, $query);
    echo mysqli_num_rows($result);
}
?>
