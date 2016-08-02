<?php
include("../../../../conf/config.php");

extract( $_POST );
//$var4  = $_POST["myvar"];


// need to check for student in database
// this search is not case sensitive

$query="SELECT * FROM student WHERE SFName='$SFName' and SLName='$SLName'";
$result=mysql_query($query) or die('Error, select from database failed');
$num=mysql_numrows($result);

//$stuff=document.getElementById("myvar").nodeValue;
//return true or false based on results.
echo "$num";


mysql_close($conn);
?>