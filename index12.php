<?php
// 12

    function segundoMaior($array) {
        rsort($array);
        return $array[1];
    }

    $array = array(10, 20, 5, 15, 25);
    $segundo_maior = segundoMaior($array);
    echo "O segundo maior elemento no array é: " . $segundo_maior;
?>