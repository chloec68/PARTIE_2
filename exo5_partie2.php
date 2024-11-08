<h1>Exercice 5</h1>



<h2>Résultat</h2>

<!-- <form action="">
    <label for="name">Nom</label>
    <input type="text">
    <label for="surname">Prénom</label>
    <input type="text">
    <label for="city">Ville</label>
    <input type="text">
</form> -->

<?php

$nomsInput = ["Nom",
"Prénom",
"Ville"];

function creeFormulaire($nomsInput){

    foreach($nomsInput as $input){
        $result="<form action=''>
        <label for='name'>$input</label><br>
        <input type='text'><br>";
        echo $result;
   }
        $result.="</form>";

   return ;
};

echo creeFormulaire($nomsInput);




