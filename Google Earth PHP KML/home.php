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

Click here to open Google Earth and go straight to the North Sea UKCS.<p>
N.B. - In order to use this you will need to have Google Earth installed.

<!-- Link to Google Earth download here -->

<p><a href="http://007intranetjohn.azurewebsites.net/Google%20Earth%20PHP%20KML/BasicNetworkLinkPointsatwebserver.kml">Fly to Google Earth...</a></p>
<p>
<h2>Or would you like to search manually below to view a listed version of the data?</h2><p>
</header>
<main>

    <form action="displayCoreDealDB.php" method="post">
        <p>Select the Well registration of the core data you are interested in</p>
        <select name="wellregistration">
            <?php
            include ("dbconcomplex.php");
            $sql_query = "select distinct Well_Reg_No from dealexportapr";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array()) {
                $WellRegistration = $row['Well_Reg_No'];
                $SampleType = $row['Sample_Type_Deal'];
                $Feet = $row['Ft'];
                $TopDepth = $row['Top_Depth'];
                $BottomDepth = $row['Bottom_Depth'];
                $Preservation = $row['Preservation'];
                $CoreNo = $row['Core_No'];
                $id = $row['RowID'];
                echo "<option value='{$id}'>{$WellRegistration}</option>";
            }
            ?>
        </select><br><p>
            <input type="submit" text="Display Core details">
    </form>
    <!--Another form could be here-->
    <p>

        <form action="displayWellregTestDB.php" method="post">
            <p>Select the Well registration of the well data you are interested in</p>
            <select name="wellregistrationtestdb">
                <?php
                include ("dbconcomplex.php");
                $sql_query = "select distinct WellRegistration from coredukwells";
                $result = $db->query($sql_query);
                while($row = $result->fetch_array())
                {
                    $WellRegtest = $row['WellRegistration'];
                    $idtest = $row['ID'];
                    $wellID = $row ['WellID'];
                    $result = array_unique($row);
                    foreach($result as $WellRegtest -> $row['WellRegistration']){ }
                    echo "<option value='{$idtest}'>{$WellRegtest}</option>";
                }
                ?>
            </select><br><p>
            <input type="submit" text="Display Well details">
        </form>

</main>

</body>
</html>
