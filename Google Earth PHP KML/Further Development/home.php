<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="assets/CSS/style.css" type="text/css">
    <link rel="stylesheet" href="assets/CSS/unsemantic-grid-responsive-tablet.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' type='text/css'>
</head>


<body>

<header>
    <img src="assets/images/gusherderrick.png" alt="Struck oil" id="gusherderrick">
    <img src="assets/images/Header%20logo%20Orange.PNG" alt="header" id="headerlogo">
    <br>
    <h2>Hello, now you have logged in, you have a choice of search methods</h2>

    <h3>To carry out a manual search and view a listed version of the data,<br>
    use the drop down selector for either the core data or below it, well data.<br>
    a list of the relavant data will be retrieved and displayed.</h3><p>
</header>


<main>

    <form action="displayCoreDealDB.php" method="post">
        <h3>Select the Well registration of the core data you are interested in</h3>
        <select name="wellregistration">

            <?php
            include ("dbconcomplex.php");
            $sql_query = "select distinct Well_Reg_No from dealexportapr";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array())
            {
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

        </select><br><br>
            <input type="submit" text="Display Core details">
    </form>

    <!--Another form could be here-->

    <br>
    <form action="displayWellregTestDB.php" method="post">
        <h3>Select the Well registration of the well data you are interested in</h3>
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
                    echo "<option value='{$idtest}'>{$WellRegtest}</option>";
                }
                ?>

        </select><br><br>
            <input type="submit" text="Display Well details">
    </form>

    <h3>Click here to open Google Earth and go straight to the North Sea UKCS.
        N.B. - In order to use this you will need to have Google Earth installed.
        <br><br>A link to do this can be found here:</h3>

    <!-- Link to Google Earth download page -->
    <p><a href="https://www.google.co.uk/earth/download/gep/agree.html">Download Google Earth Pro...</a></p>


    <h3>To go to the starting point in the UK North Sea, click below. All wells within a 200 mile radius of the starting point will be displayed.
    If you move the mouse, to a new position and click refresh, all wells within 200 miles of the new position will be displayed.</h3>
    <p><a href="http://007intranetjohn.azurewebsites.net/Google%20Earth%20PHP%20KML/BasicNetworkLinkPointsatwebserver.kml">Fly to Google Earth...</a></p>

</main>

<br><br>
<footer class="grid-66">
    <p>(c)John Morrison 2017</p>
</footer>


</body>
</html>

<!-- $result = array_unique($row);
                    foreach($result as $row['WellRegistration'] => $WellRegtest) {echo $WellRegtest}; -->