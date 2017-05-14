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
    <!--  Commented out for now -----
    <form action="selectWell.php" method="post">
        <p>Select the Well registration of the core data you are interested in</p>
        <select name="wellregistration">

        </select><br><p>
            <input type="submit" text="Display Core details">
    </form>
    -->


    <form action="selectwellagain.php" method="post">
        <p>Select the Well registration of the core data you are interested in</p>
        <select name="wellregistration" id="wellregistration">
            <?php
            include ("dbconcomplex.php");
            $sql_query = "select distinct Well_Reg_No from dealexportapr";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array())
            {
                $WellReg = $row['Well_Reg_No'];
                $id = $row['RowID'];
                echo "<option value='{$id}'>{$WellReg}</option>";
            }
            ?>
        </select><br><p>
            <input type="submit" text="Display Core details">
    </form>

</main>
</body>
</html>

<!--
<form action="formResponse.php" method="post">
    <label>Surname </label><input type="text" name="surname"><br><br>
    <label>Name </label><input type="text" name="name"><br><br>
    <label>Gender </label><input type="text" name="gender"><br><br>
    <label>Main Superhero Power </label><input type="text" name="power">
    <input type="submit" value="Submit">
</form>
-->