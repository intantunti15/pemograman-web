<?php

    $mhs = array (
        array("Andika","1212121212","Denpasar"),
        array("Wahyu","3214321234","Manado"),
        array("Susanti","1234123456",'Jakarta'),
        array("Fizi","1678543213","Malang"),
        array("icha","2201010455","Surabaya"),
    );

    foreach ($mhs as $idx => $dta){

        echo "Data ke-".$idx."<br>";

        foreach ($dta as $nval){
            echo $nval."<br>";
        }
        echo "<br>";


    }