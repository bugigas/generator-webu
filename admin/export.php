<?php

include("connect.php");

if (isset($_GET['export1'])) {
    $id = $_REQUEST['id'];

    $return = '';

    $result = mysqli_query($con, "SELECT * FROM `branches` where id=$id ");
    $num_fields = mysqli_num_fields($result);

    //$return .= "DROP TABLE `" . $tablename . "` ;";
    $row2 = mysqli_fetch_row(mysqli_query($con, "SHOW CREATE TABLE `branches`"));
    $return .= "\n\n" . $row2[1] . ";\n\n";

    for ($i = 0; $i < $num_fields; $i++) {
        while ($row = mysqli_fetch_row($result)) {
            $return .= "INSERT INTO `branches` VALUES(";
            for ($j = 0; $j < $num_fields; $j++) {
                $row[$j] = addslashes($row[$j]);
                if (isset($row[$j])) {
                    $return .= '"' . $row[$j] . '"';
                } else {
                    $return .= '""';
                }
                if ($j < $num_fields - 1) {
                    $return .= ',';
                }
            }
            $return .= ");\n";
        }
    }
    $return .= "\n\n\n";

//ulozeni sql
    $handle = fopen("../template/template1/backup.sql", "w+");
    fwrite($handle, $return);
    fclose($handle);


    //vytvoreni zipu
    date_default_timezone_set('Europe/Prague');
    $t = time();
    $zip = new ZipArchive();
    $filename = "zip/".date("H-i-s-Y-m-d", $t) . ".zip";

    if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {

        exit("nejde otevřít <$filename>\n");

    }


    $dir = '../template/template1/';


    createZip($zip, $dir);
    $zip->close();


    $sql3 = "INSERT into `myblob` (`id`,`name`,`id_branches`) VALUES (NULL,'$filename','$id')";

    if (mysqli_query($con, $sql3)) {

        $message = "Uspěšně vytvořen .zip soubor";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.close();</script>";
    } else {
        echo "ERROR: Nelze zapsat data $sql3. " . mysqli_error($con);
    }


    //echo "Uspěšně exportováno";
}

if (isset($_GET['export2'])) {
    $id = $_REQUEST['id'];

    $return = '';

    $result = mysqli_query($con, "SELECT * FROM `branches` where id=$id ");
    $num_fields = mysqli_num_fields($result);

    //$return .= "DROP TABLE `" . $tablename . "` ;";
    $row2 = mysqli_fetch_row(mysqli_query($con, "SHOW CREATE TABLE `branches`"));
    $return .= "\n\n" . $row2[1] . ";\n\n";

    for ($i = 0; $i < $num_fields; $i++) {
        while ($row = mysqli_fetch_row($result)) {
            $return .= "INSERT INTO `branches` VALUES(";
            for ($j = 0; $j < $num_fields; $j++) {
                $row[$j] = addslashes($row[$j]);
                if (isset($row[$j])) {
                    $return .= '"' . $row[$j] . '"';
                } else {
                    $return .= '""';
                }
                if ($j < $num_fields - 1) {
                    $return .= ',';
                }
            }
            $return .= ");\n";
        }
    }
    $return .= "\n\n\n";

//ulozeni sql
    $handle = fopen("../template/template2/backup.sql", "w+");
    fwrite($handle, $return);
    fclose($handle);


    //vytvoreni zipu
    date_default_timezone_set('Europe/Prague');
    $t = time();
    $zip = new ZipArchive();
    $filename = "zip/".date("H-i-s-Y-m-d", $t) . ".zip";

    if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {

        exit("nejde otevřít <$filename>\n");

    }


    $dir = '../template/template2/';

    createZip($zip, $dir);

    $zip->close();

    $sql3 = "INSERT into `myblob` (`id`,`name`) VALUES (NULL,'$filename')";

    if (mysqli_query($con, $sql3)) {

        $message = "Uspěšně vytvořen .zip soubor";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.close();</script>";
    } else {
        echo "ERROR: Nelze zapsat data $sql3. " . mysqli_error($con);
    }


    //echo "Uspěšně exportováno";
}

