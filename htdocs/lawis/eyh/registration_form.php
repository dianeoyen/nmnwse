<?php 
session_start();
require_once('Connections/eyh.php'); ?>
<?php
//MX Widgets3 include
require_once('includes/wdg/WDG.php');

// Load the common classes
require_once('includes/common/KT_common.php');

// Load the tNG classes
require_once('includes/tng/tNG.inc.php');

// Make a transaction dispatcher instance
$tNGs = new tNG_dispatcher("");

// Make unified connection variable
$conn_eyh = new KT_connection($eyh, $database_eyh);

// Start trigger
$formValidation = new tNG_FormValidation();
$formValidation->addField("fname", true, "text", "", "", "", "Please enter a first name.");
$formValidation->addField("lname", true, "text", "", "", "", "Please enter a last name.");
$formValidation->addField("address1", true, "text", "", "", "", "Please enter an address.");
$formValidation->addField("address2", false, "text", "", "", "", "");
$formValidation->addField("city", true, "text", "", "", "", "Please enter a city.");
$formValidation->addField("state", true, "text", "", "", "", "Please select a state.");
$formValidation->addField("zip", true, "text", "", "", "", "Please enter a zipcode.");
$formValidation->addField("phone", true, "text", "", "", "", "Please enter a phone number.");
$formValidation->addField("email", true, "text", "", "", "", "Please enter an email address.");
$formValidation->addField("school", true, "text", "", "", "", "Please enter a school.");
$formValidation->addField("grade", true, "text", "", "", "", "Please select a grade.");
$formValidation->addField("teacher_sponsor", true, "text", "", "", "", "Please enter a teacher or sponsor.");
$formValidation->addField("stem", true, "text", "", "", "", "Please make a selection.");
$formValidation->addField("interest", true, "text", "", "", "", "Please make a selection.");
$formValidation->addField("attend", true, "text", "", "", "", "Please make a selection.");
$formValidation->addField("needs", false, "text", "", "", "", "");
$formValidation->addField("allergies", false, "text", "", "", "", "");
$formValidation->addField("accept", true, "text", "", "", "", "Select yes to agree to statement.");
$formValidation->addField("parent", true, "text", "", "", "", "Please enter parent's name.");
$formValidation->addField("parent_phone", true, "text", "", "", "", "Please enter a phone number.");
$formValidation->addField("emergency", true, "text", "", "", "", "Please enter a name.");
$formValidation->addField("relationship", true, "text", "", "", "", "Please enter the relationship.");
$formValidation->addField("emergency_phone", true, "text", "", "", "", "Please enter a phone number.");
$tNGs->prepareValidation($formValidation);
// End trigger

//start Trigger_Custom trigger
function Trigger_Custom(&$tNG) {
$_SESSION['fname'] = $tNG->getColumnValue('fname');	
$_SESSION['lname'] = $tNG->getColumnValue('lname');	
$_SESSION['address1'] = $tNG->getColumnValue('address1');	
$_SESSION['address2'] = $tNG->getColumnValue('address2');	
$_SESSION['city'] = $tNG->getColumnValue('city');	
$_SESSION['state'] = $tNG->getColumnValue('state');
$_SESSION['zip'] = $tNG->getColumnValue('zip');	
$_SESSION['phone'] = $tNG->getColumnValue('phone');	
$_SESSION['email'] = $tNG->getColumnValue('email');
$_SESSION['school'] = $tNG->getColumnValue('school');	
$_SESSION['grade'] = $tNG->getColumnValue('grade');
$_SESSION['teacher_sponsor'] = $tNG->getColumnValue('teacher_sponsor');	
$_SESSION['stem'] = $tNG->getColumnValue('stem');
$_SESSION['interest'] = $tNG->getColumnValue('interest');
$_SESSION['attend'] = $tNG->getColumnValue('attend');
$_SESSION['needs'] = $tNG->getColumnValue('needs');
$_SESSION['allergies'] = $tNG->getColumnValue('allergies');
$_SESSION['accept'] = $tNG->getColumnValue('accept');
$_SESSION['parent'] = $tNG->getColumnValue('parent');
$_SESSION['parent_phone'] = $tNG->getColumnValue('parent_phone');
$_SESSION['emergency'] = $tNG->getColumnValue('emergency');
$_SESSION['relationship'] = $tNG->getColumnValue('relationship');
$_SESSION['emergency_phone'] = $tNG->getColumnValue('emergency_phone');
}
//end Trigger_Custom trigger

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


