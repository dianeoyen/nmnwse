<html>
<head>
<title>Registration: Student</title>
<?php
extract( $_POST );
include("../Includes/page-top.php");
include("../../../../conf/config.php");
?>

<script language="JavaScript">
/*
    This function is called when
    the 'Submit Registration' button is pressed
    Output : true if all input are correct, false otherwise
*/
function checkForm()
{
    // the variables below are assigned to each
    // form input 
    var gemail, gsphone, ggrade, gpeyh;

    with(window.document.regform)
    {
        gsemail   = SEmail;
        gsphone     = sphone;
	ggrade	= grade;
	gpeyh = peyh;
    }
    
    realphone = new RegExp(/^\d{3}\-\d{3}\-\d{4}$/);
    //realphone = new RegExp(/\d{3}\-\d{3}\-\d{4}/);

    // alert the visitor if email is empty or the format is not correct 
    if(trim(gsemail.value) != '' && !isEmail(trim(gsemail.value)))
    {
        alert('Please enter a valid email address or leave it blank');
        if (window.focus) {gsemail.focus();}
        return false;
    }
    // Check for valid phone number
    else if(!realphone.test(trim(gsphone.value)))
    {
        alert('Bad phone number - please use format 505-xxx-xxxx, you put in:'+gsphone.value);
        if (window.focus) {gsphone.focus();}
	return false;
    } 
    else if(ggrade.value == 'default')
    {
        alert('Please select your grade');
        if (window.focus) {ggrade.focus();}
	return false;
    } 
    else
    {
         
       // check that one of the radio buttons has been checked
	// Loop from zero to the one minus the number of radio button selections
	var radio_choice = false;
	for (counter = 0; counter < gpeyh.length; counter++)
	{
	// If a radio button has been selected it will return true
	// (by default it was set to false)
		if(gpeyh[counter].checked)
		{radio_choice = true;}
	}
      	if (!radio_choice)
	{
		// If there were no selections made display an alert box 
		alert("You must select either Yes or No in response to attending an EYH conference in the past");
		return false;
	}
	// when all input are correct 
       // return true so the form will submit  
       return true;
    }
}


/*
Strip whitespace from the beginning and end of a string
Input  : a string
Output : the trimmed string
*/
function trim(str)
{
    return str.replace(/^\s+|\s+$/g,'');
}

