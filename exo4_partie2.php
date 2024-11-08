<h1>Exercice 4</h1>



<h2>Résultat</h2>

<!-- <table>
<thead>
    <th>Pays</th>
    <th>Capitale</th>
    <th>Lien wiki</th>
</thead>
    <tbody>
        <tr>
            <td>ALLEMAGNE</td>
            <td>Berlin</td>
            <td>Lien</td>
        </tr>
        <tr>
            <td>ESPAGNE</td>
            <td>Madrid</td>
            <td>Lien</td>
        </tr>
        <tr>
            <td>FRANCE</td>
            <td>Paris</td>
            <td>Lien</td>
        </tr>
        <tr>
            <td>ITALIE</td>
            <td>Rome</td>
            <td>Lien</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington DC</td>
            <td>Lien</td>
        </tr>
    </tbody>
</table> -->
<style>
    table{
        border-collapse:collapse;
    }
</style>

<?php

// TABLEAU ASSOCIATIF 
$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"];


function creeTableau($capitales){
ksort($capitales);
$result = "<table border='black solid 1px'>
                <thead>
                    <th>Pays</th>
                    <th>Capitale</th>
                    <th>Lien wiki</th>
                </thead>
                    <tbody>";

foreach ($capitales as $pays => $capitale){
    $url = "https://fr.wikipedia.org/wiki/$capitale";
    $result = $result."<tr>
            <td>$pays</td>
            <td>$capitale</td>
            <td> <a href='$url' target='_blank'>wiki</a> </td>";
 }
 return $result;
}

echo creeTableau($capitales);
               


