<?php

    for ($i=1; $i<=5 ; $i++) { 
        for ($n=1; $n<=$i; $n++) { 
            echo("*");
        }
        echo("\n");
    }


    $n=5;
    $k = 2 * $n - 2;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $k; $j++)
            echo " ";
        $k = $k - 1;
        for ($j = 0; $j <= $i; $j++ )
        {
            echo ("* ");
        }
        echo ("\n");
    }

      
?>