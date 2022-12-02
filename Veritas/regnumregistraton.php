<?php
    $letters ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for($i=1;$i<=10000;$i++)
    {
    $li=rand(0,25);
    $l2=rand(0,25);
    $digitals=rand(100000000,999999999);
    echo $i.". ".$digitals.$letters[$li].$letters[$l2]. "</br>";
    }
?>