mysql_select_db($database_eyh, $eyh);
$query_RsChoice = "SELECT type FROM choice ORDER BY ID ASC";
$RsChoice = mysql_query($query_RsChoice, $eyh) or die(mysql_error());
$row_RsChoice = mysql_fetch_assoc($RsChoice);
$totalRows_RsChoice = mysql_num_rows($RsChoice);

mysql_select_db($database_eyh, $eyh);
$query_RsGrade = "SELECT type FROM grade ORDER BY ID ASC";
$RsGrade = mysql_query($query_RsGrade, $eyh) or die(mysql_error());
$row_RsGrade = mysql_fetch_assoc($RsGrade);
$totalRows_RsGrade = mysql_num_rows($RsGrade);

mysql_select_db($database_eyh, $eyh);
$query_RsInterests = "SELECT type FROM interests ORDER BY ID ASC";
$RsInterests = mysql_query($query_RsInterests, $eyh) or die(mysql_error());
$row_RsInterests = mysql_fetch_assoc($RsInterests);
$totalRows_RsInterests = mysql_num_rows($RsInterests);

mysql_select_db($database_eyh, $eyh);
$query_RsStem = "SELECT type FROM stem ORDER BY ID ASC";
$RsStem = mysql_query($query_RsStem, $eyh) or die(mysql_error());
$row_RsStem = mysql_fetch_assoc($RsStem);
$totalRows_RsStem = mysql_num_rows($RsStem);

mysql_select_db($database_eyh, $eyh);
$query_acceptRules = "SELECT type FROM rules ORDER BY ID ASC";
$acceptRules = mysql_query($query_acceptRules, $eyh) or die(mysql_error());
$row_acceptRules = mysql_fetch_assoc($acceptRules);
$totalRows_acceptRules = mysql_num_rows($acceptRules);

mysql_select_db($database_eyh, $eyh);
$query_state = "SELECT `state` FROM `state` ORDER BY `state` ASC";
$state = mysql_query($query_state, $eyh) or die(mysql_error());
$row_state = mysql_fetch_assoc($state);
$totalRows_state = mysql_num_rows($state);

// Start trigger
$formValidation1 = new tNG_FormValidation();
$tNGs->prepareValidation($formValidation1);
// End trigger

