<?php

session_start();

$link = mysql_connect('mysql.nmnwse.org','nmnwse_org','3TmTzJr8lFsHI18v');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('nmnwse_org');


$sqlinsert = "INSERT INTO nmnwse_org.registration (fname,lname,address1,address2,city,state,zip,phone,email,school,grade,teacher_sponsor,stem, interest,attend,needs,allergies,accept,parent,parent_phone,emergency,relationship, emergency_phone) VALUES ('".$_SESSION['fname']."', '".$_SESSION['lname']."', '".$_SESSION['address1']."', '".$_SESSION['address2']."', '".$_SESSION['city']."', '".$_SESSION['state']."', '".$_SESSION['zip']."', '".$_SESSION['phone']."', '".$_SESSION['email']."', '".$_SESSION['school']."', '".$_SESSION['grade']."', '".$_SESSION['teacher_sponsor']."', '".$_SESSION['stem']."', '".$_SESSION['interest']."', '".$_SESSION['attend']."', '".$_SESSION['needs']."', '".$_SESSION['allergies']."', '".$_SESSION['accept']."', '".$_SESSION['parent']."', '".$_SESSION['parent_phone']."', '".$_SESSION['emergency']."', '".$_SESSION['relationship']."', '".$_SESSION['emergency_phone']."')"; mysql_query($sqlinsert) or die('Error: ' . mysql_error()); 

$admin1 = "meghan@lanl.gov,gap@lanl.gov";//.","."gap@lanl.gov";
$admin2 = $_SESSION['email'];
/*$admin3 = "";
$admin4 = "";
$admin5 = "";*/

$to = $admin1. ',' .$admin2;//. ',' .$admin3. ',' .$admin4. ',' .$admin5;
//$from = "EYH Registrar\n\n\n";
$subject = "*** Expanding Your Horizons Workshop Registration ***\n\n\n";
$title = "*** Expanding Your Horizons Workshop Registration ***\n\n\n";
$msg = "*** Expanding Your Horizons Workshop Registration ***\n\n\n";
$headers = "From: LAWIS-EYH12-Registrar@lanl.gov\n\n";
$fname = "First Name: " . $_SESSION['fname'] . "\n\n";
$lname = "Last Name: " . $_SESSION['lname'] . "\n\n";
$address1 = "Address1: " . $_SESSION['address1'] . "\n\n";
$address2 = "Address2: " . $_SESSION['address2'] . "\n\n";
$city = "City: " . $_SESSION['city'] . "\n\n";
$state = "State: " . $_SESSION['state'] . "\n\n";
$zip = "Zipcode: " . $_SESSION['zip'] . "\n\n";
$phone = "Phone: " . $_SESSION['phone'] . "\n\n";
$email = "Email: " . $_SESSION['email'] . "\n\n";
$school = "School: " . $_SESSION['school'] . "\n\n";
$grade = "Grade: " . $_SESSION['grade'] . "\n\n";
$teacher = "Teacher/Sponsor: " . $_SESSION['teacher_sponsor'] . "\n\n";
$stem = "Interest(s) in STEM and related fields: " . $_SESSION['stem'] . "\n\n";
$interest = "Topic(s) of interest during the EYH Conference: " . $_SESSION['interest'] . "\n\n";
$attend = "Participant has attended an EYH Conference in the past: " . $_SESSION['attend'] . "\n\n";
$needs = "Special needs or accomodations: " . $_SESSION['needs'] . "\n\n";
$allergies = "Allergies: " . $_SESSION['allergies'] . "\n\n";
$accept = "Read and accepted the Permission Statement: " . $_SESSION['accept'] . "\n\n";
$parent = "Parent or Guardian name: " . $_SESSION['parent'] . "\n\n";
$parent_phone = "Daytime or cell phone number: " . $_SESSION['parent_phone'] . "\n\n";
$emergency = "Emergency contact name: " . $_SESSION['emergency'] . "\n\n";
$relationship = "Relationship to EYH participant: " . $_SESSION['relationship'] . "\n\n";
$emergency_phone = "Daytime or cell phone number: " . $_SESSION['emergency_phone'] . "\n\n";
$submitdate = "Date submitted: " . date("m/d/Y");
$body = $title.$fname.$lname.$address1.$address2.$city.$state.$zip.$phone.$email.$school.$grade.$teacher.$stem.$interest.$attend.$needs.$allergies.$accept.$parent.$parent_phone.$emergency.$relationship.$emergency_phone.$submitdate; 
mail($to,$subject,$body,$headers);

