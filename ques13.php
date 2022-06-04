<html>
     <body>
<form action=<?php echo $_SERVER['PHP_SELF'] ?> Method= REQUEST >
name:<input type ="text" name="name">
rollno:<input type ="text" name="rollno">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php if(isset($_REQUEST['submit']))
{
echo $_REQUEST['name']; 
echo $_REQUEST['rollno'];
}
?>