// Make a custom transaction instance
$customTransaction = new tNG_custom($conn_eyh);
$tNGs->addTransaction($customTransaction);
// Register triggers
$customTransaction->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "KT_Custom1");
$customTransaction->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$customTransaction->registerTrigger("END", "Trigger_Default_Redirect", 99, "registration_confirm.php");
$customTransaction->registerTrigger("AFTER", "Trigger_Custom", 50);
// Add columns
$customTransaction->addColumn("fname", "STRING_TYPE", "POST", "fname");
$customTransaction->addColumn("lname", "STRING_TYPE", "POST", "lname");
$customTransaction->addColumn("address1", "STRING_TYPE", "POST", "address1");
$customTransaction->addColumn("address2", "STRING_TYPE", "POST", "address2");
$customTransaction->addColumn("city", "STRING_TYPE", "POST", "city");
$customTransaction->addColumn("state", "STRING_TYPE", "POST", "state", "{SESSION.state}");
$customTransaction->addColumn("zip", "STRING_TYPE", "POST", "zip");
$customTransaction->addColumn("phone", "STRING_TYPE", "POST", "phone");
$customTransaction->addColumn("email", "STRING_TYPE", "POST", "email");
$customTransaction->addColumn("school", "STRING_TYPE", "POST", "school");
$customTransaction->addColumn("grade", "STRING_TYPE", "POST", "grade", "{SESSION.grade}");
$customTransaction->addColumn("teacher_sponsor", "STRING_TYPE", "POST", "teacher_sponsor");
$customTransaction->addColumn("stem", "STRING_TYPE", "POST", "stem", "{SESSION.stem}");
$customTransaction->addColumn("interest", "STRING_TYPE", "POST", "interest", "{SESSION.interest}");
$customTransaction->addColumn("attend", "STRING_TYPE", "POST", "attend", "{SESSION.attend}");
$customTransaction->addColumn("needs", "STRING_TYPE", "POST", "needs");
$customTransaction->addColumn("allergies", "STRING_TYPE", "POST", "allergies");
$customTransaction->addColumn("parent", "STRING_TYPE", "POST", "parent");
$customTransaction->addColumn("parent_phone", "STRING_TYPE", "POST", "parent_phone");
$customTransaction->addColumn("emergency", "STRING_TYPE", "POST", "emergency", "{SESSION.emergency}");
$customTransaction->addColumn("relationship", "STRING_TYPE", "POST", "relationship", "{SESSION.relationship}");
$customTransaction->addColumn("emergency_phone", "STRING_TYPE", "POST", "emergency_phone");
$customTransaction->addColumn("accept", "STRING_TYPE", "POST", "accept", "{SESSION.accept}");
// End of custom transaction instance

// Execute all the registered transactions
$tNGs->executeTransactions();
$tNGs->executeTransactions();
// Get the transaction recordset
$rscustom = $tNGs->getRecordset("custom");
$row_rscustom = mysql_fetch_assoc($rscustom);
$totalRows_rscustom = mysql_num_rows($rscustom);
?>
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
<?php echo $tNGs->displayValidationRules();?>
<script type="text/javascript" src="includes/wdg/classes/JSRecordset.js"></script>
<script type="text/javascript" src="includes/wdg/classes/CommaCheckboxes.js"></script>
<?php
//begin JSRecordset
$jsObject_RsStem = new WDG_JsRecordset("RsStem");
echo $jsObject_RsStem->getOutput();
//end JSRecordset
?>
<?php
//begin JSRecordset
$jsObject_RsInterests = new WDG_JsRecordset("RsInterests");
echo $jsObject_RsInterests->getOutput();
//end JSRecordset
?>

<?php
//begin JSRecordset
$jsObject_acceptRules = new WDG_JsRecordset("acceptRules");
echo $jsObject_acceptRules->getOutput();
//end JSRecordset
?>
</head>

<body>
<p>
  <?php
	echo $tNGs->getErrorMsg();
?>
</p>


<form method="post" id="form1" action="<?php echo KT_escapeAttribute(KT_getFullUri()); ?>">
  <table width="509" align="left" cellpadding="2" cellspacing="0" class="KT_tngtable">
    <tr>
      <td colspan="2" class="KT_th"><img src="images/banner.jpg" alt="banner" width="850" height="169" border="0" usemap="#Map" /></td>
    </tr>
    <tr>
      <td colspan="2" class="KT_th"><h1 align="left" class="style3 style8">Workshop Registration Form<br />
      Click here for pdf version.</h1>
