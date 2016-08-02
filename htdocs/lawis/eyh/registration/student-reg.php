<html>
<head>
<title>Registration: Student-reg</title>
<?php
extract( $_POST );
?>
<?php
include("../Includes/page-top.php");
include("../../../../conf/config.php");
?>

<?php
$sql = "UPDATE student SET SEmail='$SEmail',sphone='$sphone',smailadd='$smailadd',grade='$grade',school='$school',aoi1='$aoi1',aoi2='$aoi2',aoi3='$aoi3',aoi4='$aoi4',saoi='$saoi',peyh='$peyh',wpeyh='$wpeyh',sotinfo='$sotinfo' WHERE SFName='$SFName' and SLName='$SLName'";
mysql_query($sql) or die('Error, update database failed');
?>
Printable Registration Confirmation:<br>
<?php print( "$SFName " );
print( "$SLName " ); ?>
has successfully registered for EYH!  See you there!
<p>
Please print this page for your records, and then close your broswer or go <a href="http://nmnwse.org/lawis/eyh/registration/">back to the eyh pages</a>.




<?php
mysql_close($conn);
include("reg-help.php");
include("../Includes/page-bot.php");
?>

