<?php

for ($i=1; $i<=5 ; $i++){  
    $n = rand(1,100);
    while ($n % 5 != 0) {
        $n = rand(1,100);
    }
    if ($n <= 60) {
        echo("$n: Kurang\n");
    }
    if ($n > 60 && $n <= 70) {
        echo("$n: Cukup\n");
    }
    if ($n > 70 && $n <= 80) {
        echo("$n: Baik\n");
    }
    if ($n > 80) {
        echo("$n: Luar Biasa\n");
    }

}

?>