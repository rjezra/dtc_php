<?php
$connexion = mysqli_connect("localhost", "root", "", "dtc");
if(!$connexion){
    die("Impossible de se connecter");
}
$sql = "SELECT * FROM php";
$result = mysqli_query($connexion, $sql);
while($ligne = mysqli_fetch_assoc($result)){
    echo $ligne["nom"]." ".$ligne["prenom"]."<br>";
}
