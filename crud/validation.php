<?php
function isNameValid(string $name):bool
{
    $pattern = '/^[a-zA-ZÀ-ÿ.-]*[a-zA-ZÀ-ÿ][\s\t]+[a-zA-ZÀ-ÿ.-]*$/';
    if (preg_match($pattern, $name)) {
        return true;
    } else {
         return false;
    }
}
function getFullName(string $nom, string $prenom):string
{
    if(isNameValid($nom)== true && isNameValid($prenom) == true){
        return "Validation ok";
    }else{
        return "Verifier votre nom et prenom";
    }
}