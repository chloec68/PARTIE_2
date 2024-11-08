<h1>Exercice 7</h1>


<h2>Résultat</h2>

<!-- <input type="checkbox" id="choixUn" name="choixUn" value="choix1"> -->

<?php

$elements=[
    "choix1"=>"checked",
    "choix2"=>"non",
    "choix3"=>"non"
];

// $elements2=[
//     "choix1"=>"checked",
//     "choix2"=>"non",
//     "choix3"=>"checked"
// ];

function genererCheckbox($elements){
    foreach($elements as $choix=>$checked){ 
        if($checked == "checked"){
            $result="<input type='checkbox' id='$choix' name='$choix value='$choix' checked>";
            echo $result;
        }else{
            $result="<input type='checkbox' id='$choix' name='$choix value='$choix'>";
            echo $result;
        }
    }
    return;
}

echo genererCheckbox($elements);

// echo "<br>";

// echo genererCheckbox($elements2);