/*
Check if a string is in valid email format. 
Input  : the string to check
Output : true if the string is a valid email address, false otherwise.
*/
function isEmail(str)
{
    var regex = /^[-_.a-z0-9]+@(([-a-z0-9]+\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i;
    return regex.test(str);
}
</script>

</head>
<body>
<?php
if($_GET['printable'] == 1){
die('There is no printable version for this page.  Push back, complete the registration, and you will have a chance to print the confirmation page.');
} ?>
<?php
$query="SELECT * FROM student WHERE SFName='$SFName' and SLName='$SLName'";
$result=mysql_query($query) or die('Error, select from database failed');
$num=mysql_numrows($result);
if($num==1){
	$row = mysql_fetch_assoc($result);
}
else {die('Error: duplicate entries in database.  Please make sure and start at the beginning of the registration process by starting at <a href=http://nmnwse.org/lawis/eyh/registration>http://nmnwse.org/lawis/eyh/registration<a/>.');}
?>
Great!  You have been registered by your sponsor.  Please fill out this form with your information.  You may come back to this form and update your information at any time.<br>
<form method="post" name="regform" action="student-reg.php?printable=1">
 <table width="1000" border="0" cellpadding="7" cellspacing="1">
 <tr><td colspan="2">Required fields are marked with *<br><br></td></tr>
 <tr> 
   <td width="100">First Name</td> 
   <td> 
    <?php print( "$SFName" ); ?> <input type="hidden" name="SFName" value= <?php print( "$SFName" ); ?>>
   </td> 
 </tr>
 <tr> 
   <td width="100">Last Name</td> 
   <td> 
    <?php print( "$SLName" ); ?> <input type="hidden" name="SLName" value= <?php print( "$SLName" ); ?>>
 </tr>
  <tr> 
   <td width="100">Email</td>
   <td> 
    <input name="SEmail" type="text" id="SEmail" size="30" maxlength="50"  value="<?php print($row['SEmail']);?>"></td>
 </tr>
  <tr> 
   <td width="100">Phone*</td>
   <td> 
    <input name="sphone" type="text" id="sphone" size="12" maxlength="16" value="<?php print($row['sphone']);?>">  Please use format 505-xxx-xxxx</td>
 </tr>
  <tr> 
   <td width="100">Mailing Address</td> <td> 
    <textarea name="smailadd" cols="40" rows="5" id="smailadd"><?php print($row['smailadd']);?></textarea><br>
   </td>
 </tr>

  <td width="100">Grade*</td> 
   <td> 
	<?php $g=array("","7th","8th","9th","10th","Other");
	$gvalue=array("default","7","8","9","10","Other");
	echo "<select name=grade>";
	for($i=0; $i<6; $i++)
	{
		echo "<option value=\"$gvalue[$i]\"";
		if($row['grade']==$gvalue[$i]||$i=="0"){echo " selected";}
		echo ">$g[$i]</option>\n";
	}
	echo "</select>";
	?>
    </td>
 </tr>

  <tr> 
   <td width="100">School Name (if applicable)</td>
   <td>  
      <input name="school" type="text" id="school" value="<?php print($row['school']);?>" size="30" maxlength="50">
   </tr>
  <tr> 
   <td width="100">Teacher or Adult Sponsor's Name (if applicable)</td>
   <td> 
    <?php print($row['sponsorFName']);print(" "); print($row['sponsorLName']); ?>
 </tr>
 <tr>
  <td width="100">Please indicate your general area(s) of interest</td>
  <td>
	<?php $aoi=array("Do Not Know","Math","Computer Science","Biology","Medical Sciences","Chemistry","Physics","Architecture","Astronomy","Engineering");
	for($i=1; $i<5; $i++)
	{
		echo "$i:<select name=aoi$i>";
		$tmp="aoi$i";
		for($j=0; $j<10; $j++)
		{
		 	echo "<option value=\"$aoi[$j]\"";
			if($row[$tmp]==$aoi[$j]||$j=="0"){echo " selected";}
			echo ">$aoi[$j]</option>\n";
		}
		echo "</select><br>";
	}
	?>
       Special interests:  <input name="saoi" type="text" id="saoi" size="30" maxlength="80" value="<?php print($row['saoi']);?>">
  </td>
 </tr>
 <tr> 
   <td width="100">Have you attended an EYH conference in the past?*</td> 
   <td> <table><tr><td>
	<input type="radio" name="peyh" value="Yes"<?php if($row['peyh']=="Yes"){echo " checked=\"yes\"";}?>>Yes<br>
	<input type="radio" name="peyh" value="No"<?php if($row['peyh']=="No"){echo " checked=\"yes\"";}?>>No<br></td><td>
	&nbsp;If yes, please tell us which workshops you've been to:<br>
	<textarea name="wpeyh" cols="40" rows="3" id="wpeyh"><?php print($row['wpeyh']);?></textarea>
        </td></tr></table>
   </td>
  </tr>
  <tr>
   <td width="100">Other information you'd like us to consider</td> <td> 
    <textarea name="sotinfo" cols="80" rows="5" id="sotinfo"><?php print($row['sotinfo']);?></textarea><br>e.g., Special needs or accommodations, Dietary Preferences, etc.</td>
 </tr>
  <tr> 
   <td width="100">&nbsp;</td>
   <td> 
    <input name="btnSign" type="button" id="btnSign" value="Submit Registration" onClick="if(checkForm()) top.document.regform.submit();"></td>
 </tr>
</table>
</form>
<br>
<br>

<?php
mysql_close($conn);
include("reg-help.php");
include("../Includes/page-bot.php");
?>

