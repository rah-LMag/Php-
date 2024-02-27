<?php
// 11

    function verificarPalindromo($palavra) {
        $palavra =strtolower(str_replace(' ', ' ', $palavra));
        
        $palavraInvertida = strrev($palavra);

        if($palavra === $palavraInvertida) {
            return true;
        } else {
            return false;
        }
    }

        $palavra = "rosar";
        if(verificarPalindromo($palavra)) {
            echo $palavra ." é um palindromo. ";
        } else{
            echo $palavra ." não é um palindromo. ";
        }
?>