<?php
echo"Sourabh";
echo"<br>";
$x=5;

function myFun() 
{
    global $x;
    $y=10;
    echo"$y";
    echo"$x";
}
 myFun();
// echo $x;
// echo"$y";
?>