<?php
include 'database.php';
if (isset($_POST['email'])) {
	$email =$_POST['email'];
	//echo "$email";
	$token = uniqid();
	
	$url ="http://localhost/AGS/token/token.php?token=$token";
	//$shashPassword = password_hash($password,PASSWORD_DEFAULT);
	$message = "Bonjour, voici votre lien pour le réinitialisation du mot de passe : $url";
	$header ='From: [your_gmail_account_username]@gmail.com' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" .
	'Content-type: text/html; charset=utf-8'; // Pour gérer les caractères accentués
	$subject ='Password forget';
	//echo "okkkkk";
	if (mail($email,$subject,$message,$header)) {
		$sql ="UPDATE Users SET token =? WHERE Email=? ";
		$stmt = $con->prepare($sql);
		$stmt->execute([$token,$_POST['email']]);
		//echo'Mail envoyer';
		//var_dump($token);
		echo "<center><h3><script>alert('Email envoyé avec succès');</script></h3></center>"; // Afficher l'alert 
		//header("refresh:0;url=index.php"); // rediriger dans la page login 
		header("refresh:0;url=index.php");
		
		exit();
	}else {
		echo "<center><h3><script>alert('Error...');</script></h3></center>"; // Afficher l'alert 
		header("refresh:0;url=index.php"); // rediriger dans la page login 
		exit();
	}
	 
}

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
				<form method="post" action="passwordForget.php" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Mot de Passe oublié
					</span> 
					
					<div class="Logo login100-form-title p-b-43">
						<img src="images/LOGOUIECC.png" alt="">
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Le nom d'utilisateur doit etre valide : abc123">
							
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Saisir Adress Email</span>
					</div>
					
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="password_forget" value="Reinitialiser"> 
							Envoyer
						</button>
					</div>
					
					<div>
						<br>
					</div>
					
					<div>
                            		<a href="Index.php" class="txt1">Se connecter</a>
                        	</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Merci d'entrer votre adresse email ci-dessous, nous vous enverrons un formulaire pour réinitialiser votre mot de passe
						</span>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>