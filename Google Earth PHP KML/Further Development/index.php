<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login with your username and password</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' type='text/css'>
</head>

<body>
<header>
    <img src="assets/images/gusherderrick.PNG" alt="Struck oil" id="gusherderrick">
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
            <input type="submit" name="submit" value = "Login"/>
        </form>
        <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
    </div>
  </section>


</main>

<br><br><br><br><br><br><br><br><br><br>
<footer class="grid-100">
    <p>(c)John Morrison 2017</p>
</footer>



</body>
</html>
