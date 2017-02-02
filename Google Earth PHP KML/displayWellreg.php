<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Well Registration selection</title>
</head>
<body>
<header>
    <h1>Data4WellCore</h1>
    <h2>Display Wells select via Well registration number</h2>
    <p><a href="home.php">Return to search page...</a></p>
</header>
<main>
    <?php
         include("dbconcomplex.php");

         if(isset($_GET['wellregistration'])) {
         $WellRegistration = $_GET['wellregistration'];
         $sql_query = "SELECT WellRegistration, WellID, PercSand, Hydrocarbon, Cored FROM coredUKHCorNotes where WellRegistration = '$WellRegistration'";
        }
        else {
            $sql_query = "SELECT WellRegistration, WellID FROM coredUKHCorNotes";
        }

        $result = $db->query($sql_query);
      while($row = $result->fetch_array())
      {
       $OrigID = $row['OrigID'];
       $WellID = $row['WellID'];
       $WellRegistration = $row['WellRegistration'];
       $PercSand = $row['PercSand'];
       $Hydrocarbon = $row['Hydrocarbon'];
       $Cored = $row['Cored'];
       echo "<article>
             <p> The Well with Well Registration<strong>{$WellRegistration}</strong> has the WellID <strong>{$WellID}</strong>and contains the following percentage of sand<strong>{$PercSand}</strong> and was cored (Y or N) <strong>{$Cored}</strong> </p></article>";
      }
    ?>

</main>
</body>
</html>