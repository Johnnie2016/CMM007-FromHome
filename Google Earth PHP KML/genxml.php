<?php
error_reporting(0);
function parseLocation(){
$radius = $_GET['radius'];
if (!$radius) $radius = 200;
$bbox = $_GET['BBOX'];
$bbox = split(",",$bbox);
$west = $bbox[0];
$south = $bbox[1];
$east = $bbox[2];
$north = $bbox[3];
$center_lat = (($north - $south)/2) + $south;
$center_lng = (($east - $west)/2) + $east;
$location = array("center_lat"=>$center_lat,
"center_lng"=>$center_lng,"radius"=>$radius);
return $location;
}
$location = parseLocation();
$center_lat = $location['center_lat'];
$center_lng = $location['center_lng'];
$radius = $location['radius'];

// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("kml");
$kmlnode = $dom->appendChild($node);
$foldernode = $dom->createElement("Folder");
$parnode = $kmlnode->appendChild($foldernode);
$opennode = $dom->createElement("open","1");
$parnode->appendChild($opennode);


require("connection.php");

// Opens a connection to a mySQL server
 $connection=mysqli_connect($db);
 if (!$connection) {
 die("Not connected : " . mysqli_connect_errno());
 }
 if ($connection) {
    die ('Connection success: Server connection working' . mysqli_list_tables());
}


// Set the active mySQL database
$db_selected = mysqli_select_db($db, "jm0207753");
if (!$db_selected) {
die ("Can\'t use db : " . mysqli_connect_errno());
}

// Search the rows in the markers table
$query = "SELECT WellID, WellRegistration, LatDD, LonDD, ( 3959 * acos( cos("   
."radians(".$center_lat.") ) * cos( radians( LatDD ) ) * cos( radians( LonDD )"
."- radians(" . $center_lng . ") ) + sin( radians(".$center_lat.") ) *"
."sin( radians( LatDD ) ) ) ) AS distance FROM coredukwells HAVING distance < "
.$radius. " ORDER BY distance LIMIT 0 , 20";
$result = mysqli_query($db, $query);
if (!$result) {
die("Invalid query: " . mysqli_connect_error());
}

//header("Content-type: application/vnd.google-earth.kml+xml");  
// Iterate through the rows, adding XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
$node = $dom->createElement("Placemark");
$placenode = $parnode->appendChild($node);
$namenode = $dom->createElement("WellID",htmlentities ($row['WellID']));
$placenode->appendChild($namenode);
$descriptioncdata = $dom->createCDATASection("<b>Well Registration:</b> " .
$row['WellRegistration'] ."<br/><b>Distance:</b> " . $row['distance']);
$descriptionnode=$dom->createElement("description");
$descriptionnode->appendChild($descriptioncdata);
$placenode->appendChild($descriptionnode);
$coor = $row['LonDD'] . "," . $row['LatDD'];
$pointnode = $dom->createElement("Point");
$placenode->appendChild($pointnode);
$coornode = $dom->createElement("coordinates", $coor);
$pointnode->appendChild($coornode);
}
echo $dom->saveXML();
?>