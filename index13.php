<?php
// 13

    function verificarSimetria($matriz) {
        $linhas = count($matriz);
        $colunas = count($matriz[0]);

        if ($linhas != $colunas) {
            return false; 
        }
        
        for ($i = 0; $i < $linhas; $i++) {
            for ($j = 0; $j < $colunas; $j++) {
                if ($matriz[$i][$j] != $matriz[$j][$i]) {
                    return false; 
                }
            }
        }
        return true;
    }

    $matriz = array(
        array(1, 2, 3),
        array(2, 4, 5),
        array(3, 5, 6)
    );

    if (verificarSimetria($matriz)) {
        echo "A matriz é simétrica.";
    } else {
        echo "A matriz não é simétrica.";
    }
?>