/*$sql = "INSERT INTO nmnwse_org.registration (fname, 
lname) VALUES ('" .
$_SESSION['fname'] . "','"
$_SESSION['lname']. "')"; 
mysql_query($sql) or die('Error: ' . mysql_error());


	
$sql = "INSERT INTO nmnwse_org.registration (fname, 
lname,
address1,
address2,
city,
state,
zip,
phone,
email,
school,
grade,
teacher_sponsor,
stem,
interest,
attend,
needs,
allergies,
accept,
parent,
parent_phone,
emergency,
relationship, 
emergency_phone) VALUES ('" .
$_SESSION['fname'] . "','"
$_SESSION['lname'] . "','"
$_SESSION['address1'] . "','"
$_SESSION['address2'] . "','"
$_SESSION['city'] . "','"
$_SESSION['state'] . "','"
$_SESSION['zip'] . "','"
$_SESSION['phone'] . "','"
$_SESSION['email'] . "','"
$_SESSION['school'] . "','"
$_SESSION['grade'] . "','"
$_SESSION['teacher_sponsor'] . "','"
$_SESSION['stem'] . "','"
$_SESSION['interest'] . "','"
$_SESSION['attend'] . "','"
$_SESSION['needs'] . "','"
$_SESSION['allergies'] . "','"
$_SESSION['accept'] . "','"
$_SESSION['parent'] . "','"
$_SESSION['parent_phone'] . "','"
$_SESSION['emergency'] . "','"
$_SESSION['relationship'] . "','"
$_SESSION['emergency_phone'] . "')"; 
mysql_query($sql) or die('Error: ' . mysql_error());*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title></title>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

<meta name="Description" content="" />
<meta name="keywords" content="" />

<link href="includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
<script src="includes/common/js/base.js" type="text/javascript"></script>
<script src="includes/common/js/utility.js" type="text/javascript"></script>
<script src="includes/skins/style.js" type="text/javascript"></script>
<script type="text/javascript" src="includes/common/js/sigslot_core.js"></script>
<script type="text/javascript" src="includes/wdg/classes/MXWidgets.js"></script>
<script type="text/javascript" src="includes/wdg/classes/MXWidgets.js.php"></script>
<script type="text/javascript" src="includes/wdg/classes/Calendar.js"></script>
<script type="text/javascript" src="includes/wdg/classes/SmartDate.js"></script>
<script type="text/javascript" src="includes/wdg/calendar/calendar_stripped.js"></script>
<script type="text/javascript" src="includes/wdg/calendar/calendar-setup_stripped.js"></script>
<script src="includes/resources/calendar.js"></script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>

</head>
<body>
<!-- OPEN include for banner area -->
  <table width="700" align="left" cellpadding="2" cellspacing="0" class="KT_tngtable">
    <tr>
      <td class="KT_th"><img src="images/banner.jpg" alt="banner" width="850" height="169" border="0" usemap="#Map" /></td>
    </tr>
    <tr>
      <td  class="KT_th">Workshop Registration</td>
    </tr>
    <tr>
      <td class="KT_th"><p>Thank you, <?php echo $_SESSION['fname']; ?>.</p>
  <p>Your form has been submitted.</p>      </td>
      
    </tr>
  </table>
<!-- OPEN include for footer area -->
<!-- CLOSE include for footer area -->
</p>
<map name="Map" id="Map"><area shape="rect" coords="102,141,139,158" href="index.shtml" alt="Homw" />
<area shape="rect" coords="178,142,246,158" href="attendees.shtml" alt="Attendees" />
<area shape="rect" coords="283,141,357,158" href="volunteers.shtml" alt="Volunteers" />
<area shape="rect" coords="396,141,476,159" href="registration_form.php" alt="Workshop Registration Form" />
<area shape="rect" coords="515,141,576,156" href="contacts.shtml" alt="Contacts" />
<area shape="rect" coords="613,141,652,158" href="links.shtml" alt="Links" /><area shape="rect" coords="690,142,746,155" href="archives.shtml" alt="Archives" />
</map>
</body>
</html>