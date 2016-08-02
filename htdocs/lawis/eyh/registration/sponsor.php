<html>
<head>
<title>Registration: Sponsor</title>
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
    var gfname, glname, grelat, gemail, gephone, gdphone, gmessage,gtc,gs0FName,gs1FName,gs2FName,gs3FName,gs4FName,gs5FName,gs6FName,gs7FName,gs8FName,gs9FName,gs0LName,gs1LName,gs2LName,gs3LName,gs4LName,gs5LName,gs6LName,gs7LName,gs8LName,gs9LName;

    with(window.document.regform)
    {
        gfname    = FName;
        glname    = LName;
	grelat	= relat;
        gemail   = Email;
        gephone     = ephone;
	gdphone	  = dphone;
      	gtc = tc;
	gs0FName = s0FName;
	gs1FName = s1FName;
	gs2FName = s2FName;
	gs3FName = s3FName;
	gs4FName = s4FName;
	gs5FName = s5FName;
	gs6FName = s6FName;
	gs7FName = s7FName;
	gs8FName = s8FName;
	gs9FName = s9FName;
	gs0LName = s0LName;
	gs1LName = s1LName;
	gs2LName = s2LName;
	gs3LName = s3LName;
	gs4LName = s4LName;
	gs5LName = s5LName;
	gs6LName = s6LName;
	gs7LName = s7LName;
	gs8LName = s8LName;
	gs9LName = s9LName;
    }
    
    var Fstudents=new Array(gs0FName,gs1FName,gs2FName,gs3FName,gs4FName,gs5FName,gs6FName,gs7FName,gs8FName,gs9FName);
    var Lstudents=new Array(gs0LName,gs1LName,gs2LName,gs3LName,gs4LName,gs5LName,gs6LName,gs7LName,gs8LName,gs9LName);

    realphone = new RegExp(/^\d{3}\-\d{3}\-\d{4}$/);
    //realphone = new RegExp(/\d{3}\-\d{3}\-\d{4}/);

    // if name is empty alert the visitor
    if(trim(gfname.value) == '')
    {
        alert('Please enter your first name');
        if (window.focus) {gfname.focus();}
        return false;
    }
    else if(trim(glname.value) == '')
    {
        alert('Please enter your last name');
        if (window.focus) {glname.focus();}
        return false;
    }
    // alert the visitor if email is empty or the format is not correct 
    else if(trim(gemail.value) != '' && !isEmail(trim(gemail.value)))
    {
        alert('Please enter a valid email address or leave it blank');
        if (window.focus) {gemail.focus();}
        return false;
    }
    else if(grelat.value == 'default')
    {
        alert('Please select your relationship to the student/s');
        if (window.focus) {grelat.focus();}
	return false;
    } 
    // Check for valid phone number
    else if(!realphone.test(trim(gephone.value)) ||!realphone.test(trim(gdphone.value)))
    {
        alert('Bad phone number - please use format 505-xxx-xxxx, you put in evening phone:'+gephone.value+':day phone:'+gdphone.value+':');
        if(!realphone.test(trim(gephone.value)))
		{if (window.focus) {gephone.focus();}}
	else
		{if (window.focus) {gdphone.focus();}}
        return false;
    } 
