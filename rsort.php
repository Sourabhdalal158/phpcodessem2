<?php
echo "Sourabh<br>";
$num = array(12, 11, 10, 13, 14);
rsort($num);
// echo "numbers in order are: ".$num."<br>";  
// print_r($num);
$n = count($num);
for($a = 0; $a<$n; $a++){
  echo $num[$a];
  echo "<br>";
}
?>