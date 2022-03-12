<?php

    $line = readline("Nama Kota: ");

    $cityarray = array("Jakarta", "Yogyakarta", "Bandung", "Bogor", "Semarang");

    if (in_array("$line", $cityarray)) {
        var_dump(true);
    } else{
        var_dump(false);
    }


?>
