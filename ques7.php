<?php
echo"Sourabh<br>";  
$arr = array("bro", "broo");
print_r(array_pad($arr,4, "brooo")); //pad()
echo"<br>";
$a=array("cat", "dog", "snake", "rabbit", "parrot");
print_r(array_slice($a,2)); //slice()
echo"<br>";
$a1=array("a" => "red", "b"=>"green", "c"=>"blue", "d"=>"yellow");
$a2=array("a"=>"purple", "b"=>"orange");
array_splice($a1,0,2,$a2); //splice()
print_r($a1);
echo"<br>";
$my_array = array("Dog", "Cat", "Horse");
List($a, $b, $c)=$my_array; //list()
echo "I have several animals, a $a, a $b and a $c.";
?>