if (isset($_GET['export3'])) {
    $id = $_REQUEST['id'];

    $return = '';

    $result = mysqli_query($con, "SELECT * FROM `branches` where id=$id ");
    $num_fields = mysqli_num_fields($result);

    //$return .= "DROP TABLE `" . $tablename . "` ;";
    $row2 = mysqli_fetch_row(mysqli_query($con, "SHOW CREATE TABLE `branches`"));
    $return .= "\n\n" . $row2[1] . ";\n\n";

    for ($i = 0; $i < $num_fields; $i++) {
        while ($row = mysqli_fetch_row($result)) {
            $return .= "INSERT INTO `branches` VALUES(";
            for ($j = 0; $j < $num_fields; $j++) {
                $row[$j] = addslashes($row[$j]);
                if (isset($row[$j])) {
                    $return .= '"' . $row[$j] . '"';
                } else {
                    $return .= '""';
                }
                if ($j < $num_fields - 1) {
                    $return .= ',';
                }
            }
            $return .= ");\n";
        }
    }
    $return .= "\n\n\n";

//ulozeni sql
    $handle = fopen("../template/template3/backup.sql", "w+");
    fwrite($handle, $return);
    fclose($handle);

    //vytvoreni zipu
    date_default_timezone_set('Europe/Prague');
    $t = time();
    $zip = new ZipArchive();
    $filename = "zip/".date("H-i-s-Y-m-d", $t) . ".zip";

    if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {

        exit("nejde otevřít <$filename>\n");

    }


    $dir = '../template/template3/';

    createZip($zip, $dir);

    $zip->close();

    $sql3 = "INSERT into `myblob` (`id`,`name`) VALUES (NULL,'$filename')";

    if (mysqli_query($con, $sql3)) {

        $message = "Uspěšně vytvořen .zip soubor";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.close();</script>";
    } else {
        echo "ERROR: Nelze zapsat data $sql3. " . mysqli_error($con);
    }

}

if (isset($_GET['export4'])) {
    $id = $_REQUEST['id'];

    $return = '';

    $result = mysqli_query($con, "SELECT * FROM `branches` where id=$id ");
    $num_fields = mysqli_num_fields($result);

    //$return .= "DROP TABLE `" . $tablename . "` ;";
    $row2 = mysqli_fetch_row(mysqli_query($con, "SHOW CREATE TABLE `branches`"));
    $return .= "\n\n" . $row2[1] . ";\n\n";

    for ($i = 0; $i < $num_fields; $i++) {
        while ($row = mysqli_fetch_row($result)) {
            $return .= "INSERT INTO `branches` VALUES(";
            for ($j = 0; $j < $num_fields; $j++) {
                $row[$j] = addslashes($row[$j]);
                if (isset($row[$j])) {
                    $return .= '"' . $row[$j] . '"';
                } else {
                    $return .= '""';
                }
                if ($j < $num_fields - 1) {
                    $return .= ',';
                }
            }
            $return .= ");\n";
        }
    }
    $return .= "\n\n\n";

//ulozeni sql
    $handle = fopen("../template/template4/backup.sql", "w+");
    fwrite($handle, $return);
    fclose($handle);

    //vytvoreni zipu
    date_default_timezone_set('Europe/Prague');
    $t = time();
    $zip = new ZipArchive();
    $filename = "zip/".date("H-i-s-Y-m-d", $t) . ".zip";

    if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {

        exit("nejde otevřít <$filename>\n");

    }


    $dir = '../template/template4/';

    createZip($zip, $dir);

    $zip->close();

    $sql3 = "INSERT into `myblob` (`id`,`name`) VALUES (NULL,'$filename')";

    if (mysqli_query($con, $sql3)) {

        $message = "Uspěšně vytvořen .zip soubor";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.close();</script>";
    } else {
        echo "ERROR: Nelze zapsat data $sql3. " . mysqli_error($con);
    }

}

