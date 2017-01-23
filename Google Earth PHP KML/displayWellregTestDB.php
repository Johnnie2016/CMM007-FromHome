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
    <p><a href="home.php">Return to home...</a></p>
</header>
<main>
    <?
         include("dbconcomplex.php");
         if(isset($_GET['wellregistration'])) {
          $WellRegistration = $_GET['wellregistration'];
          $sql_query = "SELECT * FROM coredukwells where WellRegistration = '$WellRegistration'";
        }
        else {
        $sql_query = "SELECT DISTINCT (WellRegistration), PercSand, Hydrocarbon, Cored FROM coredukwells";
        }

        $result = $db->query($sql_query);
      while($row = $result->fetch_array())
      {
       $ID = $row['ID'];
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

<!-- and if I were select from a database I would use DISTINCT(col) where column is where its looking for unique entries: -->

$sql = mysql_query("SELECT DISTINCT(unique_column) from table");
while($row = mysql_fetch_array($sql)) {
$uniquevalue = $row['unique value'];
echo $unique_value;
}