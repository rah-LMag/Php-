<?php
//8

function CalcularRaio ($raio) {
    $area = round(M_PI * $raio *  $raio);
    return  $area;
}
$raio = 5;
echo "A área do circulo é: " .CalcularRaio($raio);
?>