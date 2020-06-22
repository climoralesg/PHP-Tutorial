<?php

$color1=(object)["remera"=>"roja","gorra"=>"azul"];

function ropa($color){
    echo "<p>Ropa de color Remera: $color->remera, Gorra: $color->gorra</p>";

}
Ropa($color1);
?>