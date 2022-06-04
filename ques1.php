<?php
echo "Sourabh<br>";
$str = "st and bca";
$pattern = "/bc(a){1}/"; //meta character
echo preg_match($pattern, $str);
$str = "Sourabh";
$pattern = "/Sourabh/i"; //modifiers
echo"<br>";
echo preg_match($pattern, $str); //operators
$a = 10;
$b = 20;
$c = 30;
$sum = $a + $b;
$sub = $a - $b;
$multi = $a*$b;
$div = $a/$b;
$mod = $a%$b;
echo "<br>";
echo "sum=".$sum."<br/>";
echo "sub=".$sub."<br/>";
echo "multi=".$multi."<br/>";
echo "div=".$div."<br/>";
echo "mod=".$mod."<br/>";
?>



