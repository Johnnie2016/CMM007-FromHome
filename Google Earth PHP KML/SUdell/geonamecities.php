<?php
// Connect to the database.
include 'dbconcomplex.php';

// Execute the MySQL query to retrieve the data
$query = "select * 
              from geoname
              where (country = 'US')
                and (state = 'PA')
                and (population > 25000)";
// $result = mysqli_query($query);
$result = $db->query($query);
if (!$result)
    die("Unable to retrieve data");















// Prepare the KML header
$header = '<?xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://earth.google.com/kml/2.2">
<Document>
  <name>Cities in Pennsylvania</name>
  <Style id="city_style">
    <IconStyle>
      <Icon>
        /* <href>http://maps.google.com/mapfiles/kml/pal4/icon56.png</href> */
        <img src="assets/images/red.PNG" alt="City" id="citymarker">
      </Icon>
    </IconStyle>
  </Style>';

// Generate KML placemarks for the retrieved data
while ($row = mysqli_fetch_array($result))
{
    $placemarks = $placemarks.'
  <Placemark id="'.$row['country'].'_'.$row['state'].'_'.urlencode($row['name']).'">
    <name>'.htmlentities($row['name']).'</name>
    <description><![CDATA[
      Population '.$row['population'].'
    ]]></description>
    <styleUrl>#city_style</styleUrl>
    <Point>
      <coordinates>'.$row['longitude'].','.$row['latitude'].',0</coordinates>
    </Point>
  </Placemark>';
}

// Prepare the KML footer
$footer = '
</Document>
</kml>';

// Output the final KML
header('Content-type: application/vnd.google-earth.kml+xml');
echo $header;
echo $placemarks;
echo $footer;
?>