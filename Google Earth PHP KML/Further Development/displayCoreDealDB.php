   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Well Registration selection</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' type='text/css'>
</head>

<body>
<header>
    <img src="assets/images/gusherderrick.PNG" alt="Struck oil" id="gusherderrick">
    <img src="assets/images/Header%20logo%20Orange.PNG" alt="header" id="headerlogo">
    <br>
    <h1>Data4WellCore</h1>
    <h2>Display Core details via Well registration number</h2>
    <p><a href="home.php">Return to search page...</a></p>
</header>

<main>
    <?
         include("dbconcomplex.php");
            if(isset($_POST['wellregistration'])) {

            $WellRegistration = $_POST['wellregistration'];
            echo $WellRegistration;
            $sql_query = "SELECT RowID, Well_Reg_No, Sample_Type_Deal, Ft, Top_Depth, Bottom_Depth, Preservation, Core_No FROM dealexportapr where Well_Reg_No = '$WellRegistration'";
            }
            else {
                $sql_query = "SELECT RowID, Well_Reg_No, Sample_Type_Deal, Ft, Top_Depth, Bottom_Depth, Preservation, Core_No FROM dealexportapr";
            }

             $result = $db->query($sql_query);
              while($row = $result->fetch_array())
            {
            $ID = $row['RowID'];
            $WellRegistration = $row['Well_Reg_No'];
            $SampleType = $row['Sample_Type_Deal'];
            $Feet = $row['Ft'];
            $TopDepth = $row['Top_Depth'];
            $BottomDepth = $row['Bottom_Depth'];
            $CoreNo = $row['Core_No'];
            $Preservation = $row['Preservation'];
            echo
            "<article>
             <p>Well Registration <strong> {$WellRegistration} </strong> has samples of type <strong> {$SampleType}</strong> in storage which has the a top depth of <strong>{$TopDepth}</strong><strong>{$Feet}</strong>
             <br>and a bottom depth of <strong>{$BottomDepth}</strong><strong>{$Feet}</strong>. The core number is <strong>{$CoreNo}</strong> and the type of preservation is <strong> {$Preservation} </strong></br>
             </article>";
             }
    ?>

</main>

<br><br>
<footer class="grid-100">
    <p>(c)John Morrison 2017</p>
</footer>


</body>
</html>

   <!-- Once the dropdown gets selected and posted to your display page, use this code:

$temp_rating = $_POST['rating_dropdown'];
mysql_query("SELECT * FROM userdata WHERE rating = '$temp_rating'");  -->