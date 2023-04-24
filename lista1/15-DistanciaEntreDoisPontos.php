<?php
$p1 = explode(' ', readline());
$p2 = explode(' ', readline());

    $dis = number_format(sqrt((($p2[0]-$p1[0])*($p2[0]-$p1[0]))+(($p2[1]-$p1[1])*($p2[1]-$p1[1]))),4,".","");

echo "$dis\n";
?>