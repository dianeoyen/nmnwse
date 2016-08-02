<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  session_start();
  import_request_variables('P');
//  include("../Includes/page-top.php");
  include("../../../conf/config.php");
  
  //get time
  $d_date = date("Y-m-d H:m:s");
  
  if($allergies == ''){$allergies = "Null";}
  if($others == ''){$others = "Null";}
  if($needs == ''){$others = "Null";}
  
   if ($fname !=''){
   $insert_student = "INSERT INTO students(first_name, last_name, attend_before, grade, city, school, sponsor_name, stem1_id, stem2_id, special_need, interest_id, 
                     allergy_list, parent_name, agree_permission, registration_fee, other_interest, submit_date ) VALUES ( '";
   $insert_student .= $fname."','".$lname."','".$attend."', '".$grade."','".$city."','".$school."','".$teacher_sponsor."','".$stem."','".$stem2."','".$needs."','". $interest."','".
                     $allergies."','".$parent."','".$accept."','".$fee."','".$others."','".$d_date."')";
	
   $insert_parent = "INSERT INTO parents (name, phone, emergency_contact, relationship, emergency_phone) VALUES ( '";
   $insert_parent .= $parent."', '".$parent_phone."', '".$emergency."', '".$relationship."', '".$emergency_phone."' )";
  
 
   $student = mysql_query($insert_student) or die('Error: ' . mysql_error()); 
   $parent_sql = mysql_query($insert_parent) or die("Error: ". mysql_error());
  
   if (!$student) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
   }
  
   if (!$parent) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
   }
  
  }
  
  mysql_free_result($student);
  mysql_free_result($parent_sql);
 
  $admin1 = "eyh-registrar@lanl.gov";


$to = $admin1;
$from = "EYH Registrar\n\n\n";
$subject = "*** Expanding Your Horizons Workshop Registration ***\n\n\n";
$title = "*** Expanding Your Horizons Workshop Registration ***\n\n\n";
$fsname = "First Name: " . $fname . "\n\n";
$lname = "Last Name: " . $lname. "\n\n";
$city = "City: " . $city . "\n\n";
$school = "School: " . $school . "\n\n";
$grade = "Grade: " . $grade . "\n\n";
$teacher = "Teacher/Sponsor: " . $teacher_sponsor . "\n\n";
$stem = "Interest(s) in STEM and related fields: " . $stem .", ".$stem2.", ".$others. "\n\n";
$interest = "Topic(s) of interest during the EYH Conference: " . $interest . "\n\n";
$attend = "Participant has attended an EYH Conference in the past: " . $attend . "\n\n";
$needs = "Special needs or accomodations: " . $needs . "\n\n";
$allergies = "Allergies: " . $allergies . "\n\n";
$accept = "Read and accepted the Permission Statement: " . $accept . "\n\n";
$parent = "Parent or Guardian name: " . $parent . "\n\n";
$parent_phone = "Daytime or cell phone number: " . $parent_phone . "\n\n";
$emergency = "Emergency contact name: " . $emergency. "\n\n";
$relationship = "Relationship to EYH participant: " . $relationship. "\n\n";
$emergency_phone = "Daytime or cell phone number: " . $emergency_phone . "\n\n";
$submitdate = "Date submitted: " . date("m/d/Y");
$body = $title.$fsname.$lname.$city.$school.$grade.$teacher.$stem.$interest.$attend.$needs.$allergies.$accept.$parent.$parent_phone.$emergency.$relationship.$emergency_phone.$submitdate; 
mail($to,$subject,$body);



?>



<head>

<title></title>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

<meta name="Description" content="" />
<meta name="keywords" content="" />

<link href="style2.css" rel="stylesheet" type="text/css" media="all" />
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
      <td class="KT_th"><p>Thank you. Please get the consent form below</p>
        <p></p>      </td>
    </tr>
    <tr><td class="KT_th"><a href="http://nmnwse.org/lawis/eyh/docs/NNMEYH2013LiabilityRelease.pdf">Please click here to get the consent form. </a> <br />Parents must sign this liability form and send it to the registrar (eyh-registrar@lanl.gov, fax:  505-665-6333) <br />or send it with your child to the workshop<br /></td>
    </tr>
  </table>
<!-- OPEN include for footer area -->
<!-- CLOSE include for footer area -->
</p>
<p class="style7">&nbsp;</p>
<map name="Map" id="Map"><area shape="rect" coords="102,141,139,158" href="index.shtml" alt="Homw" />
<area shape="rect" coords="178,142,246,158" href="attendees.shtml" alt="Attendees" />
<area shape="rect" coords="283,141,357,158" href="volunteers.shtml" alt="Volunteers" />
<area shape="rect" coords="396,141,476,159" href="registration.shtml" alt="Workshop Registration Form" />
<area shape="rect" coords="515,141,576,156" href="contacts.shtml" alt="Contacts" />
<area shape="rect" coords="613,141,652,158" href="links.shtml" alt="Links" /><area shape="rect" coords="690,142,746,155" href="archives.shtml" alt="Archives" />
</map>
</body>
</html>