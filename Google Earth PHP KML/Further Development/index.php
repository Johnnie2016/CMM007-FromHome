<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login with your username and password</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/unsemantic-grid-responsive-tablet.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' type='text/css'>
</head>

<body>
<header>
    <img src="assets/images/gusherderrick.png" alt="Struck oil" id="gusherderrick">
    <img src="assets/images/Header%20logo%20Orange.PNG" alt="header" id="headerlogo">
</header>




<main class="grid-container">


  <section class="grid-66">
    <h1>Please login with your username and password</h1>

    <p><a href="newuserform.html">If you do not have an account, please register for one here...</a></p>
    <br>
    <div class="loginBox">
      <h3>Login Form</h3>
        <form method="post" action="login.php">
            <label>Username:</label><br>
            <input type="text" name="username" placeholder="username"/>
            <br><br>
            <label>Password:</label><br>
            <input type="password" name="password" placeholder="password" />
            <br><br>
            <input type="submit" name="submit" value = "login"/>
        </form>
        <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
    </div>
  </section>

</main>

<footer class="grid-100">
    <p>(c)2017 John Morrison</p>
</footer>



</body>
</html>
