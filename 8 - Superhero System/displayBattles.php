<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Display all Battles</h2>
    <p><a href="index.php">Return to home...</a></p>
</header>
<main>
    <?
    include ("connection.php");

    if(isset($_GET['superhero'])) {
        $superheroID = $_GET['superhero'];
        $sql_query = "SELECT * FROM superherobattles where superheroID = '$superheroID'";
    }
else {
    $sql_query = "SELECT * FROM superherobattles";
}


    $result = $db->query($sql_query);
    while($row = $result->fetch_array())
    {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $superheroname = $row['superheroName'];
        $mainsuperpower = $row['mainSuperpower'];
        $villainfought = $row['villainFought'];
        echo "<article>
            <p> The superhero known as <strong>{$superheroname}</strong> recently fought <strong>{$villainfought}</strong> using <strong>{$mainsuperpower}</strong> </p>";
    }
    ?>
</main>
</body>
</html>