<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Well Registration selection</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' type='text/css'>
</head>


<body>
<header>
    <img src="assets/images/gusherderrick.PNG" alt="Struck oil" id="gusherderrick">
    <img src="assets/images/Header%20logo%20Orange.PNG" alt="header" id="headerlogo">
    <br>
    <h1>Data4WellCore</h1>
    <h2>Display Wells selected via Well registration number</h2>
    <p><a href="home.php">Return to search page...</a></p>
</header>
<main>
    <?
         include("dbconcomplex.php");
          //if(isset($_POST['wellregistrationtestdb'])) {
          $WellRegtest = $_POST['wellregistrationtestdb'];

          $sql_query = "SELECT WellRegistration, ID, WellID, PercSand, Hydrocarbon, Cored FROM coredukwells where WellRegistration = '" . $WellReg ."'";
          //}
          //else {
          //$sql_query = "SELECT WellRegistration, ID, WellID, PercSand, Hydrocarbon, Cored FROM coredukwells";
        // }

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
             <p>Well Registration <strong>{$WellRegistration}</strong> has the ID <strong>{$idtest}</strong>, has the WellID <strong>{$WellID}</strong> 
             and contains percentage of sand <strong>{$PercSand}</strong>%.  Was it cored ? <strong>{$Cored}</strong> </p></article>";
      }
    ?>

</main>

<br><br>
<footer class="grid-100">
    <p>(c)John Morrison 2017</p>
</footer>

</body>
</html>



<!-- if(isset($_GET['wellregistrationtestdb'])) {
          $WellRegtest = $_GET['wellregistrationtestdb'];
          $sql_query = "SELECT * FROM coredukwells where WellRegistration = '$WellRegtest'";}  -->


<!-- $WellRegtest = $_POST["wellregistrationtestdb"]; -->
