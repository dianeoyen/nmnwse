<? session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wdg="http://ns.adobe.com/addt">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Workshop Registration - Confirmation | Expanding Your Horizons Workshop | New Mexico Network for Women in Science and Engineering</title>
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
.style4 {
	font-family: Arial, Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
</style>
</head>
<body>
<form method="post" action="registration_processor.php">
  <table width="700" align="left" cellpadding="2" cellspacing="0" class="KT_tngtable">
    <tr>
      <td colspan="2" class="KT_th"><img src="images/banner.jpg" alt="banner" width="850" height="169" border="0" usemap="#Map" /></td>
    </tr>
    <tr>
      <td colspan="2"  class="KT_th">Workshop Registration - Confirmation</td>
    </tr>
    <tr>
      <td class="KT_th"><label for="fname">First Name:</label></td>
      <td align="left" class="stretch">
       <input type="hidden" name="fname" value="<? echo $_SESSION['fname'] ?>" /><?php echo $_SESSION['fname']; ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="lname">Last Name:</label></td>
      <td align="left" class="stretch">
       <input type="hidden" name="lname" value="<? echo $_SESSION['lname'] ?>" /><?php echo $_SESSION['lname']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="address1">Address1:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="address1" value="<? echo $_SESSION['address1'] ?>" /><?php echo $_SESSION['address1']; ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="address2">Address2:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="address2" value="<? echo $_SESSION['address2'] ?>" /><?php echo $_SESSION['address2']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="city">City:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="city" value="<? echo $_SESSION['city'] ?>" /><?php echo $_SESSION['city']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="state">State:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="state" value="<? echo $_SESSION['state'] ?>" /><?php echo $_SESSION['state']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="zip">Zip Code:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="zip" value="<? echo $_SESSION['zip'] ?>" /><?php echo $_SESSION['zip']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="phone">Phone:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="phone" value="<? echo $_SESSION['phone'] ?>" /><?php echo $_SESSION['phone']; ?></td>
    </tr><tr>
      <td class="KT_th"><label for="email">Email:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="email" value="<? echo $_SESSION['email'] ?>" /><?php echo $_SESSION['email']; ?></td>
    </tr><tr>
      <td class="KT_th"><label for="school">School:</label></td>
      <td align="left" class="stretch">
       <input type="hidden" name="school" value="<? echo $_SESSION['school'] ?>" /><?php echo $_SESSION['school']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="grade">Grade:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="grade" value="<? echo $_SESSION['grade'] ?>" /><?php echo $_SESSION['grade']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="teacher_sponsor">Teacher or Adult Sponsor:</label></td>
      <td align="left" class="stretch">
       <input type="hidden" name="teacher_sponsor" value="<? echo $_SESSION['teacher_sponsor'] ?>" /><?php echo $_SESSION['teacher_sponsor']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="stem">Interest(s) in the STEM and related fields
      :</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="stem" value="<? echo $_SESSION['stem'] ?>" /><?php echo $_SESSION['stem']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="interest">Topic(s) of interest during the the EYH Conference:</label></td>
      <td align="left" class="stretch"><input type="hidden" name="interest" value="<? echo $_SESSION['interest'] ?>" /><?php echo $_SESSION['interest']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="attend">Participant has attended an EYH Conference in the past:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="attend" value="<? echo $_SESSION['attend'] ?>" /><?php echo $_SESSION['attend']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="needs">Special needs or accomodations:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="needs" value="<? echo $_SESSION['needs'] ?>" /><?php echo $_SESSION['needs']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="allergies">Allergies:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="allergies" value="<? echo $_SESSION['allergies'] ?>" /><?php echo $_SESSION['allergies']; ?></td>
    </tr>
    <tr>
          <td width="354" class="KT_th"><label for="accept">Read and accepted the Permission Statement:</label></td>
    <td width="763" align="left" class="stretch">
      <input type="hidden" name="accept" value="<? echo $_SESSION['accept'] ?>" /><?php echo $_SESSION['accept']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="parent">Parent or Guardian Name:</label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="parent" value="<? echo $_SESSION['parent'] ?>" /><?php echo $_SESSION['parent']; ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="parent_phone">Daytime or Cell Phone Number:</label></td>
      <td align="left" class="stretch">
       <input type="hidden" name="parent_phone" value="<? echo $_SESSION['parent_phone'] ?>" /><?php echo $_SESSION['parent_phone']; ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="emergency">Emergency Contact Name:</label></td>
      <td align="left" class="stretch">
       <input type="hidden" name="emergency" value="<? echo $_SESSION['emergency'] ?>" /><?php echo $_SESSION['emergency']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="relationship">Relationship to EYH Participant: </label></td>
      <td align="left" class="stretch">
        <input type="hidden" name="relationship" value="<? echo $_SESSION['relationship'] ?>" /><?php echo $_SESSION['relationship']; ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="emergency_phone">Daytime or Cell Phone Number:</label></td>
      <td><input type="hidden" name="emergency_phone" value="<? echo $_SESSION['emergency_phone'] ?>" /><?php echo $_SESSION['emergency_phone']; ?> </td>
    </tr>
    
    <tr class="KT_buttons">
      <td colspan="2">
  <input name="Edit" type="button" id="Edit" onclick="MM_goToURL('parent','registration_form.php');return document.MM_returnValue" value="Edit" /><input type="submit" value="Submit"></td>
    </tr>
  </table>
</form>
<map name="Map" id="Map"><area shape="rect" coords="102,141,139,158" href="index.shtml" alt="Homw" />
<area shape="rect" coords="178,142,246,158" href="attendees.shtml" alt="Attendees" />
<area shape="rect" coords="283,141,357,158" href="volunteers.shtml" alt="Volunteers" />
<area shape="rect" coords="396,141,476,159" href="registration_form.php" alt="Workshop Registration Form" />
<area shape="rect" coords="515,141,576,156" href="contacts.shtml" alt="Contacts" />
<area shape="rect" coords="613,141,652,158" href="links.shtml" alt="Links" /><area shape="rect" coords="690,142,746,155" href="archives.shtml" alt="Archives" />
</map>
</body>
</html>