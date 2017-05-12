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
    <?php
         include("dbconcomplex.php");

         if(isset($_POST['wellregistration'])) {
         $WellRegistration = $_POST['wellregistration'];
         $sql_query = "SELECT WellRegistration, WellID, PercSand, Hydrocarbon, Cored, OrigID FROM coredUKHCorNotes where WellRegistration = '$WellRegistration'";
        }
        else {
            $sql_query = "SELECT WellRegistration, WellID, PercSand, Hydrocarbon, Cored, OrigID FROM coredUKHCorNotes";
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
             <p>Well Registration <strong>{$WellRegistration}</strong> has the WellID <strong>{$WellID}</strong>, the Original ID <strong>{$OrigID}</strong> and contains percentage of sand <strong>{$PercSand}</strong>%.
              <br>Remarks on Hydrocarbon indications <strong>{$Hydrocarbon}</strong>.  Was it cored ? <strong>{$Cored}</strong> </p></article>";
      }
    ?>

</main>

<br><br>
<footer class="grid-100">
    <p>(c)John Morrison 2017</p>
</footer>

</body>
</html>