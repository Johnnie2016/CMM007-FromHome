<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Well Registration selection</title>
</head>
<body>
<header>
    <h1>Data4WellCore</h1>
    <h2>Display Core details via Well registration number</h2>
    <p><a href="home.php">Return to search page...</a></p>
</header>
<main>
    <?
         //include("dbconcomplex.php");

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $superheroname = $_POST["superheroName"];
    $mainsuperpower = $_POST["mainSuperpower"];



         if(isset($_POST["wellregistration"])) {

          $WellRegistration = $_POST["wellregistration"];
          echo $WellRegistration;

         $sql_query = "SELECT RowID, Well_Reg_No, Sample_Type_Deal, Ft, Top_Depth, Bottom_Depth, Preservation, Core_No FROM dealexportapr where Well_Reg_No = '$WellRegistration'";
        }
        else {
        $sql_query = "SELECT * FROM dealexportapr";
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

       echo "<article>
             <p> Well Registration <strong> {$WellRegistration} </strong> has samples of type <strong> {$SampleType}</strong> in storage which has a top depth of <strong>{$TopDepth}</strong><strong>{$Feet}</strong>
              <p>and a bottom depth of <strong>{$BottomDepth}</strong><strong>{$Feet}</strong>. The core number is <strong>{$CoreNo}</strong> and the type of preservation is <strong> {$Preservation} </strong></p></article>";
      }
    ?>

</main>
</body>
</html>