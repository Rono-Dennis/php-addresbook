<?php
include "connection.php";
// header
$query = "SELECT * FROM `user_details`";
$dom = new DOMDocument( '1.0', 'utf-8' );
$dom ->formatOutput = True;
$root = $dom->createElement( 'addressbook' );
$dom ->appendChild( $root );
$result = $conn->query($query);

while( $row = $result->fetch_assoc() )
{
$node = $dom->createElement( 'address' );
foreach( $row as $key => $val )
{
$child = $dom->createElement( $key );
$child ->appendChild( $dom->createCDATASection( $val) );
$node ->appendChild( $child );
}
$root->appendChild( $node );
}
$dom->save( 'addressbook.xml' );
header( 'Content-type: text/xml' );
echo $dom->saveXML();
header("Location:index.php");
?>

