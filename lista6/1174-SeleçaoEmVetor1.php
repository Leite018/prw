<?php

$a = array(100);
$i = readline();

for($i=0; $i<=99; $i++)
    echo $a[$i];
for($i=0; $i<=99; $i++)
{
    if($a[$i]<=10.0)
        echo $i, $a[$i];
}

?>
