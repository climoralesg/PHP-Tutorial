<?php

class Color
{
    public $remera;
    public $gorra;

    public function ropa()
    {
        echo "<p>Ropa de color Remera: $this->remera</p>";
    }
}

$a=new Color();
$a->remera="roja";
$a->gorra="Azul";
$a->ropa();


?>