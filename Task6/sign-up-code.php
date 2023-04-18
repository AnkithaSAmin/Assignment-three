<?php
$conn = mysqli_connect("localhost", "ankitha", "", "ankitha_reg");
    
// Check connection
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}
else{
    echo "";
}

?>