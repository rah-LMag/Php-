<?php
// 14

function adicao($num1, $num2) {
    return $num1 + $num2;
}

function subtracao($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacao($num1, $num2) {
    return $num1 * $num2;
}

function divisao($num1, $num2) {
    if ($num2 == 0) {
        return "Erro: Divisão por zero.";
    }
    return $num1 / $num2;
}

echo "Adição: " . adicao(5, 3) . "<br>";
echo "Subtração: " . subtracao(10, 4) . "<br>";
echo "Multiplicação: " . multiplicacao(6, 2) . "<br>";
echo "Divisão: " . divisao(15, 3) . "<br>";


?>