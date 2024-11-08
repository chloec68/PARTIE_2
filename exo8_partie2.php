<h1>Exercice 8</h1>



<h2>Résultat</h2>

<?php

$url="<img src='http://my.mobirise.com/data/userpic/764.jpg' alt=''>";

function repeterImage($url,$nombre){
   
    for($i=0 ; $i<=$nombre-1 ; $i++){
        
       echo $url;
    }
    return ;
}

echo repeterImage($url,3);



