<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header>
    <h2>Hello, now you have logged in, </h2>
    <h2>how would you like to search ?</h2><p>
</header>

<main>

<?php
//sql stuff here and populate array for id and $WellRegistration

include ("dbconcomplex.php");
$sql_query = "select distinct userid from wellcoreusers";
$result = $db->query($sql_query);
while($row = $result->fetch_array())
{
    $usernumber = $row['userid'];
    $name = $row['username'];
}

?>
    <!-- New layout attempt  -->
    <form action="displayuserDB.php" method="post">
        <p>Select the user you are interested in</p>
        <select name="userselection">

            <?php
            $cnt=count($name);
            for ($x = 0; $x <$cnt; $x++) {
                echo "<option value='{$name[$x]}'>{$usernumber[$x]}</option>";
            }
            ?>

        </select><br><p>
            <input type="submit" name="Display user details">
    </form>


    <!-- Original method -->
    <form action="displayuserTestDB.php" method="post">
        <p>Select the user you are interested in</p>
        <select name="userselectionTestDB">
            <?php
            include ("dbconcomplex.php");
            $sql_query = "select distinct userid from wellcoreusers";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array())
            {
                $usernumber = $row['userid'];
                $name = $row['username'];
                $pword = $row ['password'];
                echo "<option value='{$name}'>{$usernumber}</option>";
            }
            ?>
        </select><br>
        <input type="submit" text="Display user details">
    </form>

</main>

</body>
</html>