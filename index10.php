<?php
// 10

    $num1 = 0;
    $num2 = 1;
    echo $num1 . " ";
    echo $num2 . " ";

    for ($i = 3; $i <= 10; $i++) {
        $fibonacci_next = $num1 + $num2;    
        echo $fibonacci_next . " ";
        $num1 = $num2;
        $num2 = $fibonacci_next;
    }
?>