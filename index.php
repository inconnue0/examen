<?php
    require("execution.php"); 
    connexion();
?>

<!DOCTYPE html>
<html lang="en"> 
 
<head>
    <title>Authentification</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #fff;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" action="index.php" class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">
                        Authentification
                    </span>

                    <div class="login100-form-title p-b-43-">
                        <img src="images/LOGOUIECC.png" alt="">
                    </div>

                    <div class="wrap-input100 validate-input"
                        data-validate="L'adresse email doit etre valide : abc123xyz.com">
                        <input class="input100" type="email" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Adresse email</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Veuillez etrer votre mot de passe">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Mot de passe</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="check">
                            <label class="label-checkbox100" for="ckb1">
                                Se souvenir de moi
                            </label>
                        </div>
                        
                        <div>
                            <a href="Inscription.php" class="txt1">S'Enregistrer</a>
                        </div>

                        <div>
                            <a href="passwordForget.php" class="txt1">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="reconnaitre">
                        <a href="webcam.html" class="txt1">Reconnaissance faciale</a>
                        </button>
                    </div>

                    <div>
                        <br>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit">
                            Connexion identifiants
                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
 
</body>

</html>