if (isset($_GET['export5'])) {
    $id = $_REQUEST['id'];

    $return = '';

    $result = mysqli_query($con, "SELECT * FROM `branches` where id=$id ");
    $num_fields = mysqli_num_fields($result);

    //$return .= "DROP TABLE `" . $tablename . "` ;";
    $row2 = mysqli_fetch_row(mysqli_query($con, "SHOW CREATE TABLE `branches`"));
    $return .= "\n\n" . $row2[1] . ";\n\n";

    for ($i = 0; $i < $num_fields; $i++) {
        while ($row = mysqli_fetch_row($result)) {
            $return .= "INSERT INTO `branches` VALUES(";
            for ($j = 0; $j < $num_fields; $j++) {
                $row[$j] = addslashes($row[$j]);
                if (isset($row[$j])) {
                    $return .= '"' . $row[$j] . '"';
                } else {
                    $return .= '""';
                }
                if ($j < $num_fields - 1) {
                    $return .= ',';
                }
            }
            $return .= ");\n";
        }
    }
    $return .= "\n\n\n";

//ulozeni sql
    $handle = fopen("../template/template5/backup.sql", "w+");
    fwrite($handle, $return);
    fclose($handle);

    //vytvoreni zipu
    date_default_timezone_set('Europe/Prague');
    $t = time();
    $zip = new ZipArchive();
    $filename = "zip/".date("H-i-s-Y-m-d", $t) . ".zip";

    if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {

        exit("nejde otevřít <$filename>\n");

    }


    $dir = '../template/template5/';

    createZip($zip, $dir);

    $zip->close();
    $sql3 = "INSERT into `myblob` (`id`,`name`) VALUES (NULL,'$filename')";

    if (mysqli_query($con, $sql3)) {

        $message = "Uspěšně vytvořen .zip soubor";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.close();</script>";
    } else {
        echo "ERROR: Nelze zapsat data $sql3. " . mysqli_error($con);
    }

}

if (isset($_GET['export6'])) {
    $id = $_REQUEST['id'];

    $return = '';

    $result = mysqli_query($con, "SELECT * FROM `branches` where id=$id ");
    $num_fields = mysqli_num_fields($result);

    //$return .= "DROP TABLE `" . $tablename . "` ;";
    $row2 = mysqli_fetch_row(mysqli_query($con, "SHOW CREATE TABLE `branches`"));
    $return .= "\n\n" . $row2[1] . ";\n\n";

    for ($i = 0; $i < $num_fields; $i++) {
        while ($row = mysqli_fetch_row($result)) {
            $return .= "INSERT INTO `branches` VALUES(";
            for ($j = 0; $j < $num_fields; $j++) {
                $row[$j] = addslashes($row[$j]);
                if (isset($row[$j])) {
                    $return .= '"' . $row[$j] . '"';
                } else {
                    $return .= '""';
                }
                if ($j < $num_fields - 1) {
                    $return .= ',';
                }
            }
            $return .= ");\n";
        }
    }
    $return .= "\n\n\n";

//ulozeni sql
    $handle = fopen("../template/template6/backup.sql", "w+");
    fwrite($handle, $return);
    fclose($handle);

    //vytvoreni zipu
    date_default_timezone_set('Europe/Prague');
    $t = time();
    $zip = new ZipArchive();
    $filename = "zip/".date("H-i-s-Y-m-d", $t) . ".zip";

    if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {

        exit("nejde otevřít <$filename>\n");

    }


    $dir = '../template/template6/';

    createZip($zip, $dir);

    $zip->close();
    $sql3 = "INSERT into `myblob` (`id`,`name`) VALUES (NULL,'$filename')";

    if (mysqli_query($con, $sql3)) {

        $message = "Uspěšně vytvořen .zip soubor";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.close();</script>";
    } else {
        echo "ERROR: Nelze zapsat data $sql3. " . mysqli_error($con);
    }

}

function createZip($zip, $dir)
{
    if (is_dir($dir)) {

        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {

                if (is_file($dir . $file)) {
                    if ($file != '' && $file != '.' && $file != '..') {

                        $zip->addFile($dir . $file);

                    }
                } else {

                    if (is_dir($dir . $file)) {

                        if ($file != '' && $file != '.' && $file != '..') {

                            $zip->addEmptyDir($dir . $file);

                            $folder = $dir . $file . '/';

                            createZip($zip, $folder);
                        }
                    }

                }

            }
            closedir($dh);
        }
    }
}

?>
