<html>
<head>
    <meta charset="utf-8">
    <title>Lists only films produced by Marvel</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Marvel Films</h1>
<?php
include("connection.php");

$sql = "SELECT * FROM marvelmovies where productionStudio like 'Marvel Studios'";
$result = mysqli_query($db, $sql);

while($row = $result -> fetch_array())
{
    $movieTitle = $row['title'];
    echo "<p>" . $movieTitle . "</p>";
    $year = $row['yearReleased'];
    echo "<p>" . $year . "</p>";
    $studio = $row['productionStudio'];
    echo "<p>" . $studio . "</p>";
    $notes = $row['notes'];
    echo "<p>" . $notes . "</p>";
}

?>


</body>
</html>




