<?php
//6

$nums = array(10, 20, 30, 40, 50);
$somar = 0;
for ($i = 0; $i < count($nums); $i++) {
    $somar += $nums[$i];
}
$contador = count($nums);
$resultado = $somar / $contador;
echo "A média dos números é: " . $resultado;
?>