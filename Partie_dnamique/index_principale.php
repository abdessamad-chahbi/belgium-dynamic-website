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
        <h3 id="parag"><span id="paragCol">Date de publication :</span> </h3>
        <h3 id="parag"><span id="paragCol">Titre de la news 1 :</span> </h3>
       <a href="index1.php"><button type="button" id="button" onclick=""><h3>Cliquez ici pour plus de détail</h3></button></a> <br> <br>
          </div>
    <div id="border1">
        <h3 id="parag"><span id="paragCol">Date de publication :</span> </h3>
        <h3 id="parag"><span id="paragCol">Titre de la news 2 :</span> </h3> 
        <a href="index2.php"><button type="button" id="button" name="detail1"><h3>Cliquez ici pour plus de détail</h3></button></a> <br> <br>
         </div>
    <div id="border1">
        <h3 id="parag"><span id="paragCol">Date de publication :</span> </h3>
        <h3 id="parag"><span id="paragCol">Titre de la news 3 :</span> </h3>
        <a href="index3.php"><button type="button" id="button"><h3>Cliquez ici pour plus de détail</h3></button></a> <br> <br>
          </div> <br>
   <a href="index_toutes.php"><button type="button" id="button1"><h3>Toutes Les news</h3></button></a> <br> <br>
</div> <br>
<a href="S'inscrire/index.php" target="_blank"><button type="button" id="button_connecter"><h3>S’inscrire à la newsletter</h3></button></a>
<a href="S'inscrire/index.php" target="_blank"><button type="button" id="button_connecter"><h3>Se Connecter</h3></button></a> <br> <br>

</body>
</html>