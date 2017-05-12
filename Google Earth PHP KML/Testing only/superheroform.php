<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Create a Superhero</h2>
    <p><a href="index.php">Return to home...</a></p>
</header>
<main>
    <form action="displayCoreDealDB.php" method="post">
        <p>Select the Well registration of the core data you are interested in</p>
        <select name="wellregistration">

        </select><br><p>
            <input type="submit" text="Display Core details">
    </form>


    <form action="displayCoreDealDB.php" method="post">
        <p>Select the Well registration of the core data you are interested in</p>
        <select name="wellregistration">
            <?php
            include ("dbconcomplex.php");
            $sql_query = "select distinct Well_Reg_No from dealexportapr";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array())
            {
            $WellRegistration = $row['Well_Reg_No'];
                $id = $row['RowID'];
                echo "<option value='{$id}'>{$WellRegistration}</option>";
            }
            ?>
        </select><br><p>
            <input type="submit" text="Display Core details">
    </form>

</main>
</body>
</html>
