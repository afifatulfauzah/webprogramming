<?php

$i = 0;
while($i < 100){
    $i += 1;
    if($i == 90){
        continue; 
    }
    echo $i;
    echo "<br>";
}
echo "baris 12";
?>