<h1>Exercice 2</h1>

<h2>Résultat</h2>

<!-- <table>
    <thead>
        <th>Pays</th>
        <th>Capitale</th>
    </thead>
    <tbody>
        <tr>
            <td>ALLEMAGNE</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>FRANCE</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>ITALIE</td>
            <td>Rome</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
    </tbody>
</table> -->

<style>
    table,td,tr,th{
        border:solid black 1px;
        border-collapse:collapse;
    }
</style>

<?php

$capitales = [
"France"=>"Paris",
"Allemagne"=>"Berlin",
"USA"=>"Washington",
"Italie"=>"Rome"];



function afficherTableHTML($capitales){
    ksort($capitales);
    $result = "<table>
                    <thead>
                        <th>Pays</th>
                        <th>Capitale</th>
                    </thead>
                <tbody>";
    
    foreach($capitales as $pays => $capitale){
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                  </tr>";
    }$result.="</tbody>
                 </table>";
    return $result;
                }

echo afficherTableHTML($capitales);

// Pourquoi on ne met pas le tableau dans la boucle? Sinon ça va recréer le tableau plusieurs fois ;

// Rappel : Dans un tableau associatif, la clé (key) doit être unique - contrairement à la valeur (value) ;

// Rappel : squelette tableau HTML:
    // <table>
    //     <thead> ENTÊTE
    //         <tr>
    //             <th>TABLE COLUMN</th>
    //             <th>TABLE COLUMN</th>
    //         </tr>
    //     </thead>
    //     <tbody> CORPS
    //         <tr> FIRST ROW
    //             <td>TABLE CELL</td>
    //             <td>TABLE CELL</td>
    //         </tr>
    //         <tr> SECOND ROW
    //             <td>TABLE CELL</td>
    //             <td>TABLE CELL</td>
    //         </tr>
    //     </tbody>
    // </table>

// Raccourci clavier td*4 => crée 4 td;

// fonctionnement boucle FOREACH : 
    // foreach($nomTableau as $nomClé => $value)
    // $nomClé = variable qui représente le nom de la clé 
    // $value = variable qui représente nom de la valeur du tableau associatif
    // exemple :
    // foreach ($capitales as $pays => $capitale){
    //     echo "Le pays $pays a pour capitale : $capitale<br>";
    // };

// Rappel : 
    // pour trier alphabétiquement sur key : ksort(); -- krsort
    // pour trier alphabétiquement sur value : asort(); --arsort