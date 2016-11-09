<?php

include("connection.php");

$superheroID = $_POST["superhero"];
$villain = $_POST["villain"];

$sql = "INSERT INTO battles (superheroID, villainFought) VALUES ('$superheroID', '$villain')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");
?>
