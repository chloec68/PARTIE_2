<h1>Exercice 6</h1>


<h2>Résultat</h2>

<!-- <select name="civilité" id="civilité">
<option value="Monsieur">Monsieur</option>
<option value="Madame">Madame</option>
<option value="Mademoiselle">Mademoiselle</option>
</select> -->

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($elements){ 
 $result = "<select name='civilité' id='civilité'>";
    foreach($elements as $civilite){
        $result.="<option value='$civilite'>$civilite</option>";
    }
    $result.="</select> ";
    return $result;
}

echo alimenterListeDeroulante($elements);