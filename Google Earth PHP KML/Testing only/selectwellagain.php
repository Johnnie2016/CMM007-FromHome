<?php

include("dbconcomplex.php");

//$firstname = $_POST["firstname"];
//$lastname = $_POST["lastname"];
//$superheroname = $_POST["superheroName"];
$WellReg = $_POST["wellregistration"];

// $sql = "INSERT INTO superheroes (firstname, lastname, superheroName, mainSuperpower) VALUES ('$firstname', '$lastname', '$superheroname', '$mainsuperpower')";
$sql_query = "SELECT RowID, Well_Reg_No, Sample_Type_Deal, Ft, Top_Depth, Bottom_Depth, Preservation, Core_No FROM dealexportapr WHERE Well_Reg_No = '$WellReg'";

  if (mysqli_query($db, $sql_query)) {
    echo "<article>
             <p> Well Registration <strong> {$WellReg} </strong> has samples of type <strong> {$SampleType}</strong> in storage which has a top depth of <strong>{$TopDepth}</strong><strong>{$Feet}</strong>
              <p>and a bottom depth of <strong>{$BottomDepth}</strong><strong>{$Feet}</strong>. The core number is <strong>{$CoreNo}</strong> and the type of preservation is <strong> {$Preservation} </strong></p></article>";
    }

    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

    header("location:index.php");
?>

