<?php
// Establishing a connection with our database
    include("DBconSimple.php");

//Checks it the username and password have values or have been left empty
// if empty a message "Both fields are required appears" for the user
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }else
    {

//Assign local variables to the parameters passed via POST
    $username=$_POST['username'];
    $password=$_POST['password'];

// IMPORTANT - Create an SQL query that selects the uid of the user which
// matches that of the username and password entered
    $sql="SELECT userid FROM wellcoreusers WHERE username='$username' and
    password='$password'";

//Set up a variable called result to hold the result of the SQL query
    $result=mysqli_query($db,$sql);

// Check how big the result is. If no rows are returned, no viable user has
// been found. Likewise, if two users are found, there is a problem.
// Hence, we check if the number of rows in the result equals 1.
// If there is only one result, redirect to a new page using the header method,
// Otherwise, an error message appears to the user.
    if(mysqli_num_rows($result) == 1)
    {
        header("location: home.php"); // Redirecting To another Page
    }else
    {
        echo "Incorrect username or password. Now, don't do it again";
    }
}
?>
