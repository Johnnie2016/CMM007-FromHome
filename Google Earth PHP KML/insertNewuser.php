<?php

include("dbconcomplex.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$emailaddress = $_POST["emailaddress"];

$sql = "INSERT INTO wellcoreregister (firstname, lastname, emailaddress) VALUES ('$firstname', '$lastname', '$emailaddress')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:messagenewusers.php");
?>
