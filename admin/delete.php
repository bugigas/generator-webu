<?php
include("connect.php");
$id = $_REQUEST['id'];

$sql = ("DELETE FROM branches where id=$id");
if (mysqli_query($con, $sql)) {
    $message = "Uspěšně smazána šablona";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.close();</script>";

} else {
    echo "ERROR: Nelze smazat $sql. " . mysqli_error($con);
}

?>

