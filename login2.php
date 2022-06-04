<html>

<head>
    <title>Login</title>
</head>
<center>
    <h1>Login</h1>
<body>
    <form action="login3.php" method="$_POST">
        <br>
        <br>
        Name <input type="text" name="name">
        <br>
        <br>
        Password<input type="password" name="text">
        <br>
        <br>
        <input type="submit" name="login">
    </form>
</body>
</center>
</html>


<?php
    session_start();
    $_SESSION["Login"] = "successful";
    echo "session start";
?>