<p class="style5 style6"><span class="style2">*</span>required field</p></td>
    </tr>
    <tr>
      <td width="182" class="KT_th"><label for="fname">First Name:</label></td>
      <td align="left">
        <input type="text" name="fname" id="fname" value="<?php echo KT_escapeAttribute($row_rscustom['fname']); echo $_SESSION['fname']; ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("fname");?> <?php echo $tNGs->displayFieldError("custom", "fname"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="lname">Last Name:</label></td>
      <td align="left">
        <input type="text" name="lname" id="lname" value="<?php echo KT_escapeAttribute($row_rscustom['lname']); echo $_SESSION['lname'];  ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("lname");?> <?php echo $tNGs->displayFieldError("custom", "lname"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="address1">Address1:</label></td>
      <td align="left">
        <input type="text" name="address1" id="address1" value="<?php echo KT_escapeAttribute($row_rscustom['address1']); echo $_SESSION['address1'];  ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("address1");?> <?php echo $tNGs->displayFieldError("custom", "address1"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="address2">Address2:</label></td>
      <td align="left">
        <input type="text" name="address2" id="address2" value="<?php echo KT_escapeAttribute($row_rscustom['address2']); echo $_SESSION['address2'];  ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("address2");?> <?php echo $tNGs->displayFieldError("custom", "address2"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="city">City:</label></td>
      <td align="left">
        <input type="text" name="city" id="city" value="<?php echo KT_escapeAttribute($row_rscustom['city']); echo $_SESSION['city'];  ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("city");?> <?php echo $tNGs->displayFieldError("custom", "city"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="state">State:</label></td>
      <td align="left">
        <select name="state" id="state">
      <option value=""><?php echo NXT_getResource("Select one..."); ?></option>
              <?php 
do {  
?>
              <option value="<?php echo $row_state['state']?>"<?php if (!(strcmp($row_state['state'], $row_rscustom['state']))) {echo "SELECTED";} ?>><?php echo $row_state['state']?></option>
<?php
} while ($row_state = mysql_fetch_assoc($state));
  $rows = mysql_num_rows($state);
  if($rows > 0) {
      mysql_data_seek($state, 0);
	  $row_state = mysql_fetch_assoc($state);
  }
