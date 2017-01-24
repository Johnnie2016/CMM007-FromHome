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
    <p><a href="home.php">Return to home...</a></p>
</header>
<main>
    <?
         include("dbconcomplex.php");
          if(isset($_GET['wellregistrationtestdb'])) {
          $WellRegtest = $_GET['wellregistrationtestdb'];

         $sql_query = "SELECT * FROM coredukwells where WellRegistration = '$WellRegtest'";
        }
        else {
        $sql_query = "SELECT DISTINCT (WellRegistration), WellID, PercSand, Hydrocarbon, Cored FROM coredukwells";
        }

        $result = $db->query($sql_query);
      while($row = $result->fetch_array())
      {
       $idtest = $row['ID'];
       $wellID = $row['WellID'];
       $WellRegistration = $row['WellRegistration'];
       $PercSand = $row['PercSand'];
       $Hydrocarbon = $row['Hydrocarbon'];
       $Cored = $row['Cored'];
       echo "<article>
             <p> The Well with Well Registration <strong>{$WellRegistration}</strong> has the WellID <strong>{$WellID}</strong> and contains the following percentage of sand <strong>{$PercSand}. </strong>  Was cored ? <strong>{$Cored}</strong> </p></article>";
      }
    ?>

</main>
</body>
</html>



<!-- if(isset($_GET['wellregistrationtestdb'])) {
          $WellRegtest = $_GET['wellregistrationtestdb'];
          $sql_query = "SELECT * FROM coredukwells where WellRegistration = '$WellRegtest'";}  -->


<!-- $WellRegtest = $_POST["wellregistrationtestdb"]; -->
