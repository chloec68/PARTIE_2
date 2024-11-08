<h1>Exercice 10</h1>



<h2>Résultat</h2>
<!-- FORMULAIRE (CHAMPS)
    <form action="">
    <label for="name">Nom</label>
    <input type="text">
    <label for="surname">Prénom</label>
    <input type="text">
    <label for="city">Ville</label>
    <input type="text">
</form> -->

<!-- BOUTONS RADIO (CHOIX UNIQUE)
    <form action="">
<input type="radio" id="genre1" name="genre" value="masculin">
<label for="">Masculin</label>
<input type="radio" id="genre2" name="genre" value="feminin">
<label for="">Féminin</label>
<input type="radio" id="genre3" name="genre" value="autre">
<label for="">Autre</label>
</form> -->

<!-- LISTE DEROULANTE
<select id="cars" name="carlist" form="carform">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select> -->


<?php

$informationsFormulaire = [
    "nom",
    "prénom",
    "adresse",
    "email",
    "ville",
    "sexe"
]; 

$choixFormations = [
    "développeur logiciel",
    "designer web",
    "intégrateur",
    "chef de projet"
];

// CHAMPS INFORMATIONS
function creeFormulaire ($informationsFormulaire){
    foreach($informationsFormulaire as $info){
        $upper = ucfirst($info);
        $result="<form action=''>
        <label for=$upper>$upper</label><br>
        <input type='text'>
        </form>";
        echo $result;
    }
    return;
}

echo creeFormulaire($informationsFormulaire);


// FORMULAIRE FORMATIONS CHECKBOX
function creeFormulaireFormations($choixFormations){
    foreach($choixFormations as $formation){
        $resultat =             
        "<form action=''>
        <input type='radio' id='formation1' name='formation' value='$formation'>
        <label for=''>$formation</label><br>";
        echo $resultat;
    }
        $resultat .= "</form>";
    return;
}
echo creeFormulaireFormations ($choixFormations);

echo "<br>";
echo "<br>";
echo "<br>";

// FORMULAIRE FORMATIONS SELECT
function menuFormations($choixFormations){
    $resultat = "<select id='' name='' form=''>";
        foreach($choixFormations as $formation){
            $resultat.="<option value=$formation>$formation</option>";
            
            }
    $resultat.="</select>";
    return $resultat;

}
echo menuFormations($choixFormations);

echo "<br>";
echo "<br>";
echo "<br>";

// SUBMIT BUTTON
function submitButton(){
    $resultat = "<input type='submit'>";
    return $resultat;
};
echo submitButton();



