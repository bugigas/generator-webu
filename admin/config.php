<?php
include("connect.php");

if (isset($_POST['addTemp'])) {
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


    $sql = "INSERT INTO `branches` (`id`,`doveze_url`,`description`, `keywords`, `title`, `autor`, `hnadpis` ,`hpodnadpis`, `onas`,`logoname`,`mime`,`logo`,`gmap`,`social_fb`,`social_inst`,`kont_misto`,`kont_cislo`,`kont_email`,`open_po`,`close_po`,`open_ut`,`close_ut`, `open_st`, `close_st`,`open_ct`,`close_ct`,`open_pa`,`close_pa`,`open_so`,`close_so`,`open_ne`,`close_ne`,`footer`) 
    VALUES (NULL,'$doveze_url','$description', '$keywords', '$title', '$autor', '$hnadpis', '$hpodnadpis', '$onas','$filename','$filetype','$datalogo','$gmap','$social_fb','$social_inst','$kont_misto','$kont_cislo','$kont_email','$open_po','$close_po','$open_ut','$close_ut','$open_st','$close_st','$open_ct','$close_ct','$open_pa','$close_pa','$open_so','$close_so','$open_ne','$close_ne','$footer')";

    if (mysqli_query($con, $sql)) {
        $message = "Uspěšně vytvořena šablona";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.close();</script>";

    } else {
        echo "ERROR: Nelze zapsat data $sql. " . mysqli_error($con);
    }
}



?>
