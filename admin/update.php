<?php
include("connect.php");
if (isset($_POST['updateTemp'])) {
    $id = mysqli_real_escape_string($con, $_REQUEST['id']);
    $doveze_url = mysqli_real_escape_string($con, $_REQUEST['doveze_url']);
    $description = mysqli_real_escape_string($con, $_REQUEST['description']);
    $keywords = mysqli_real_escape_string($con, $_REQUEST['keywords']);
    $title = mysqli_real_escape_string($con, $_REQUEST['title']);
    $autor = mysqli_real_escape_string($con, $_REQUEST['autor']);
    $hnadpis = mysqli_real_escape_string($con, $_REQUEST['hnadpis']);
    $hpodnadpis = mysqli_real_escape_string($con, $_REQUEST['hpodnadpis']);
    $onas = mysqli_real_escape_string($con, $_REQUEST['onas']);
    $gmap = mysqli_real_escape_string($con, $_REQUEST['gmap']);
    $social_fb = mysqli_real_escape_string($con, $_REQUEST['social_fb']);
    $social_inst = mysqli_real_escape_string($con, $_REQUEST['social_inst']);
    $kont_misto = mysqli_real_escape_string($con, $_REQUEST['kont_misto']);
    $kont_cislo = mysqli_real_escape_string($con, $_REQUEST['kont_cislo']);
    $kont_email = mysqli_real_escape_string($con, $_REQUEST['kont_email']);
    $open_po = mysqli_real_escape_string($con, $_REQUEST['open_po']);
    $close_po = mysqli_real_escape_string($con, $_REQUEST['close_po']);
    $open_ut = mysqli_real_escape_string($con, $_REQUEST['open_ut']);
    $close_ut = mysqli_real_escape_string($con, $_REQUEST['close_ut']);
    $open_st = mysqli_real_escape_string($con, $_REQUEST['open_st']);
    $close_st = mysqli_real_escape_string($con, $_REQUEST['close_st']);
    $open_ct = mysqli_real_escape_string($con, $_REQUEST['open_ct']);
    $close_ct = mysqli_real_escape_string($con, $_REQUEST['close_ct']);
    $open_pa = mysqli_real_escape_string($con, $_REQUEST['open_pa']);
    $close_pa = mysqli_real_escape_string($con, $_REQUEST['close_pa']);
    $open_so = mysqli_real_escape_string($con, $_REQUEST['open_so']);
    $close_so = mysqli_real_escape_string($con, $_REQUEST['close_so']);
    $open_ne = mysqli_real_escape_string($con, $_REQUEST['open_ne']);
    $close_ne = mysqli_real_escape_string($con, $_REQUEST['close_ne']);
    $footer = mysqli_real_escape_string($con, $_REQUEST['footer']);
 /*   $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $mtrand = mt_rand(1, 1000000);
    $folder = "assets/img/tmp_" . $mtrand . '_' . $filename;
    move_uploaded_file($tempname, $folder);*/
    $filename =  mysqli_real_escape_string($con,$_FILES['file']['name']);
    $filetype = mysqli_real_escape_string($con,$_FILES['file']['type']);
    $datalogo=mysqli_real_escape_string($con,file_get_contents($_FILES['file']['tmp_name']));


    if (!empty($filename)) {
        $sql = "UPDATE `branches` SET doveze_url = '$doveze_url',description = '$description', keywords='$keywords', title='$title', autor='$autor', hnadpis= '$hnadpis' ,hpodnadpis= '$hpodnadpis', onas='$onas', logoname='$filename', mime='$filetype',logo='$datalogo',gmap='$gmap',social_fb='$social_fb',social_inst='$social_inst',kont_misto='$kont_misto',kont_cislo='$kont_cislo',kont_email='$kont_email', open_po='$open_po',close_po='$close_po',open_ut='$open_ut',close_ut='$close_ut',open_st='$open_st',close_st='$close_st',open_ct='$open_ct',close_ct='$close_ct',open_pa='$open_pa',close_pa='$close_pa',open_so='$open_so',close_so='$close_so',open_ne='$open_ne',close_ne='$close_ne',footer='$footer' where id='$id'";

    } else {
        $sql = "UPDATE `branches` SET doveze_url = '$doveze_url',description = '$description', keywords='$keywords', title='$title', autor='$autor', hnadpis= '$hnadpis' ,hpodnadpis= '$hpodnadpis', onas='$onas',gmap='$gmap',social_fb='$social_fb',social_inst='$social_inst',kont_misto='$kont_misto',kont_cislo='$kont_cislo',kont_email='$kont_email', open_po='$open_po',close_po='$close_po',open_ut='$open_ut',close_ut='$close_ut',open_st='$open_st',close_st='$close_st',open_ct='$open_ct',close_ct='$close_ct',open_pa='$open_pa',close_pa='$close_pa',open_so='$open_so',close_so='$close_so',open_ne='$open_ne',close_ne='$close_ne',footer='$footer'  where id='$id' ";
    }

    if (mysqli_query($con, $sql)) {
        $message = "Šablona byla upravena";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.close();</script>";
    } else {
        echo "ERROR: Nelze zapsat data $sql. " . mysqli_error($con);
    }
}

?>