?>
            </select>
              <?php echo $tNGs->displayFieldError("custom", "home_state"); ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="zip">Zip Code:</label></td>
      <td align="left">
        <input type="text" name="zip" id="zip" value="<?php echo KT_escapeAttribute($row_rscustom['zip']); echo $_SESSION['zip']; ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("zip");?> <?php echo $tNGs->displayFieldError("custom", "zip"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="phone">Phone <br />
      (xxx) xxx-xxxx:</label></td>
      <td align="left">
        <input type="text" name="phone" id="phone" value="<?php echo KT_escapeAttribute($row_rscustom['phone']); echo $_SESSION['phone'];?>" size="32" />
      <?php echo $tNGs->displayFieldHint("phone");?> <?php echo $tNGs->displayFieldError("custom", "phone"); ?> </td>
    </tr><tr>
      <td class="KT_th"><label for="email">Email:</label></td>
      <td align="left">
        <input type="text" name="email" id="email" value="<?php echo KT_escapeAttribute($row_rscustom['email']); echo $_SESSION['email'];?>" size="32" />
      <?php echo $tNGs->displayFieldHint("email");?> <?php echo $tNGs->displayFieldError("custom", "email"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="school">School:</label></td>
      <td align="left">
        <input type="text" name="school" id="school" value="<?php echo KT_escapeAttribute($row_rscustom['school']); echo $_SESSION['school'];  ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("school");?> <?php echo $tNGs->displayFieldError("custom", "school"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="grade">Grade:</label></td>
      <td align="left">
        <select name="grade" id="grade">
          <option value=""><?php echo NXT_getResource("Select one..."); ?></option>
          <?php 
do {  
?>
          <option value="<?php echo $row_RsGrade['type']?>"<?php if (!(strcmp($row_RsGrade['type'], $row_rscustom['grade']))) {echo "SELECTED";} ?>><?php echo $row_RsGrade['type']?></option>
          <?php
} while ($row_RsGrade = mysql_fetch_assoc($RsGrade));
  $rows = mysql_num_rows($RsGrade);
  if($rows > 0) {
      mysql_data_seek($RsGrade, 0);
	  $row_RsGrade = mysql_fetch_assoc($RsGrade);
  }
?>
        </select>
        <?php echo $tNGs->displayFieldError("custom", "grade"); ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="teacher_sponsor">Teacher or Adult Sponsor:</label></td>
      <td align="left">
        <input type="text" name="teacher_sponsor" id="teacher_sponsor" value="<?php echo KT_escapeAttribute($row_rscustom['teacher_sponsor']); echo $_SESSION['teacher_sponsor']; ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("teacher_sponsor");?> <?php echo $tNGs->displayFieldError("custom", "teacher_sponsor"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="stem">Please select your interest(s) in the STEM<br />
        and related fields
      :</label></td>
      <td align="left">
        <input name="stem" id="stem" value="<?php echo KT_escapeAttribute($row_rscustom['stem']); ?>" size="32" wdg:recordset="RsStem" wdg:subtype="CommaCheckboxes" wdg:type="widget" wdg:displayfield="type" wdg:valuefield="type" wdg:groupby="3" />    
        <?php echo $tNGs->displayFieldError("custom", "stem"); ?>  </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="interest">Which topic(s) would interest you most<br />
      during the the EYH Conference?</label></td>
      <td align="left"><input name="interest" id="interest" value="<?php echo KT_escapeAttribute($row_rscustom['interest']); ?>" size="32" wdg:recordset="RsInterests" wdg:subtype="CommaCheckboxes" wdg:type="widget" wdg:displayfield="type" wdg:valuefield="type" wdg:groupby="3" />    
        <?php echo $tNGs->displayFieldError("custom", "interest"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="attend">Have you attended an EYH Conference in the past?:</label></td>
      <td align="left">
        <select name="attend" id="attend">
          <option value=""><?php echo NXT_getResource("Select one..."); ?></option>
          <?php 
do {  
?>
                    <option value="<?php echo $row_RsChoice['type']?>"<?php if (!(strcmp($row_RsChoice['type'], $row_rscustom['attend']))) {echo "SELECTED";} ?>><?php echo $row_RsChoice['type']?></option>
          <?php
} while ($row_RsChoice = mysql_fetch_assoc($RsChoice));
  $rows = mysql_num_rows($RsChoice);
  if($rows > 0) {
      mysql_data_seek($RsChoice, 0);
	  $row_RsChoice = mysql_fetch_assoc($RsChoice);
  }
?>
        </select>
        <?php echo $tNGs->displayFieldError("custom", "attend"); ?></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="needs">List any  special needs or accomodations:</label></td>
      <td align="left">
        <textarea name="needs" id="needs" cols="50" rows="3"><?php echo KT_escapeAttribute($row_rscustom['needs']); echo $_SESSION['needs']; ?></textarea>
        <?php echo $tNGs->displayFieldHint("needs");?> <?php echo $tNGs->displayFieldError("custom", "needs"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="allergies">List any allergies:</label></td>
      <td align="left">
        <textarea name="allergies" id="allergies" cols="50" rows="3"><?php echo KT_escapeAttribute($row_rscustom['allergies']); echo $_SESSION['allergies']; ?></textarea>
        <?php echo $tNGs->displayFieldHint("allergies");?> <?php echo $tNGs->displayFieldError("custom", "allergies"); ?> </td>
    </tr>
    <tr class="">
      <td colspan="2"><div align="left" class="stretch2">
        <p><strong>Permission Statement</strong>
          My child is at least in 7th grade and has my permission to attend 
          Expanding Your Horizons. I give my permission for her to use public
          transportation, if necessary, to attend the workshops. I give my 
          consent for her to be photographed for publicity purposes. In the event
          of an emergency while my child is attending EYH, I give my 
          permission for her to receive emergency medical treatment and care.
          Registrations must be signed by a Parent or Guardian to be considered. 
          Special accommodations must be listed above.</p>
      </div></td>
    </tr>
    <tr>
          <td class="KT_th">
            <label for="accept">I have read and agree to the permission statement:</label>
          </td>
    <td width="317" align="left">
      <input name="accept" id="accept" value="<?php echo KT_escapeAttribute($row_rscustom['accept']); ?>" size="32" wdg:recordset="acceptRules" wdg:subtype="CommaCheckboxes" wdg:type="widget" wdg:displayfield="type" wdg:valuefield="type" wdg:groupby="1" />    
      <?php echo $tNGs->displayFieldError("custom", "accept"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="parent">Parent or Guardian Name:</label></td>
      <td align="left">
        <input type="text" name="parent" id="parent" value="<?php echo KT_escapeAttribute($row_rscustom['parent']); echo $_SESSION['parent']; ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("parent");?> <?php echo $tNGs->displayFieldError("custom", "parent"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="parent_phone">Daytime or Cell Phone Number <br />
      (xxx) xxx-xxxx::</label></td>
      <td align="left">
        <input type="text" name="parent_phone" id="parent_phone" value="<?php echo KT_escapeAttribute($row_rscustom['parent_phone']); echo $_SESSION['parent_phone']; ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("parent_phone");?> <?php echo $tNGs->displayFieldError("custom", "parent_phone"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="emergency">Emergency Contact Name:</label></td>
      <td align="left">
        <input type="text" name="emergency" id="emergency" value="<?php echo KT_escapeAttribute($row_rscustom['emergency']);  echo $_SESSION['emergency']; ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("emergency");?> <?php echo $tNGs->displayFieldError("custom", "emergency"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="relationship">Relationship to EYH Participant: </label></td>
      <td align="left">
        <input type="text" name="relationship" id="relationship" value="<?php echo KT_escapeAttribute($row_rscustom['relationship']);  echo $_SESSION['relationship']; ?>" size="32" />
        <?php echo $tNGs->displayFieldHint("relationship");?> <?php echo $tNGs->displayFieldError("custom", "relationship"); ?> </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="emergency_phone">Daytime or Cell Phone Number<br />
      (xxx) xxx-xxxx:</label></td>
      <td><input type="text" name="emergency_phone" id="emergency_phone" value="<?php echo KT_escapeAttribute($row_rscustom['emergency_phone']); echo $_SESSION['emergency_phone'];  ?>" size="32" />
          <?php echo $tNGs->displayFieldHint("emergency_phone");?> <?php echo $tNGs->displayFieldError("custom", "emergency_phone"); ?> </td>
    </tr>
    
    <tr class="KT_buttons">
      <td colspan="2">
  <input type="submit" name="KT_Custom1" id="KT_Custom1" value="Review answers" />
  <input name="Cancel" type="button" id="Cancel" onclick="MM_goToURL('parent','http://www.nmnwse.org/lawis/eyh/');return document.MM_returnValue" value="Cancel" />
 <input name="reset" type="reset" value="Reset" /></td>
    </tr>
  </table>
</form>
<p class="style7">&nbsp;</p>

<map name="Map" id="Map"><area shape="rect" coords="102,141,139,158" href="index.shtml" alt="Homw" />
<area shape="rect" coords="178,142,246,158" href="attendees.shtml" alt="Attendees" />
<area shape="rect" coords="283,141,357,158" href="volunteers.shtml" alt="Volunteers" />
<area shape="rect" coords="396,141,476,159" href="registration_form.php" alt="Workshop Registration Form" />
<area shape="rect" coords="515,141,576,156" href="contacts.shtml" alt="Contacts" />
<area shape="rect" coords="613,141,652,158" href="links.shtml" alt="Links" /><area shape="rect" coords="690,142,746,155" href="archives.shtml" alt="Archives" />
</map></body>
</html>
<?php
mysql_free_result($RsChoice);

mysql_free_result($RsGrade);

mysql_free_result($RsStem);

mysql_free_result($RsInterests);

mysql_free_result($acceptRules);

mysql_free_result($state);
?>
