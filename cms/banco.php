<?php
//    require("phpsqlajax_dbinfo.php");
//
//    // Start XML file, create parent node
//    $doc = domxml_new_doc("1.0");
//    $node = $doc->create_element("markers");
//    $parnode = $doc->append_child($node);
//
//    // Opens a connection to a MySQL server
//    $connection=mysql_connect ('localhost', $username, $password);
//    if (!$connection) {
//      die('Not connected : ' . mysql_error());
//    }
//
//    // Set the active MySQL database
//    $db_selected = mysql_select_db($database, $connection);
//    if (!$db_selected) {
//      die ('Can\'t use db : ' . mysql_error());
//    }
//
//    // Select all the rows in the markers table
//    $query = "SELECT * FROM tbl_maps WHERE 1";
//    $result = mysql_query($query);
//    if (!$result) {
//      die('Invalid query: ' . mysql_error());
//    }
//
//    header("Content-type: text/xml");
//
//    // Iterate through the rows, adding XML nodes for each
//    while ($row = @mysql_fetch_assoc($result)){
//      // Add to XML document node
//      $node = $doc->create_element("marker");
//      $newnode = $parnode->append_child($node);
//
//      $newnode->set_attribute("name", $row['name']);
//      $newnode->set_attribute("address", $row['address']);
//      $newnode->set_attribute("lat", $row['lat']);
//      $newnode->set_attribute("lng", $row['lng']);
//      $newnode->set_attribute("type", $row['type']);
//        
//        
//        var_dump($newnode);
//    }

//    $xmlfile = $doc->dump_mem();
//    echo $xmlfile;

?>

<?php
//require("phpsqlajax_dbinfo.php");
//
//function parseToXML($htmlStr)
//{
//$xmlStr=str_replace('<','&lt;',$htmlStr);
//$xmlStr=str_replace('>','&gt;',$xmlStr);
//$xmlStr=str_replace('"','&quot;',$xmlStr);
//$xmlStr=str_replace("'",'&#39;',$xmlStr);
//$xmlStr=str_replace("&",'&amp;',$xmlStr);
//return $xmlStr;
//}
//
//// Opens a connection to a MySQL server
//$connection=mysql_connect ('localhost', $username, $password);
//if (!$connection) {
//  die('Not connected : ' . mysql_error());
//}
//
//// Set the active MySQL database
//$db_selected = mysql_select_db($database, $connection);
//if (!$db_selected) {
//  die ('Can\'t use db : ' . mysql_error());
//}
//
//// Select all the rows in the markers table
//$query = "SELECT * FROM markers WHERE 1";
//$result = mysql_query($query);
//if (!$result) {
//  die('Invalid query: ' . mysql_error());
//}
//
//header("Content-type: text/xml");
//
//// Start XML file, echo parent node
//echo '<markers>';
//
//// Iterate through the rows, printing XML nodes for each
//while ($row = @mysql_fetch_assoc($result)){
//  // Add to XML document node
//  echo '<marker ';
//  echo 'name="' . parseToXML($row['name']) . '" ';
//  echo 'address="' . parseToXML($row['address']) . '" ';
//  echo 'lat="' . $row['lat'] . '" ';
//  echo 'lng="' . $row['lng'] . '" ';
//  echo 'type="' . $row['type'] . '" ';
//  echo '/>';
//}
//
//// End XML file
//echo '</markers>';

?>


<?php

require("phpsqlajax_dbinfo.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());}

// Set the active MySQL database

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table

$query = "SELECT * FROM tbl_maps WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("type", $row['type']);
}

echo $dom->saveXML();

?>