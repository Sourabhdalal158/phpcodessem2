<?php
echo "Sourabh</br>";
$arr=array("Sourabh"=>18,"Keshav"=>18,"bro"=>3);
ksort($arr);
foreach($arr as $x=>$x_value)
{
    echo "key=".$x.",value=".$x_value;
    echo"<br>";
}
?>