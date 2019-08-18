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


        <!-- Main Content -->
        <div id="content">
            <?php include "assets/inc/topbar.php" ?>
            <div class="alert alert-success alert-dismissible fade show m-auto" role="alert">
                <strong>Úspěšně</strong> provedeno.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger alert-dismissible fade show m-auto" role="alert">
                <strong>Chyba!</strong> zkontrolujte údaje.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container-fluid">
                <?php

                /* $fileList = glob('zip/*');

                 foreach ($fileList as $filename) {

                     echo '<a href="/generator-webu/admin/' . $filename . '">' . $filename . '</a>';
                 }*/

                if ($_GET['page']) {
                    $page = $_GET['page'];
                    $display = $page . '.php';
                    include($display);
                } else {
                    echo '

                 <h1>Generátor webu - domovská stránka</h1>
        
';
                }
                ?>

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
