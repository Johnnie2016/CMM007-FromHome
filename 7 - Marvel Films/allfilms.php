<html>
<head>
    <meta charset="utf-8">
    <title>Lists all films in the Marvel database</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>All films</h1>

<?php
include("connection.php");

$sql = "SELECT * FROM marvelmovies";
$result = mysqli_query($db, $sql);

// test if connection was established, and print any errors
if (!$db)
{
    die('Connect Error: ' . mysqli_connect_errno());
}

while($row = $result->fetch_array())
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