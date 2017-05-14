<?php

include("dbconcomplex.php");

//$firstname = $_POST["firstname"];
//$lastname = $_POST["lastname"];
//$superheroname = $_POST["superheroName"];
$wellreg = $_POST["wellregistration"];

// $sql = "INSERT INTO superheroes (firstname, lastname, superheroName, mainSuperpower) VALUES ('$firstname', '$lastname', '$superheroname', '$mainsuperpower')";
$sql_query = "SELECT RowID, Well_Reg_No, Sample_Type_Deal, Ft, Top_Depth, Bottom_Depth, Preservation, Core_No FROM dealexportapr WHERE Well_Reg_No = '$wellreg'";

if (mysqli_query($db, $sql_query)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");
?>

<!-- Why is this not working -->
