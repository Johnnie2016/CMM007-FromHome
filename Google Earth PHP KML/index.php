<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login with your username and password</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Please login with your username and password</h1>

<p><a href="newuserform.html">If you do not have an account, please register an account here...</a></p>

<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="login.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username"
            /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />
        <br><br>
        <input type="submit" name="submit" value = "login"/>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?>
        </div>
</div>
</body>
</html>
