<?php
$x=array("name","class","rollno","course");
sort ($x);
$len=count($x);
for($i=0;$i<$len;$i++)
{
    echo $x[$i];
    echo "<br>";
}
echo var_dump($x);
?>