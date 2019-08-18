<?php

include("inc/connect.php");

$id = $_REQUEST['id'];

$sql3 = "SELECT * FROM branches where id=$id ";
if ($result2 = mysqli_query($con, $sql3)) {
    $content = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    mysqli_free_result($result2);
    mysqli_close($con);
} else {
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($con);
}
?>
<!DOCTYPE HTML>
<html xml:lang="cs" lang="cs">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all, follow"/>
    <link rel="canonical" href=""/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="favicon.ico"/>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/css/styles.css" rel="stylesheet">
    <link href="assets/css/foodlist.css" rel="stylesheet">
    <link href="assets/css/fluid-gallery.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <?php foreach ($content as $cont) { ?>

        <meta name="description" content="<?php echo $cont['description']; ?>"/>
        <meta name="keywords" content="<?php echo $cont['keywords']; ?>"/>
        <meta name="author" content="<?php echo $cont['autor']; ?>"/>
        <title><?php echo $cont['title']; ?></title>
    <?php } ?>
</head>

<body id="page-top">
<?php foreach ($content as $cont) { ?>
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#home" title="Logo">
                <?php $imageData = $cont['logo'];
                echo ' <img
                    class="logo"
                    alt="Logo Pizza"
                    src="data:' . $cont['mime'] . ';base64,' . base64_encode($imageData) . '" title="Logo Pizza" draggable="false">'; ?>
            </a>
            <a class="btn btn-primary btn-objednat-mobile" href="<?php echo $cont['doveze_url']; ?>"
               id="btn-menu-mobile"
               role="button" target="_blank" title="Objednat zde">Objednat zde</a>
            <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse"
                    type="button"
                    value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                                class="nav-link js-scroll-trigger" href="#jidelak" title="Menu">Menu</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                                class="nav-link js-scroll-trigger" href="#about" title="O nás">O nás</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                                class="nav-link js-scroll-trigger" href="#gallery" title="Galerie">Galerie</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                                class="nav-link js-scroll-trigger" href="#map" title="Místo">Místo</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                                class="nav-link js-scroll-trigger" href="#contact" title="Kontakt">Kontakt</a></li>
                </ul>
                <a id="btn-shrink" href="<?php echo $cont['doveze_url']; ?>" class="btn btn-primary"
                   role="button"
                   title="Objednat" target="_blank">Objednat</a>
            </div>
        </div>
    </nav>


    <!-------------------- header jumbotron -------------------------->
    <header class="masthead" id="home">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-8 text-center m-auto" data-aos="fade-down" data-aos-duration="1000">
                    <h1><?php echo $cont['hnadpis']; ?></h1>
                    <div class="divBorder" data-aos="fade-up" data-aos-duration="1000">
                        <p><?php echo $cont['hpodnadpis']; ?></p>
                        <a class="btn btn-primary" href="<?php echo $cont['doveze_url']; ?>"
                           role="button" title="Objednat online" target="_blank">Objednat online</a><span
                                class="block-or">nebo</span><a
                                class="btn btn-primary btn-header-jidelak js-scroll-trigger" href="#jidelak"
                                title="Jídelní menu" role="button">Jídelní menu</a></div>
                </div>
            </div>
        </div>

    </header>

    <!---------------- Jidelak -------------------------->
    <section id="jidelak">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
                    <div id="food-list">
                        <div id="loading">Načítání jídelního lístku</div>
                    </div>
                    <script>
                        function replaceNbsps(str) {
                            const re = new RegExp(String.fromCharCode(160), "g");
                            return str.replace(re, " ");
                        }

                        let food = [];

                        $.get('./query.php', function (data, status) {

                        $.each(JSON.parse(data), function (index, value) {

                            $.map(value.companyBranchLookUp.companyBranch.wareCategories, function (item, index) {
                                food.push(item);
                            });
                        });
                        for (l = 0; l < food.length; l++) {
                            if (food[l].recipes.length > 0 && food[l].wareCategoryType.enum === "MAIN") {
                                $('#food-list').append("<h2 class='foodlist-h2' id=" + l + ">" + food[l].nameLabel + "</h2>");

                                let foodRecipes = [];
                                for (x = food[l].recipes.length - 1; x >= 0; x--) {
                                    foodRecipes.push(food[l].recipes[x]);
                                }
                                for (i = 0; i < foodRecipes.length; i++) {
                                    $("#" + l).after("<div class='item-list'><div class='item-list-name'>" + foodRecipes[i].nameLabel + "</div><div class='item-list-price'>" + foodRecipes[i].prices[0].price.formattedValue + "</div><div class='item-list-ingredience'>" + replaceNbsps(foodRecipes[i].descriptionLabel) + "</div></div>");
                                }
                            }
                        }

                        $(".foodlist-h2").after("<span class='foodlist-span'><img src='assets/img/btm-style.png' alt='span-img' title='span-img' class='img-fluid' draggable='false'></span>");
                        $('.foodlist-span').each(function (index) {
                        $(this).nextUntil('.foodlist-h2').wrapAll('<div class="border" ></div>');
                        })
                        ;

                        $("#loading").hide();
                        })
                        ;
                    </script>
                </div>
            </div>
        </div>

    </section>

    <!---------------- Section o nas --------------------->
    <section id="about" class="text-center">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                    <img class="img-fluid" src="assets/img/pz1.png" alt="Pizza" title="Pizza" draggable="false">
                </div>
                <div class="col-md-6 col-sm-12  m-auto">
                    <h2 class="text-justify" data-aos="fade"><?php echo $cont['title']; ?></h2>
                    <p class="text-justify" data-aos="fade"><?php echo $cont['onas']; ?></p>

                </div>
            </div>
        </div>
    </section>

    <!---------------- Gallery ----------------------------->
    <section id="gallery" class="text-center">
        <div class="container">
            <h2 data-aos="fade">Fotogalerie</h2>
            <div class="carousel-block">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a class="lightbox" href="assets/img/gallery/img1.jpg" title="Kebab">
                                <img class="w-100" src="assets/img/gallery/img1.jpg" alt="First slide">
                            </a>

                        </div>
                        <div class="carousel-item">
                            <a class="lightbox" href="assets/img/gallery/img2.jpg" title="Kebab a pito chleb">
                                <img class="w-100" src="assets/img/gallery/img2.jpg" alt="First slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="lightbox" href="assets/img/gallery/img3.jpg" title="Kebab">
                                <img class="w-100" src="assets/img/gallery/img3.jpg" alt="First slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="lightbox" href="assets/img/gallery/img4.jpg" title="Kebab a pito chleb">
                                <img class="w-100" src="assets/img/gallery/img4.jpg" alt="First slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="lightbox" href="assets/img/gallery/img5.jpg" title="Kebab a hranolky">
                                <img class="w-100" src="assets/img/gallery/img5.jpg" alt="First slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="lightbox" href="assets/img/gallery/img6.jpg" title="Kebab">
                                <img class="w-100" src="assets/img/gallery/img6.jpg" alt="First slide">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tz-gallery">

                <div class="row">

                    <div class="col-sm-12 col-md-4" data-aos="fade">
                        <a class="lightbox" href="assets/img/gallery/img1.jpg" title="Kebab">
                            <img src="assets/img/gallery/img1.jpg" alt="Kebab" title="Kebab">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4" data-aos="fade">
                        <a class="lightbox" href="assets/img/gallery/img2.jpg" title="Kebab a pito chleb">
                            <img src="assets/img/gallery/img2.jpg" alt="Kebab a pito chleb"
                                 title="Kebab a pito chleb">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4" data-aos="fade">
                        <a class="lightbox" href="assets/img/gallery/img3.jpg" title="Kebab">
                            <img src="assets/img/gallery/img3.jpg" alt="Kebab"
                                 title="Kebab">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4" data-aos="fade">
                        <a class="lightbox" href="assets/img/gallery/img4.jpg" title="Kebab a pito chleb">
                            <img src="assets/img/gallery/img4.jpg" alt="Kebab a pito chleb" title="Kebab a pito chleb">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4" data-aos="fade">
                        <a class="lightbox" href="assets/img/gallery/img5.jpg" title="Kebab a hranolky">
                            <img src="assets/img/gallery/img5.jpg" alt="Kebab a hranolky"
                                 title="Kebab a hranolky">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4" data-aos="fade">
                        <a class="lightbox" href="assets/img/gallery/img6.jpg" title="Kebab">
                            <img src="assets/img/gallery/img6.jpg" alt="Kebab" title="Kebab">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!----------------- Google Map iframe ----------------->
    <div id="map" class="map-clean">
        <div id="map-wrapper">
            <div id="map-canvas2">
                <iframe src="https://maps.google.com/maps?q=<?php echo $cont['gmap']; ?>&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" allowfullscreen></iframe>
            </div>
            <div id="over">
                <div class="text-center">
                    <p><i class="fas fa-map-marker-alt"></i></p>
                    <p><?php echo $cont['kont_misto']; ?></p>
                    <p>Rozvoz zdarma</p>
                    <a id="gmap" class="btn btn-primary"
                       role="button" title="Zobraziť mapu" target="_blank">Zobrazit mapu</a>
                </div>
            </div>
        </div>
    </div>

    <!----------- Section kontakt ----------------->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center" data-aos="fade">
                    <h2>Buďte s námi v kontaktu</h2>
                    <h2>Kontakt</h2>
                    <p>V naší pizzerii máte možnost ochutnat nejen pizzu připravovanou na ohni
                        ... <?php echo $cont['title']; ?> je
                        "to
                        nejlepší!"</p>


                    <?php
                    if (!empty($cont['social_fb']) && !empty($cont['social_inst'])) {
                        echo '
                        <p class="social-black mb-0">Navštivte naše sociální sítě:
                            <a href="' . $cont['social_fb'] . '" title="Facebook"
                               target="_blank">
                                <img class="img-fluid social" src="assets/img/facebook.svg" alt="Facebook"
                                     title="Facebook"
                                     draggable="false"></a>
                            <a href="' . $cont['social_inst'] . '" title="Instagram"
                               target="_blank">
                                <img class="img-fluid social" src="assets/img/instagram.svg" alt="Instagram"
                                     title="Instagram"
                                     draggable="false"></a>
                        </p>
                        ';
                    } else if (empty($cont['social_fb']) && empty($cont['social_inst'])) {
                        echo '';
                    } else if (empty($cont['social_fb'])) {
                        echo '
                        <p class="social-black mb-0">Navštivte naše sociální sítě:
                            <a href="' . $cont['social_inst'] . '" title="Instagram"
                               target="_blank">
                                <img class="img-fluid social" src="assets/img/instagram.svg" alt="Instagram"
                                     title="Instagram"
                                     draggable="false"></a>
                        </p>
                        ';
                    } else if (empty($cont['social_inst'])) {
                        echo '
                        <p class="social-black mb-0">Navštivte naše sociální sítě:
                            <a href="' . $cont['social_fb'] . '" title="Facebook"
                               target="_blank">
                                <img class="img-fluid social" src="assets/img/facebook.svg" alt="Facebook"
                                     title="Facebook"
                                     draggable="false"></a>
                        </p>
                        ';
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 text-center m-auto">
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><i class="fas fa-mobile"></i></p>
                                <p class="card-text"><a
                                            href="tel:<?php echo $cont['kont_cislo']; ?>"><?php echo $cont['kont_cislo']; ?></a>
                                </p>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><i class="fas fa-at"></i></p>
                                <p class="card-text"><?php echo $cont['title']; ?></p>
                                <p class="card-text"><a href="mailto:<?php echo $cont['kont_email']; ?>"
                                                        title="<?php echo $cont['kont_email']; ?>"><?php echo $cont['kont_email']; ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="business-hours">
                        <h2 class="title">Otevírací hodiny</h2>
                        <ul class="list-unstyled opening-hours">
                            <li>Pondělí <span
                                        class="pull-right"><?php echo $cont['open_po']; ?> - <?php echo $cont['close_po']; ?></span>
                            </li>
                            <li>Úterý <span
                                        class="pull-right"><?php echo $cont['open_ut']; ?> - <?php echo $cont['close_ut']; ?></span>
                            </li>
                            <li>Středa <span
                                        class="pull-right"><?php echo $cont['open_st']; ?> - <?php echo $cont['close_st']; ?></span>
                            </li>
                            <li>Čtvrtek <span
                                        class="pull-right"><?php echo $cont['open_ct']; ?> - <?php echo $cont['close_ct']; ?>'</span>
                            </li>
                            <li>Pátek <span
                                        class="pull-right"><?php echo $cont['open_pa']; ?> - <?php echo $cont['close_pa']; ?></span>
                            </li>
                            <li>Sobota <span
                                        class="pull-right"><?php echo $cont['open_so']; ?> - <?php echo $cont['close_so']; ?></span>
                            </li>
                            <li>Neděle <span
                                        class="pull-right"><?php echo $cont['open_ne']; ?> - <?php echo $cont['close_ne']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!------------------ Footer container -------------------->
    <footer id="footer">
        <div class="container text-center">
            <p><a href="http://www.deepvision.cz/" target="_blank"
                  title="DEEP VISION"><?php echo $cont['footer']; ?>
                </a></p>
            <p><?php echo $cont['title']; ?> &copy;<?php
                if (date("Y") == 2019) {
                    echo "2019";
                } else {
                    echo "2019" - date("Y");
                }
                ?></p>
        </div>
    </footer>
<?php } ?>
<span class="go-to-top" id="go_to_top"><i class="fas fa-chevron-up"></i></span>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
    AOS.init();
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/grayscale.js"></script>

</body>
</html>