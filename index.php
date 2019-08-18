<!DOCTYPE html>
<html lang="en">
<head>
    <title>Přihlášení - Web Generator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="styles/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="styles/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="styles/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="styles/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="styles/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="styles/css/util.css">
    <link rel="stylesheet" type="text/css" href="styles/css/main.css">

</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-b-160 p-t-50">
            <form class="login100-form validate-form" action="verify.php" method="post">
					<span class="login100-form-title p-b-43">
						Přihlášení
					</span>

                <div class="wrap-input100 rs1 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="username" value="admin">
                    <span class="label-input100">Jméno</span>
                </div>

                <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" value="admin">
                    <span class="label-input100">Heslo</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="submit">
                        Přihlaš se
                    </button>
                </div>

                <div class="text-center w-full p-t-23">Zapomněl jste heslo?
                    <a href="mailto:tomikbudik@gmail.com" class="txt1">
                        Kontakt
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="styles/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="styles/vendor/animsition/js/animsition.min.js"></script>
<script src="styles/vendor/bootstrap/js/popper.js"></script>
<script src="styles/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="styles/vendor/select2/select2.min.js"></script>
<script src="styles/vendor/daterangepicker/moment.min.js"></script>
<script src="styles/vendor/daterangepicker/daterangepicker.js"></script>
<script src="styles/vendor/countdowntime/countdowntime.js"></script>
<script src="styles/js/main.js"></script>

</body>
</html>