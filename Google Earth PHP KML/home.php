<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header>
<h1>Hello, logged in OK then ?</h1><p>

<h3>How would you like to search ?</h3><p>

Click here to go straight to the North Sea UKCS as seen in Google Earth.<p>
N.B. - In order to use this you will need to have Google Earth installed.

<p><a href="http://007intranetjohn.azurewebsites.net/Google%20Earth%20PHP%20KML/BasicNetworkLinkPointsatwebserver.kml">Open Google Earth...</a></p>

<h3>Or would you like to search manually below ?</h3><p>
</header>
<main>

    <!--Paste SEARCH BOX 1 BACK IN HERE. -----  SEARCH BOX 1 BACK IN HERE.-->


    <p>

        <form action="displayWellregTestDB.php" method="post">
            <p>Select the Well registration of the test data you are interested in</p>
            <select name="wellregistration">
                <?php
                include ("dbconcomplex.php");
                $sql_query = "SELECT WellID, WellRegistration, PercSand, Hydrocarbon, Cored FROM coredukwells";
                $result = $db->query($sql_query);
                while($row = $result->fetch_array()) {
                    $WellID = $row['WellID'];
                    $WellRegistration = $row['WellRegistration'];
                    $id = $row['ID'];
                    echo "<option value='{$id}'>{$WellRegistration}</option>";
                }
                ?>
            </select><br><p>
            <input type="submit" text="Display Well details">
        </form>

</main>

</body>
</html>
