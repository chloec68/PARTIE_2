<h1>Exercice 1</h1>

<h2>Résultat</h2>

<style>
    .red{
        color:red;
    }
</style>

<?php

$string = "mon texte en paramètre";

function convertirMajRouge($string):string{
    $result = mb_strtoupper($string);
    $result = "<p class='red'>".$result."</p>";
    // ci-dessus j'indique d'assigner la classe red à la variable $result;
    return $result;
}

echo convertirMajRouge($string);
echo "<br>";

// On peut ponctuellement mettre une balise style dans un fichier PHP. 
// NB : PHP n'interdit pas d'insérer un echo dans une fonction, mais ne pas
// le faire est une bonne pratique; Donc on essaye toujours de terminer la fonction
// avec un return;
// L'ensemble des paramètres présents dans une fonction sont appelés la "signature" de la fonction


// POUR CONDENSER LE CODE : 

function convertirMajRouge2($string){
    return "<p class='red'>".mb_strtoupper($string)."</p>";
}
echo convertirMajRouge2($string);

// POUR FAIRE UNE FONCTION QUI ME PERMETTE DE CHOISIR UNE COULEUR 

function convertirMajColor($string,$color){
    return "<p style='color:$color'>".mb_strtoupper($string)."</p>";
}

echo convertirMajColor($string,"yellow");
echo convertirMajColor($string,"blue");
echo convertirMajColor($string,"green");
echo convertirMajColor($string,"pink");
echo convertirMajColor($string,"purple");
echo convertirMajColor($string,"#FF7623");