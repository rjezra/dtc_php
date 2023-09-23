<?php
    /**
    $ville = "Antananarivo";
    $adressePost = 101;
    $telephone = 344479594;
    $isCapital = true;

    echo $ville  ." ". $adressePost ." ". $telephone . " ". $isCapital ;
    */
    /** 
    $note = 10;
    if($note == 10){
        echo "Tsara";
        echo "<br>";
    }
    if($note != 9){
        echo "Tsata ihany";
    }
    echo "<br>";

    */

    /**
      $age = 18;
    if($age >= 18){
        echo "lehibe";
    }elseif($age == 18){
        echo "Tanora";
    }elseif($age <= 18){
        echo "Ankizy";
    }elseif($age != 18){
        echo "olona";
    }else{
        echo "mxaty";
    }

    */
    /** 
    echo "condition ternaire :<br>";
    echo 18 == 18 ? "oui" : "non";
    */

    //table boolean aplique anaty if else alef git hub
   // <=> 0, 1, -1 (combine)

   /**  exo1
   $heure = 18;
   if(($heure >= 8 && $heure <= 12)||($heure >= 14 && $heure <= 16)){
        echo "Le mangasin est ouvert";
   }else
   {
        echo "Le mangasin est fermer";
   }
*/
/**exo combine en entiers 
$a = 2;
$b = 5;

echo $a <=> $b;
echo "<br>";
echo $b <=> $a;
echo "<br>";
echo $b <=> $b ;
echo "<br>";

exo combine en tableau <=> 
$a = [1, 3, 5];
$b = [2, 4, 5];
echo $a <=> $b;
echo "<br>";
echo $b <=> $a;
echo "<br>";
echo $a <=> $a;
*/

/**exercice tableau 1 
$persone = [
    "nom" => "Rakoto",
    "age" => "13",
    "sex" => "Masculin",

];
echo "Nom: " .$persone ["nom"];
echo "<br>";
echo "Age :" .$persone ["age"];
echo "<br>";
echo "<hr>";
exercice tableau 2

$eleve = array ("Rakoto", "Rabe", "Rasoa", "Naivo");

$eleve1 = array_slice ($eleve, 0, 2);
$eleve2 = array_slice ($eleve, 2);
array_push ($eleve1, "Rasoherina"); //ajout 
array_splice($eleve1, 1); // suprimer
$eleve = array_merge ($eleve1, $eleve2);
$eleve3 = array("Solo");
$eleve4 = array_replace($eleve, $eleve3);


echo '<pre>';
var_dump($eleve4);
echo '</pre>';
*/
/** 
$prouit = ["telephone", "voiture", "ppn"];
echo $prouit[0].PHP_EOL;
echo $prouit[1].PHP_EOL;
*/
/** 
$biby = [
    "herbivore" => [
        "boeuf" => ["omby gasy", "omby vazaha"],
    ],
    "omnivore" => ["kisoa"],
];

echo $biby ["herbivore"]["boeuf"][1];
*/

/**exo boucle */
/** 
    $numbre = [1,12,2,23,55,4578,123,457,];
    for($x = 0; $x<count($numbre); $x++){
    echo $numbre[$x];
}
*/
/** 

$numbre = [1,12,2,23,55,4578,123,457];

for($x=count($numbre)-1; $x>=0; $x--){
    echo $numbre[$x];
}
$numbre = [1,12,2,23,55,4578,123,457,];
for($x = 0; $x<count($numbre); $x++){
    if(($numbre[$x] % 2) != 0){
        echo $numbre[$x].PHP_EOL;
    }

}
*/

$nombres = [
    "paire" => 2,
    "impaire" =>3
];
foreach($nombres as $nombre){
    echo $nombre. PHP_EOL;
}




    
