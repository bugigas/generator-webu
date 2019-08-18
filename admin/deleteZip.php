<?php
include("connect.php");
$id = $_REQUEST['id'];

$sql = ("DELETE FROM myblob where id=$id");
$sel_query = "Select * from myblob where id=$id";
$result = mysqli_query($con, $sel_query);
while ($row = $result->fetch_array(MYSQLI_NUM)) {
    $path = $row['1'];

    unlink($path);
}
if (mysqli_query($con, $sql)) {
    $message = "Uspěšně smazán uživatel";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.close();</script>";

} else {
    echo "ERROR: Nelze smazat $sql. " . mysqli_error($con);
}

?>
