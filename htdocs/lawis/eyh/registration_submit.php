<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  session_start();
  import_request_variables('P');
//  include("../Includes/page-top.php");
  include("../../../conf/config.php");
  
  //get time
  $d_date = date("Y-m-d H:m:s");
  
  if($allerg_f == ''){$allerg_f = "Null";}
  if($allerg_m == ''){$allerg_m = "Null";}
  if($others == ''){$others = "Null";}
  if($needs == ''){$others = "Null";}
  
   if ($fname !=''){
   $insert_student = "INSERT INTO students(first_name, last_name, grade, 
    school, city, teacher_name,  sponser, email, attend_before, year_attended, special_need,  
   allergy_food, allergy_medicine, parent_name, parent_phone, parent_cphone, emergency, relationship, 
   emergency_phone, emergency_cphone, registration_fee, agree_permission, submit_date )
   VALUES ( '";
   
   $insert_student .= $fname."','".$lname."','".$grade."','".$school."','".$city."','".$t_name."','".$sponsor."', '".$email."','".$attend."', '".$year_attended."','".
   $needs."','".$allergy_f."','".$allergy_m."','".$parent."','".$parent_phone."','".$parent_cphone."','".$emergency."','".$relationship."','".$emergency_phone."','".
   $emergency_cphone."','".$fee."','".$accept."','".$d_date."')";
	
  // $insert_parent = "INSERT INTO parents (name, phone, emergency_contact, relationship, 
  //                   emergency_phone) VALUES ( '";
  // $insert_parent .= $parent."', '".$parent_phone."', '".$emergency."', '".$relationship."', '".$emergency_phone."' )";
  
 
   $student = mysql_query($insert_student) or die('Error: ' . mysql_error()); 
  // $parent_sql = mysql_query($insert_parent) or die("Error: ". mysql_error());
  
   if (!$student) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
   }
  
   //if (!$parent) {
   // echo "DB Error, could not query the database\n";
   // echo 'MySQL Error: ' . mysql_error();
   // exit;
   //}
  
  }
  
  mysql_free_result($student);
  //mysql_free_result($parent_sql);
 
  $admin1 = "eyh-registrar@lanl.gov";
  $admin2 = "corzine@lanl.gov, josefina@lanl.gov, jfrigo@lanl.gov";
  $admin3 = "yang@lanl.gov";


$to = $admin1;
$from = "EYH Registrar\n\n\n";
$subject = "*** Expanding Your Horizons Workshop Student Registration ***\n\n\n";
$title = "*** Expanding Your Horizons Workshop Student Registration ***\n\n\n";
$fsname = "First Name: " . $fname . "\n\n";
$lname = "Last Name: " . $lname. "\n\n";
$city = "City: " . $city . "\n\n";
$school = "School: " . $school . "\n\n";
$grade = "Grade: " . $grade . "\n\n";
$teacher = "Registered By:  " .$sponsor. "\n\n";
$teacher_name = "Teacher Name: ". $t_name .  "\n\n";
$email_a = "Teacher or Sponsor Email Address: " . $email. "\n\n";
$sponsor = "Registered by: ". $sponsor. "\n\n";
$attend = "Has the participant attended an EYH Conference in the past?: " . $attend . "\n\n";
$year_attended = "Years attended: ".$year_attended. "\n\n";
$needs = "Special needs or accommodations: " . $needs . "\n\n";
$allergy_food = "Food Allergies: " . $allergy_f . "\n\n";
$allergy_medicine ="Medicine Allergies: " . $allergy_m . "\n\n";
$accept = "Read and accepted the Permission Statement: " . $accept . "\n\n";
$parent = "Parent or Guardian name: " . $parent . "\n\n";
$parent_phone = "Daytime phone number: " . $parent_phone . "   Cell phone number:  ". $parent_cphone. "\n\n";
$emergency = "Emergency contact name: " . $emergency. "\n\n";
$relationship = "Relationship to EYH participant: " . $relationship. "\n\n";
$emergency_phone = "Daytime phone number: " . $emergency_phone . "     Cell phone number:  ". $emergency_cphone. "\n\n";
//$tshirt_size = "T-Shirt Size: " . $tshirt . "\n\n";
$submitdate = "Date submitted: " . date("m/d/Y");
$body = $title.$fsname.$lname.$email_a.$city.$school.$grade.$teacher.$teacher_name.$email_a.$sponsor.$attend.$year_attended.$needs.$allergy_food.$allergy_medicine.$accept.$parent.$parent_phone.$emergency.$relationship.$emergency_phone.$submitdate; 
$regist_subject = "Expanding Your Horizons Workshop Registration Received!";
$body2 = "Hi ".$fname. ",\n\n";
$body2 .= "Thank you for registering for EYH 16 on March 4, 2016.  \n\n";
$body2 .= "Please download the concent form if you haven't done so. \n";
$body2 .= "http://nmnwse.org/lawis/eyh/docs/EYH Liability Form 2016.pdf.  \n\n";
$body2 .= "The schedule of events and directions to the Santa Fe Convention Center can be found on our website: \n";
$body2 .= "http://nmnwse.org/lawis/eyh/index.shtml \n\n";
$body2 .= "Thank you. \n\n";
$body2 .= "Josefina Salazar \nEYH Registrar \n\neyh-registrar@lanl.gov\nPhone: 505-667-2701\nFax: 505-665-7395\n\n ";
$body2 .= "\n";
$header = 'From:  '.$admin1;
mail($email, $regist_subject, $body2, $header);
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
<style>
.style2 {
        color: #FF0000;
        font-weight: bold;
        font-size: 14px;
}
.style3 {
        font-family: Arial, Verdana, Geneva, Arial, Helvetica, sans-serif;
        font-size: 16px;
}
.style4 {
        font-size: 24px
}
.style5 {
        font-size: 10px;
        font-family: Arial, Helvetica, sans-serif;
}
.style6 {font-size: 11px}
.style7 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
}
.style8 {font-size: 12px}
</style>


</head>
<body>
<!-- OPEN include for banner area -->
  <table width="700" align="left" cellpadding="2" cellspacing="0" class="KT_tngtable">
    <tr>
      <td class="KT_th"><img src="images/banner.jpg" alt="banner" width="850" height="169" border="0" usemap="#Map" /></td>
    </tr>
    <tr>
      <td  class="KT_th"><h1 align="center"><strong>Your Registration Has been Accepted !</strong></h1></td>
    </tr>
    <tr>
      <td class="KT_th"><h2>Thank you, <?php echo $fname; ?> . Please get the consent form below</h2>
            </td>
    </tr>
    <tr><td class="KT_th"><a href="http://nmnwse.org/lawis/eyh/docs/EYHLiabilityForm2016.pdf">Please click here to get the consent form. </a> <br />
    Parents must sign this liability form and send it to the registrar (Email: eyh-registrar@lanl.gov; Or Fax:  505-665-7395) <br />or send it with your child to the workshop<br /></td>
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