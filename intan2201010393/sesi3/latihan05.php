<?php

//mopdel 1
$age = array ("peter"=>"35", "ben"=>"37", "joe"=>"43");

//print_r($age);

//echo  " umur dari ben adalah ".$age ["ben"];

foreach ($age as $p => $u ) {
    echo $p."umurnya". $u ;

    echo "<br>";
}