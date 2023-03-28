<?php
 $x = array(1, 2, 3, 4, 5);
 var_dump($x);
 unset($x[4]);
 $x = array_values($x);
 echo "<br>";
 var_dump($x);
?>
