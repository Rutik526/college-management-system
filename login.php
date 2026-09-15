<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>

<h2>Admin Login</h2>

<form method="post">

Username:
<input type="text" name="username">
<br><br>

Password:
<input type="password" name="password">
<br><br>

<input type="submit" name="login" value="Login">

</form>

<?php

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="admin" && $password=="12345")
    {
        header("Location:index.php");
    }
    else
    {
        echo "Invalid Username or Password";
    }
}

?>

</body>
</html>