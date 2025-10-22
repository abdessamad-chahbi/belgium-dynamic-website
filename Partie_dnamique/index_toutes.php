<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSLETTER</title>
<style>
body {
    background: #16222A; 
    background: -webkit-linear-gradient(to right, #3A6073, #16222A);
    background: linear-gradient(to right, #3A6073, #16222A); 
}
#border {
    border: 2px solid wheat;
    position: relative;
    left: 300px;
    width: 600px;
}
#border1 {
    border: 2px solid wheat;
}
#parag {
    position: relative;
    left: 10px;
    color: white;
}
#paragCol{
    color: chartreuse;
}
#button {
 position: relative;
left: 330px;
border-radius: 20px;
background-color: olive;
}
#button1 {
 position: relative;
left: 420px;
border-radius: 20px;
background-color: black;
color: wheat;
}
#button_connecter {
 position: relative;
left: 360px;
border-radius: 20px;
margin-left: 60px;
background-color: chartreuse;
color: black;
}
#button_connecter:hover {
background-color: orange;
color: black;
}

</style>
</head>
<body>

<div id="border">
    <div id="border1">
        <h3 id="parag"><span id="paragCol">Résumé de la news 1 : </span>
                   <?php
                      $conn=mysqli_connect("127.0.0.1" , "root" , "" , "newsletter") ;
                      $requete="SELECT resume FROM news WHERE news_id=1 " ;
                      $resultat=mysqli_query($conn , $requete );
                     while($ligne=mysqli_fetch_array($resultat))
                             echo $ligne[0] ;    ?>
        </h3>
        <br> 
          </div>
    <div id="border1">
        <h3 id="parag"><span id="paragCol">Résumé de la news 2 : </span>
                   <?php
                      $conn=mysqli_connect("127.0.0.1" , "root" , "" , "newsletter") ;
                      $requete="SELECT resume FROM news WHERE news_id=2 " ;
                      $resultat=mysqli_query($conn , $requete );
                     while($ligne=mysqli_fetch_array($resultat))
                             echo $ligne[0] ;    ?>
        </h3>
        <br> 
          </div>
    <div id="border1">
        <h3 id="parag"><span id="paragCol">Résumé de la news 3 : </span>
                   <?php
                      $conn=mysqli_connect("127.0.0.1" , "root" , "" , "newsletter") ;
                      $requete="SELECT resume FROM news WHERE news_id=3 " ;
                      $resultat=mysqli_query($conn , $requete );
                     while($ligne=mysqli_fetch_array($resultat))
                             echo $ligne[0] ;    ?>
        </h3>
        <br> 
          </div>

</div> <br>
<a href="S'inscrire/index.php" target="_blank"><button type="button" id="button_connecter"><h3>S’inscrire à la newsletter</h3></button></a>
<a href="S'inscrire/index.php" target="_blank"><button type="button" id="button_connecter"><h3>Se Connecter</h3></button></a> <br> <br>
</body>
</html>