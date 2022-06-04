<?php
echo"Sourabh<br/>";
function myfun()
{
    static $x=10;
    echo"$x";
    echo"<br/>";
    $x++;
    echo"$x";
    echo"<br/>";
}
myfun();
myfun();
myfun();
myfun();
?>