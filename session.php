<?php
session_start();
$_SESSION["Login"] = "Succesful";
echo"Session Start";
if(isset($_SESSION["LOGIN"]))
{
    echo "Succesful";
}
?>
