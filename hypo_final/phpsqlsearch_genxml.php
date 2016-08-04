<?php  
require dirname(__FILE__)."/includes/db.php";


// Get parameters from URL
$center_lat = $_GET["lat"];
$center_lng = $_GET["lng"];
$radius = $_GET["radius"];

// Start XML file, create parent node
$dom = new DOMDocument("1.0", "utf-8");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a mySQL server
$connection=mysql_connect ($host, $username, $password);
if (!$connection) {
  die("Not connected : " . mysql_error());
}

// Set the active mySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ("Can\'t use db : " . mysql_error());
}



// Search the rows in the markers table
$query = sprintf("SELECT address, name, lat, lng, ( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM hypocare_map_markers HAVING distance < '%s' ORDER BY distance LIMIT 0 , 50",
  mysql_real_escape_string($center_lat),
  mysql_real_escape_string($center_lng),
  mysql_real_escape_string($center_lat),
  mysql_real_escape_string($radius));


$result = mysql_query($query);
if (!$result) {
  die("Invalid query: " . mysql_error());
}



header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name", utf8_encode($row['name']));
  $newnode->setAttribute("address", utf8_encode($row['address']));
  $newnode->setAttribute("lat", utf8_encode($row['lat']));
  $newnode->setAttribute("lng", utf8_encode($row['lng']));
  $newnode->setAttribute("distance", utf8_encode($row['distance']));
}

echo $dom->saveXML();



?>