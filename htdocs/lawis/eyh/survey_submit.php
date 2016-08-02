<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wdg="http://ns.adobe.com/addt">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Workshop Registration Form | Expanding Your Horizons Workshop | New Mexico Network for Women in Science and Engineering</title>
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
//-->
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
<script src="includes/tng/scripts/FormValidation.js" type="text/javascript"></script>

<script src="includes/tng/scripts/FormValidation.js.php" type="text/javascript"></script>

<script type="text/javascript" src="includes/wdg/classes/JSRecordset.js"></script>
<script type="text/javascript" src="includes/wdg/classes/CommaCheckboxes.js"></script>

</head>
<?php
  session_start();
  import_request_variables('P');
  include("../../../conf/config.php");

  //get time
  // $d_date = date("Y-m-d H:m:s");
    $race = '';
   for ($x=1; $x < 6; $x++){
   //variable variables
    $r = "race".$x;
	if ($$r != ''){
     $race .= $$r.", "; 
  	}
  }
 
  
  
    $insert_survey = "INSERT INTO surveys(name, school, grade, ethnic, keynote, workshop, rating, difficulty, influence, attitude, view, expected, got, next_i_will, wish_more, best_part) 
                     VALUES ( '";
  if($school != '' && $grade != ''){
    $insert_survey .= $name."','".$school."','".$grade."','".$race."', '".$keynote."', '".$workshop."','".$rating."','".$diff."','". $influence."','".$attitude."','".$view."','".$expected."','".$got."','".$next_i_will."','".$wish_more."','".$best_part. "')";
  }else if ($school != ''){
     $insert_survey .= $name."','".$school."','".$grade."','".$race."', '".$keynote."', '".$workshop."','".$rating."','".$diff."','". $influence."','".$attitude."','".$view."','".$expected."','".$got."','".$next_i_will."','".$wish_more."','".$best_part. "')";
  }else if ($grade != ''){
        $insert_survey .= $name."','".$school."','".$grade."','".$race."', '".$keynote."', '".$workshop."','".$rating."','".$diff."','". $influence."','".$attitude."','".$view."','".$expected."','".$got."','".$next_i_will."','".$wish_more."','".$best_part. "')";
  }else{
	    $insert_survey .= $name."','".$school."','".$grade."','".$race."', '".$keynote."', '".$workshop."','".$rating."','".$diff."','". $influence."','".$attitude."','".$view."','".$expected."','".$got."','".$next_i_will."','".$wish_more."','".$best_part. "')";
  }
  
  
//second one
    $insert_survey2 = "INSERT INTO surveys(name, workshop, rating, difficulty) 
                     VALUES ( '";
 
    $insert_survey2 .= $name."','".$workshop2."','".$rating2."','".$diff2."')";
 
  
  $survey = mysql_query($insert_survey) or die('Error: ' . mysql_error()); 
  

  if (!$survey) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
  }
  
 $survey2 = mysql_query($insert_survey2) or die('Error: ' . mysql_error()); 
   if (!$survey2) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
  }

  mysql_query('COMMIT');
  mysql_free_result($survey);
  mysql_free_result($survey2);
 

?>


<!-- OPEN include for banner area -->
  <table width="700" align="left" cellpadding="2" cellspacing="0" class="KT_tngtable">
    <tr>
      <td class="KT_th"><img src="images/banner.jpg" alt="banner" width="850" height="169" border="0" usemap="#Map" /></td>
    </tr>
    <tr>
      <td  class="KT_th">Survey</td>
    </tr>
    <tr>
      <td class="KT_th"><p>Thank you.</p>
        <p>Your survey has been recorded.</p>      </td>
    </tr>
    <tr>
    <td><a href="http://nmnwse.org/lawis/eyh/survey.php">Get back for entering another survey. </a></td></tr>
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