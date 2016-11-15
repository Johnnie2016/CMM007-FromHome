<?php

include("connection.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superheroname = $_POST["superheroName"];
$mainsuperpower = $_POST["mainSuperpower"];

$sql = "INSERT INTO superheroes (firstname, lastname, superheroName, mainSuperpower) VALUES ('$firstname', '$lastname', '$superheroname', '$mainsuperpower')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");
?>
