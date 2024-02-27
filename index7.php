<?php
// 7 

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$transposedMatrix = array();

$rows = count($matrix);
$cols = count($matrix[0]);

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $transposedMatrix[$j][$i] = $matrix[$i][$j];
    }
}

echo "Matriz original:\n";
for ($i = 0; $i < $rows; $i++) {
    echo implode("\t", $matrix[$i]) . "\n";
}
echo "\nMatriz transposta:\n";
for ($i = 0; $i < $cols; $i++) {
    echo implode("\t", $transposedMatrix[$i]) . "\n";
}
?>