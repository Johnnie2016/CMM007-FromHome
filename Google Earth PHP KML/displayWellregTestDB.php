<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Well Registration selection</title>
</head>
<body>
<header>
    <h1>Data4WellCore</h1>
    <h2>Display Wells selected via Well registration number</h2>
    <p><a href="home.php">Return to search page...</a></p>
</header>
<main>
    <?php
         include("dbconcomplex.php");
          if(isset($_POST['wellregistrationtestdb'])) {
          $WellRegtest = $_POST['wellregistrationtestdb'];

         $sql_query = "SELECT * FROM coredukwells where WellRegistration = '$WellRegtest'";
        }
        else {
        $sql_query = "SELECT DISTINCT (WellRegistration), ID, WellID, PercSand, Hydrocarbon, Cored FROM coredukwells";
        }

        $result = $db->query($sql_query);
      while($row = $result->fetch_array())
      {
       $idtest = $row['ID'];
       $WellID = $row['WellID'];
       $WellRegistration = $row['WellRegistration'];
       $PercSand = $row['PercSand'];
       $Hydrocarbon = $row['Hydrocarbon'];
       $Cored = $row['Cored'];
       echo "<article>
             <p> Well Registration <strong>{$WellRegistration}</strong> has ID <strong>{$idtest}</strong> and has WellID <strong>{$WellID}.</strong> It contains the following percentage of sand <strong>{$PercSand}. </strong>  Was it cored ? <strong>{$Cored}</strong> </p></article>";
      }
    ?>

</main>
</body>
</html>



<!-- if(isset($_GET['wellregistrationtestdb'])) {
          $WellRegtest = $_GET['wellregistrationtestdb'];
          $sql_query = "SELECT * FROM coredukwells where WellRegistration = '$WellRegtest'";}  -->


<!-- $WellRegtest = $_POST["wellregistrationtestdb"]; -->
