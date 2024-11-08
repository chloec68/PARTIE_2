<h1>Exercice 9</h1>



<h2>Résultat</h2>

<!-- <form action="">
<input type="radio" id="genre1" name="genre" value="masculin">
<label for="">Masculin</label>
<input type="radio" id="genre2" name="genre" value="feminin">
<label for="">Féminin</label>
<input type="radio" id="genre3" name="genre" value="autre">
<label for="">Autre</label>
</form> -->

<?php

$nomsRadio = [
    "Monsieur",
    "Madame",
    "Autre"
];

function afficherRadio($nomsRadio){
  
    foreach($nomsRadio as $genre){
        $resultat ="<form action=''><br>
         <input type='radio' id='genre1' name='genre' value='masculin'>
        <label for=''>$genre</label>";
        echo $resultat;
    }

    return ;
}

echo afficherRadio($nomsRadio);


