<?php

//mb_strtolower mamadika sotra ho lasa muniscul
//mb_strtoupper mamadika soratra majuscule
/*
function getFullName(string $nom, ?string $prenom){ //ny ?alohan'ny type de donne miteny w nullable ilay variable
    if(!$prenom){
        return strtoupper($nom);
    }
    return  "Votre nom complet est: $nom  $prenom";
}
echo getFullName("Rakoto", null);
*/
declare(strict_types=1);
function getFullName(string $nom, ?string $prenom = "Ravelo"): string
{  
    if($nom != ""){
        preg_match("/([^A-Za-zéèàïäüùç\s])/", $nom, $result);
        if(!empty($result)){
            return "votre nom est icorrect";
        }elseif(!$prenom){
                return strtoupper($nom);
            }
            return  "Votre nom complet est: $nom  $prenom";
        }else{
            return "votre nom est icorrect";
        }
    }
       
echo getFullName("Doda rabe", "velo");