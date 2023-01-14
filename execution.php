<head>
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<?php


//-----------------------------------------------------------------Page de connexion
function connexion()
{
    include("db.php");

    if (isset($_POST["submit"])) {

        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $password = $_POST['password'];
            $email = $_POST['email'];

            $email = stripslashes($email);
            $email = addslashes($email);

            $password = stripslashes($password);
            $password = addslashes($password);

            $query = "SELECT * FROM Users WHERE Email='$email' AND Password='$password'";
            $result = mysqli_query($con, $query);
            $num_row = mysqli_num_rows($result);
            $row = mysqli_fetch_row($result);
            if ($row > 0) {

                header('Location:Welcom.php');

                $_SESSION['name'] = $email;
                $_SESSION['password'] = $password;
            } else {
                echo "<center><h3><script>alert('Echec de connexion, identifiants incorrects');</script></h3></center>"; // Afficher l'alert 
            }
        } else {
            echo "<center><h3><script>alert('Merci de remplir les deux champs pour evoluer !');</script></h3></center>"; // Afficher l'alert 
        }
    }
}
//--------------------------------------------------------------End page de connexion



//--------------------------------------------------------------Inscription

function Inscription()
{
    include("db.php");

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $name = stripslashes($name);  // Supprimer la barre oblique inverse
        $name = addslashes($name);    //Ajouter une barre oblique inverse devant chque guillemet

        $email = $_POST['email'];
        $email = stripslashes($email);
        $email = addslashes($email);

        $password = $_POST['password'];
        $password = stripslashes($password);
        $password = addslashes($password);

        // Verifier si l'email existe déjà dans la base de données
        $str = "SELECT Email from Users WHERE Email='$email'";
        
        // Execution de la requete sql
        $result = mysqli_query($con, $str); 

        if ((mysqli_num_rows($result)) > 0) { // Compter le nombre de fois que l'email se trouve dans la base de données
            echo "<center><h3><script>alert('Désolé.. Un compte a cet Email existe déjà !!');</script></h3></center>"; // Afficher l'alerte 
            header("refresh:0;url=Inscription.php"); // rediriger dans la page register
        } else {
            // La requete sql pour inserer les données dans la base de données
            $str = "INSERT into Users set Email='$email', Passwords='$password', Images = 'img.jpg', Nom='$name'"; 
            $result = mysqli_query($con, $str);
            if ($result) { 
                echo '<script type="text/javascript">alert("Insertion réussie")</script>'; 
                // deriger à la page suivante
                header("refresh:0;url=Welcom.php"); 
            }
        }
    }
}
//===============================================Fin inscription administrateur
?>
