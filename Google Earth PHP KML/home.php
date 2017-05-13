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

<!-- Add link to Google Earth download page here !!-->

<p><a href="http://007intranetjohn.azurewebsites.net/Google%20Earth%20PHP%20KML/BasicNetworkLinkPointsatwebserver.kml">Fly to Google Earth...</a></p>
<p>
<h2>Or would you like to search manually below to view a listed version of the data?</h2><p>
</header>
<main>

    <?php
    //sql stuff here and populate array for id and $WellRegistration

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
    //$id = array("1", "2", "3", "4", "5", "6", "7");
    //$WellRegistration= array("well 1","well 2","well 3" );
    ?>

    <form action="displayCoreDealDB.php" method="post">
        <p>Select the Well registration of the core data you are interested in</p>
        <select name="wellregistration">

            <?php
            $cnt=count($id);
            for ($x = 0; $x <$cnt; $x++) {
                echo "<option value='{$id[$x]}'>{$WellRegistration[$x]}</option>";
            }
            ?>

        </select><br><p>
            <input type="submit" name="Display Core details">
    </form>




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
                    echo "<option value='{$idtest}'>{$WellRegtest}</option>";
                }
                ?>
            </select><br>
            <input type="submit" text="Display Well details">
        </form>


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




</main>

</body>
</html>

<!-- $result = array_unique($row);
                    foreach($result as $row['WellRegistration'] => $WellRegtest) {echo $WellRegtest}; -->