/*    else if(trim(gdphone.value) == ''){
	alert('Please enter a daytime phone number')
	if (window.focus) {gdphone.focus();}
    }
    else if(trim(gephone.value) == ''){
	alert('Please enter an evening phone number')
	if (window.focus) {gephone.focus();}
    } */
    else
    {
        // Check to make sure if student names are entered in
        // that there is a first and last name	
        var i;
        for (i in Fstudents)
        {
	  if(Fstudents[i].value != '' && Lstudents[i].value == '' )
          {
		alert('Student must have first and last name');
          	if (window.focus) {Lstudents[i].focus();}
          	return false;
	  }
	  if(Fstudents[i].value == '' && Lstudents[i].value != '' )
          {  
		alert('Student must have first and last name');
          	if (window.focus) {Fstudents[i].focus();}
          	return false;
	  }
       }
       
       // check that one of the radio buttons has been checked
	// Loop from zero to the one minus the number of radio button selections
	var radio_choice = false;
	for (counter = 0; counter < gtc.length; counter++)
	{
	// If a radio button has been selected it will return true
	// (by default it was set to false)
		if(gtc[counter].checked)
		{radio_choice = true;}
	}
      	if (!radio_choice)
	{
		// If there were no selections made display an alert box 
		alert("You must select either Yes or No in response to registering for the teacher conference");
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
$query="SELECT * FROM teacher WHERE FName='$FName' and LName='$LName'";
$result=mysql_query($query);
$num=mysql_numrows($result);
if($num==1){
	$row = mysql_fetch_assoc($result);
	echo "Great!  You have already registered.  You may use this form to update your information.<br>";
}
elseif($num==0){
	echo "This is your first registration. Please fill out this form with your information.  You may come back to this form and update your information at any time.<br> ";
}
else {die('Error: duplicate entries in database.  Please make sure and start at the beginning of the registration process by starting at <a href=http://nmnwse.org/lawis/eyh/registration>http://nmnwse.org/lawis/eyh/registration<a/>.');}
?>

<form method="post" name="regform" action="sponsor-reg.php?printable=1">
 <table width="1000" border="0" cellpadding="7" cellspacing="1">
 <tr><td colspan="2">Required fields are marked with *<br><br></td></tr>
 <tr> 
   <td width="100">First Name*</td> 
   <td> 
    <?php print( "$FName" ); ?> <input type="hidden" name="FName" value= <?php print( "$FName" ); ?>>
 </td>
 </tr>
 <tr> 
   <td width="100">Last Name*</td> 
   <td> 
    <?php print( "$LName" ); ?> <input type="hidden" name="LName" value= <?php print( "$LName" ); ?>>
 </td>
 </tr>
 <tr> 
   <td width="100">Your relationship to the student/s: *</td> 
   <td> 
   	<?php $r=array("","Teacher","Parent/Guardian","Counselor","Other");
	$rvalue=array("default","Teacher","Parent","Counselor","Other");
	echo "<select name=relat>";
	for($i=0; $i<5; $i++)
	{
		echo "<option value=\"$rvalue[$i]\"";
		if($row['relat']==$rvalue[$i]||$i=="0"){echo " selected";}
		echo ">$r[$i]</option>\n";
	}
	echo "</select>";
	?>
    If other, please specify
    <input name="otspec" type="text" id="otspec" size="30" maxlength="50" value="<?php print($row['otspec']);?>">
   </td>
 </tr>
  <tr> 
   <td width="100">Email</td>
   <td> 
    <input name="Email" type="text" id="Email" size="30" maxlength="50"  value="<?php print($row['Email']);?>"></td>
 </tr>
  <tr> 
   <td width="100">Evening Phone*</td>
   <td> 
    <input name="ephone" type="text" id="ephone" size="12" maxlength="16"  value="<?php print($row['ephone']);?>">  Please use format 505-xxx-xxx</td>
 </tr>
  <tr> 
   <td width="100">Daytime or School Phone*</td>
   <td> 
    <input name="dphone" type="text" id="dphone" size="12" maxlength="16"  value="<?php print($row['dphone']);?>">  Please use format 505-xxx-xxx</td>
 </tr>
 <tr> 
   <td width="100">Mailing Address (school or EYH sponsor/TC registrant)</td> <td> 
    <textarea name="mailadd" cols="40" rows="5" id="mailadd"><?php print($row['mailadd']);?></textarea><br>
   </td>
 </tr>
  <tr> 
   <td width="100">School Name (if applicable)</td>
   <td> 
    <input name="school" type="text" id="school" size="30" maxlength="50"  value="<?php print($row['school']);?>"></td>
 </tr>
  <tr> 
   <td width="100">Principle's Name (if applicable)</td>
   <td> 
    <input name="pname" type="text" id="pname" size="30" maxlength="50"  value="<?php print($row['pname']);?>"></td>
 </tr>
 <tr> 
   <td width="100">Are you registering for the teacher conference?*</td> 
   <td> 
	<input type="radio" name="tc" value="Yes" <?php if($row['tc']=="Yes"){echo " checked=\"yes\"";}?>>Yes<br>
	<input type="radio" name="tc" value="No"<?php if($row['tc']=="No"){echo " checked=\"yes\"";}?> >No<br>
   </td>
  </tr>


 <tr><td colspan="2">Name(s) of the student(s) you are sponsoring (if any)</td></tr>
 <tr>
    <td></td><td>
<?php 
if($row['Bringing']!="")
	{
	echo "<b>You are currently listed as Bringing the following students";
	print($row['Bringing']);
	echo "</b><br>If you need to remove a student from this list, please <a href=\"http://nmnwse.org/lawis/eyh/contact/\">contact</a> the registrar.";
	}
?>

</td></tr>
    <td></td><td>
    First Name<input name="s0FName" type="text" id="s0FName" size="30" maxlength="30">
    Last Name<input name="s0LName" type="text" id="s0LName" size="30" maxlength="30"></td>
 </tr>
 <tr>
    <td></td><td>
    First Name<input name="s1FName" type="text" id="s1FName" size="30" maxlength="30">
    Last Name<input name="s1LName" type="text" id="s1LName" size="30" maxlength="30"></td>
 </tr>
 <tr>
    <td></td><td>
    First Name<input name="s2FName" type="text" id="s2FName" size="30" maxlength="30">
    Last Name<input name="s2LName" type="text" id="s2LName" size="30" maxlength="30"></td>
 </tr>
 <tr>
    <td></td><td>
    First Name<input name="s3FName" type="text" id="s3FName" size="30" maxlength="30">
    Last Name<input name="s3LName" type="text" id="s3LName" size="30" maxlength="30"></td>
 </tr>
 <tr>
    <td></td><td>
    First Name<input name="s4FName" type="text" id="s4FName" size="30" maxlength="30">
    Last Name<input name="s4LName" type="text" id="s4LName" size="30" maxlength="30"></td>
 </tr>
 <tr>
    <td></td><td>
    First Name<input name="s5FName" type="text" id="s5FName" size="30" maxlength="30">
    Last Name<input name="s5LName" type="text" id="s5LName" size="30" maxlength="30"></td>
 </tr>
 <tr>
    <td></td><td>
    First Name<input name="s6FName" type="text" id="s6FName" size="30" maxlength="30">
    Last Name<input name="s6LName" type="text" id="s6LName" size="30" maxlength="30"></td>
 </tr>
 <tr>
    <td></td><td>
    First Name<input name="s7FName" type="text" id="s7FName" size="30" maxlength="30">
    Last Name<input name="s7LName" type="text" id="s7LName" size="30" maxlength="30"></td>
 </tr>
 <tr>
    <td></td><td>
    First Name<input name="s8FName" type="text" id="s8FName" size="30" maxlength="30">
    Last Name<input name="s8LName" type="text" id="s8LName" size="30" maxlength="30"></td>
 </tr>
 <tr>
    <td></td><td>
    First Name<input name="s9FName" type="text" id="s9FName" size="30" maxlength="30">
    Last Name<input name="s9LName" type="text" id="s9LName" size="30" maxlength="30"></td>
 </tr>
 <tr><td></td><td>if you wish to bring more than 10 students, please <a href=http://nmnwse.org/lawis/eyh/contact/>contact</a> the registrar to check for availability</td>
 </tr>
   <td width="100">Other information you'd like us to consider</td> <td> 
    <textarea name="otinfo" cols="80" rows="5" id="otinfo"><?php print($row['otinfo']);?></textarea><br>e.g., Special needs for self or student, Justification for more than 10 students, etc.</td>
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

