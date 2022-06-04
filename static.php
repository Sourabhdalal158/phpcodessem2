<?php
echo"Sourabh</br>";
function myfun()
{
    static $x=10;
    echo"$x";
    $x++;
}
myfun();
myfun();
myfun();
myfun();?>
