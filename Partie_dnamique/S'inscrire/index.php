<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
</head>

<body>


<div class="container" id="container">
	<div class="form-container sign-up-container">
	<form action= "" name="form1" method="post">
			<h1>Créer un compte</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>ou utilisez votre courriel pour vous inscrire</span>
			<input type="text" placeholder="Nom" name="Nom" />
			<input type="text" placeholder="Prenom" name="Prenom" />
			<input type="email" placeholder="Email" name="Email" />
			<input type="password" placeholder="Mot de Passe" name="Password" />
			<button type="submit" name="Valider">Connectez-vous</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Connectez-vous</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>ou utilisez votre compte</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Mot de Passe" />
			<a href="#">Mot de passe oublié?</a>
			<button>Connectez-vous</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenue!</h1>
				<p>Pour rester connecté avec nous, veuillez vous connecter avec vos données personnelles</p>
				<button class="ghost" id="signIn">Connectez-vous</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Salut!</h1>
				<p>Entrez vos données personnelles pour ouvrir un compte chez nous</p>
				<button class="ghost" id="signUp">S'inscrire</button>
			</div>
		</div>
	</div>
</div>

<script src="script.js" charset="utf-8"></script>

<?php
if(isset($_POST['Valider'])){
$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
//Connexion 
$conn=mysqli_connect("127.0.0.1" , "root" , "" , "NewsLetter") ;
//Requète SQL: insertions dans la table proprietaire
$requete="INSERT INTO Internaute VALUES('$Nom','$Prenom','$Email','$Password')";
$resultat1=mysqli_query($conn , $requete);
}
?>

</body>
</html>
