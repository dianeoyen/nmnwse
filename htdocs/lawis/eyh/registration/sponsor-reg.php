<html>
<head>
<title>Registration: Sponsor-reg</title>
<?php
extract( $_POST );
include("../Includes/page-top.php");
include("../../../../conf/config.php");
?>
</head>

<?php
$query="SELECT * FROM teacher WHERE FName='$FName' and LName='$LName'";
$result=mysql_query($query);
$num=mysql_numrows($result);
if($num==1){
	$row = mysql_fetch_assoc($result);
	$regbefore = "yes";
}
elseif($num==0){
	$regbefore = "no";
}
else{die('Error: duplicate entries in database.  Please make sure and start at the beginning of the registration process by starting at <a href=http://nmnwse.org/lawis/eyh/registration>http://nmnwse.org/lawis/eyh/registration<a/>.');}

?>

<?php
if($regbefore=="no"){
$sql = "INSERT INTO teacher (id, FName, LName, relat, otspec, Email, ephone, dphone, mailadd, school, pname, tc, otinfo, Bringing) VALUES (NULL, '$FName','$LName','$relat','$otspec','$Email','$ephone','$dphone','$mailadd','$school','$pname','$tc','$otinfo','')";
mysql_query($sql) or die('Error, insert into database failed');
}
elseif($regbefore=="yes"){
//update the info
$sql = "UPDATE teacher SET relat='$relat',otspec='$otspec',Email='$Email',ephone='$ephone',dphone='$dphone',mailadd='$mailadd',school='$school',pname='$pname',tc='$tc',otinfo='$otinfo' WHERE FName='$FName' and LName='$LName'";
mysql_query($sql) or die('Error, update database failed');
}
else{
echo "There has been an error!  Please contact us.";
}


$bringstud="no";
$Fstudents=array($s0FName,$s1FName,$s2FName,$s3FName,$s4FName,$s5FName,$s6FName,$s7FName,$s8FName,$s9FName);
$Lstudents=array($s0LName,$s1LName,$s2LName,$s3LName,$s4LName,$s5LName,$s6LName,$s7LName,$s8LName,$s9LName);
for($i=0; $i<10; $i++)
{
    if($Fstudents[$i]!="")
    {
	//print("$Fstudents[$i]<br>");
	$sql = "INSERT INTO student (id, SFName, SLName, SEmail, sphone, smailadd, grade, school, sponsorFName, sponsorLName, aoi1, aoi2, aoi3, aoi4, saoi, peyh, wpeyh, sotinfo) VALUES (NULL,'$Fstudents[$i]','$Lstudents[$i]',NULL,NULL,NULL,NULL,'$school','$FName','$LName',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
	mysql_query($sql) or die('Error, insert into database failed');
	$bringstud="yes";
//FOR SOME REASON BRINGING IS ALWAYS BLANK
	//if($row['Bringing']!=""){
	$upbring = "UPDATE teacher SET Bringing=concat(Bringing,', $Fstudents[$i] $Lstudents[$i]') WHERE FName='$FName' and LName='$LName'";
	mysql_query($upbring) or die('Error, insert into database failed');
	//}else {
	//$upbring = "UPDATE teacher SET Bringing='$Fstudents[$i] $Lstudents[$i]' WHERE FName='$FName' and LName='$LName'";
	//mysql_query($upbring) or die('Error, insert into database failed');
	//}
    }
}
if($regbefore=="no"){
echo "You have sucessfully registered for EYH!";
}
elseif($regbefore=="yes"){
echo "You have sucessfully updated your registration!";
}
echo "  Here's your information:<br>";
echo "<table border=1><tr><td>Name</td><td>";
print( "$FName " ); print( "$LName" );
echo "</td><tr><td>Evening Phone</td><td>";
print( "$ephone" );
echo "</td><tr><td>Email</td><td>";
print( "$Email" );
if($Bringing!=""){
echo "</td><tr><td>Registered Students:</td><td>";
print( "$Bringing" );
}
echo "</td></table><p>";

if($bringstud=="yes"){ 
	echo "You have registered students, please instruct them to complete the registration process by using the 'student' link on the left side at http://nmnwse.org/lawis/eyh/registration.  The registration is not complete until every student has filled out the registration pages!<br><br>";
	echo "Every student must have a signed permission slip to attend EYH.  <b>It is the sponsor's responsibility to bring the signed forms to registration the day of the conference.</b>  Please print the following forms to hand out to students, and collect the signed forms from students to bring to registration.<p>";
for($i=0; $i<10; $i++)
{
    if($Fstudents[$i]!="")
    {
	echo "<table border=1>";
	echo "<tr><td colspan=\"3\">My child, ";  
	print("$Fstudents[$i] $Lstudents[$i]");
	echo ", is in at least 8th grade and has my permission to attend Expanding Your Horizons (EYH).  I give my permission for her to use public transportation if necessary to attend the workshops.  I give my permission for her to be photographed for publicity purposes.  In the event of any emergency while my child is attending EYH, I give my permission for her to receive emergency medical treatment and care.  If my child needs any special accomodations (e.g. sign language interpreter, special diet, etc) I have verified that it was indicated in her registration.</td></tr>";
	echo "<tr valign=top halign=left><td>Parent or Guardian (Please print name):<br><br><br></td><td>Parent or Guardian signature:<br><br><br></td><td>Daytime phone in case of emergency:<br><br><br></td></tr>";
	echo "<tr><td>Alternate Emergency Contact Name:<br><br><br></td><td>Alternate Emergency Contact Daytime telephone<br><br><br></td><td>Alternate Emergency Contact Relationship to EYH participant<br><br><br></td></tr>";
	echo "</table><p>";
	}
    }
}
else{
	echo "You have not registered any students at this time.<br>";
}
?>


<p>
Please print this page for your records, and then close your broswer or go <a href="http://nmnwse.org/lawis/eyh/registration/">back to the eyh pages</a>.
<p>
<?php
mysql_close($conn);
include("reg-help.php");
include("../Includes/page-bot.php");
?>

