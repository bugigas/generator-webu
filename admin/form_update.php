<?php
session_start();
include("connect.php");
include('session.php');
?>
<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Toto je web generator.">
    <meta name="keywords" content="web generator, generator, template">

    <title>Web generátor</title>
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>


</head>

<body id="page-top">

<div id="wrapper">
    <?php include "assets/inc/header.php" ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Úspěšně</strong> provedeno.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Chyba!</strong> zkontrolujte údaje.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Main Content -->
        <div id="content">
            <?php include "assets/inc/topbar.php" ?>
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800" block="title">Upravení šablony</h1>
                    <div>
                        <a href="index.php?page=show" class="btn btn-success"><i class="fas fa-plus mr-1"></i> Seznam
                            dat poboček</a>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Upravení šablony</h6>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="py-2">
                                        <form id="myFormTempUpdate" novalidate>
                                            <?php
                                            include("connect.php");
                                            $id = $_REQUEST['id'];
                                            $result = $con->query("SELECT * FROM branches where id=$id");

                                            if ($result->num_rows > 0) {

                                                while ($row = $result->fetch_array(MYSQLI_NUM)) {
                                                    $imageData=$row['11'];
                                                    echo '
  <input type="hidden" class="form-control" name="id" id="id"
                                           value="' . $row['0'] . '"/>
                            <div class="form-row">
                          
                                <div class="col-md-6 mb-3">
                                    <label for="file">Logo obrázek - max 16Mb.</label>
                                    <input type="file" class="form-control" name="file" id="file"
                                           value="data:'.$row['10'].';base64,'.base64_encode($imageData).'"/>
                                           ';

                                                    if (!empty($imageData)) {
                                                        echo ' <img id="imgPreview" style="max-width:200px;" src="data:'.$row['10'].';base64,'.base64_encode($imageData).'"
                                         draggable="false">';
                                                    } else {
                                                        echo '
                                <img id="imgPreview" style="max-width:250px;"
                                         src="assets/no-preview-available.png"
                                         alt="obrázek k náhledu" draggable="false">';
                                                    }

                                                    echo '
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="doveze_url">Doveze URL</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"
                                                          id="inputGroupPrepend">www.</span>
                                                </div>
                                                
                                                <input type="text" class="form-control" name="doveze_url"
                                                       id="doveze_url" value="' . $row['1'] . '" required>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">

                                        <div class="col-md-6 mb-3">
                                            <label for="title">Meta tag title / Název</label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                   value="' . $row['4'] . '" required>

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="autor">Meta tag Autor</label>
                                            <input type="text" class="form-control" name="autor" id="autor"
                                                   value="' . $row['5'] . '" required>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="description">Meta tag description</label>
                                    <input type="text" class="form-control" name="description" id="description"
                                           value="' . $row['2'] . '" required>
                                    <small id="description" class="form-text text-muted">Meta tag description slouží k
                                        popisu vaší stránky.</small>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="keywords">Meta tag keywords</label>
                                    <textarea class="form-control" name="keywords" id="keywords" rows="1" required>' . $row['3'] . '</textarea>
                                    <small id="keywords" class="form-text text-muted">Meta tag keywords - v pár slovech
                                        uveďte kličové slova o vaší
                                        stránce.</small>

                                </div>
                            </div>
                            <div class="form-row">

                                <div class="col-md-6 mb-3">
                                    <label for="hnadpis">Nadpis hlavička</label>
                                    <input type="text" class="form-control" name="hnadpis" id="hnadpis"
                                           value="' . $row['6'] . '" required>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="hpodnadpis">Podnadpis hlavička</label>
                                    <input type="text" class="form-control" name="hpodnadpis" id="hpodnadpis"
                                           value="' . $row['7'] . '" required>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="onas">O nás - text</label>
                                    <textarea class="form-control" name="onas" id="onas" rows="3" required>' . $row['8'] . '</textarea>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="social_fb">Facebook adresa</label>
                                    <input type="text" class="form-control" name="social_fb" id="social_fb"
                                           value="' . $row['13'] . '" >

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="social_inst">Instagram adresa</label>
                                    <input type="text" class="form-control" name="social_inst" id="social_inst"
                                           value="' . $row['14'] . '" >

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="gmap">Google mapa</label>
                                    <input type="text" class="form-control" name="gmap" id="gmap"
                                           value="' . $row['12'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="kont_misto">Kontakt místo</label>
                                    <input type="text" class="form-control" name="kont_misto" id="kont_misto"
                                           value="' . $row['15'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="kont_cislo">Tel.číslo</label>
                                    <input type="text" class="form-control" name="kont_cislo" id="kont_cislo"
                                           value="' . $row['16'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="kont_email">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>

                                        <input type="email" class="form-control" name="kont_email" id="kont_email"
                                               value="' . $row['17'] . '" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="col-md-3 mb-3">
                                    <label for="open_po">Pondělí od:</label>

                                    <input type="time" class="form-control" name="open_po" id="open_po"
                                           value="' . $row['18'] . '" required>


                                </div>
                                <div class="col-md-3 mb-3">

                                    <label for="close_po">Do:</label>
                                    <input type="time" class="form-control" name="close_po" id="close_po"
                                           value="' . $row['19'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_ut">Úterý od:</label>

                                    <input type="time" class="form-control" name="open_ut" id="open_ut"
                                           value="' . $row['20'] . '" required>


                                </div>
                                <div class="col-md-3 mb-3">

                                    <label for="close_ut">Do:</label>
                                    <input type="time" class="form-control" name="close_ut" id="close_ut"
                                           value="' . $row['21'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_st">Středa od:</label>

                                    <input type="time" class="form-control" name="open_st" id="open_st"
                                           value="' . $row['22'] . '" required>


                                </div>
                                <div class="col-md-3 mb-3">

                                    <label for="close_st">Do:</label>
                                    <input type="time" class="form-control" name="close_st" id="close_st"
                                           value="' . $row['23'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_ct">Čtvrtek od:</label>

                                    <input type="time" class="form-control" name="open_ct" id="open_ct"
                                           value="' . $row['24'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="close_ct">Do:</label>
                                    <input type="time" class="form-control" name="close_ct" id="close_ct"
                                           value="' . $row['25'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_pa">Pátek od:</label>

                                    <input type="time" class="form-control" name="open_pa" id="open_pa"
                                           value="' . $row['26'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="close_pa">Do:</label>
                                    <input type="time" class="form-control" name="close_pa" id="close_pa"
                                           value="' . $row['27'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_so">Sobota od:</label>

                                    <input type="time" class="form-control" name="open_so" id="open_so"
                                           value="' . $row['28'] . '" required>


                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="close_so">Do:</label>
                                    <input type="time" class="form-control" name="close_so" id="close_so"
                                           value="' . $row['29'] . '" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="open_ne">Neděle od:</label>

                                    <input type="time" class="form-control" name="open_ne" id="open_ne"
                                           value="' . $row['30'] . '" required>


                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="close_ne">Do:</label>
                                    <input type="time" class="form-control" name="close_ne" id="close_ne"
                                           value="' . $row['31'] . '" required>

                                </div>
                            </div>
                            <div class="form-row">

                                <div class="col-md-12 mb-3">
                                    <label for="footer">Footer</label>
                                    <input type="text" class="form-control" name="footer" id="footer"
                                           value="' . $row['32'] . '" required>
                                </div>
                            </div>

                            ';
                                                }
                                            } ?>
                                            <input type="hidden" name="updateTemp" value="data1" id="updateTemp"/>
                                            <!-- ajax hidden for post isset -->
                                            <input type="submit" class="btn btn-primary" name="formUpdate"
                                                   value="Upravit záznamy v db"/>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>DEEP VISION &copy; 2019</span>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script>

    ClassicEditor
        .create(document.querySelector('#onas'), {
            toolbar: ['undo', 'redo', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote']
        })

        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>


<!-- Bootstrap core JavaScript-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/ajax.js"></script>
</body>

</html>



