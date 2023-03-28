<?php
    $cars=array('KIA', 'BMW', 'DUSTER', 'ERTIGA', 'LAMBORGINNI');
    echo 'Original array : ';
    foreach ($cars as $x) 
    {echo "$x ";}
    echo "<br>";
    $insert = '<b>Audi</b>';
    array_splice( $cars, 3, 0, $insert ); 
    echo " \n After inserting 'Audi' the array is : "."\n";
    foreach ($cars as $x) 
    {echo "$x ";}


?>

