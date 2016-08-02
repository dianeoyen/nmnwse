<?php
  session_start();
  import_request_variables('P');
  include("../../../conf/config.php");
  
  //get time
  $d_date = date("Y-m-d H:m:s");
  
  if($allergies == ''){$allergies = "Null";}
  if($needs == ''){$needs = "Null";}
  
  if ($fname !='' && $lname !=''){
   $insert_teacher = "INSERT INTO teachers(sponsor, first_name, last_name, email,  mail_address, school, principal, school_phone, other_info, teacher_workshop,    
                      number_student, transport, registration_date) VALUES ( '";
   $insert_teacher .= $sponsor."','".$fname."','".$lname."','".$email."','".$smail."', '".$school."','".$principal."','".$sphone."','".$needs."','".$attend."','".
                      $n_students."','".$transport."','".$d_date."')";
   $teacher = mysql_query($insert_teacher);
   if (!$teacher) {
    echo "DB Error, could not insert into the database\n";
    echo 'MySQL Error: ' . mysql_error();
	exit;
   }
  //Need to commit before adding students
   mysql_query('COMMIT');
  } else {
	  exit;
  }
  
 /* if ($first0 != ''){
   $student_list = '';
   for ($x=0; $x < 10; $x++){
   //variable variables
    $f = "first".$x;
    $l = "last".$x;
	if ($$f != ''){
     $student_name = $$f." ".$$l;
	 $student_list .= $student_name.", "; 
     $insert_students = "INSERT INTO tmp_students(teacher_name, student_name) VALUES ( '".$fname." ".$lname."','".$student_name."')";
	 $student=mysql_query($insert_students);
	   if (!$student) {
    	echo "DB Error, could not query the database\n";
    	echo 'MySQL Error: ' . mysql_error();
    	exit;
  	  }
    }
  }
 }
  */
  
  mysql_query('COMMIT');
  mysql_free_result($student);
  mysql_free_result($teacher);
 
  $admin1 = "eyh-registrar@lanl.gov";
  $admin2 = "corzine@lanl.gov, josefina@lanl.gov, jfrigo@lanl.gov";
  $admin3 = "yang@lanl.gov";
 
 

$to =$admin1;
$from = "EYH Registrar\n\n\n";
$subject = "*** Expanding Your Horizons Workshop Sponsor Registration ***\n\n\n";
$title = "*** Expanding Your Horizons Workshop Sponsor Registration ***\n\n\n";
$header = "";
$sponsor = " Sponsor:   ". $sponsor. "\n\n";
$first_name = "First Name:   " . $fname . "\n\n";
$lname = "Last Name:   " . $lname. "\n\n";
$semail="Email:   ".$email."\n\n";
$school_name = "School: " . $school . "\n\n";
$school_principal = "School Principal:  ". $principal. "\n\n";
$school_phone = "School Phone:   " . $sphone . "\n\n";
$school_address = "School Mailing Address: \n ".$smail. "\n\n";
$yes = "Register for the Teacher Workshop:   ".$attend. "\n\n";
$students ="Number of Students Sponsored:   ".$n_students."\n\n";
$transport = "Transport:   ".$transport."\n\n";
$submitdate = "Date submitted:   " . date("m/d/Y");
$body = $title.$sponsor.$first_name.$lname.$semail.$school_name.$school_phone.$school_address.$yes.$students.$transport.$submitdate; 
mail($to,$subject,$body);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
      <td  class="KT_th"><h1 align="center"><strong>Your Registration Has been Accepted !</strong></h1></td>
    </tr>
    <tr>
      <td class="KT_th"><p>Thank you, <?php echo $fname; ?> .</p>
       </td>
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