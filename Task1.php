<!DOCTYPE html>
<html>
    
    <body>
<?php
$x=1;
echo "Numbers are: <br>";
 while($x<=10) {
    echo "$x <br>";
    $x++;
 }
echo "Even Numbers are: <br>";
for ($x=1; $x<=10; $x++)
{
    if(($x%2)==0)
    {
        echo $x. "<br>";
    }
}
echo "<br>";
echo "Odd Numbers are: <br>";
for ($x=1; $x<=10; $x++)
{
    if(($x%2)!=0)
    {
    echo $x. "<br>";
    }
}
?>

</body>
</html>
