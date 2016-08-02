<?php
  session_start();
  import_request_variables('P');
  include("../../../conf/config.php");
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
<script src="includes/tng/scripts/FormValidation.js" type="text/javascript"></script>

<script src="includes/tng/scripts/FormValidation.js.php" type="text/javascript"></script>
<script type="text/javascript" src="includes/wdg/classes/JSRecordset.js"></script>
<script type="text/javascript" src="includes/wdg/classes/CommaCheckboxes.js"></script>

</head>

<body>
<p></p>

<form method="post" id="form1" action="http://nmnwse.org/lawis/eyh/survey_submit.php">
  <table width="509" align="left" cellpadding="2" cellspacing="0" class="KT_tngtable">
    <tr>
      <td colspan="2" class="KT_th"><img src="images/banner.jpg" alt="banner" width="850" height="169" border="0" usemap="#Map" /></td>
    </tr>
    <tr>
      <td><strong>Survey:</strong><br />
      <br />
      &nbsp; please help us do better!  </td>
      
    </tr>
     <tr>
      <td width="364" class="KT_th">Name:</td>
      <td align="left">
        <input type='text', name="name" id="name">
        </td></tr>
    <tr>
      <td width="364" class="KT_th">School:</td>
      <td align="left">
        <select name="school" id="school">
      <?php
        require_once ("../../../conf/config.php");
        $sql = "SELECT DISTINCT school FROM students WHERE submit_date > '2012-12-01' order by school";
        $res = mysql_query($sql) or die('Error: ' . mysql_error());
        $count = mysql_num_rows($res);
          echo "<option value = ''>Select one</option>";
        for ($i=0; $i < $count; $i++)
        {
          $dp = htmlspecialchars(mysql_result($res, $i));
          echo "<option value = '".$dp."'>".$dp."</option>";
        }
      ?>
        </select>
        <br />
        Others:<input type="text", name="oschool" />
        </td>
    </tr>
    <tr>
      <td class="KT_th"><label for="grade">Grade:</label></td>
      <td align="left">
        <select name="grade" id="grade">
          <option value="">Select one...</option>
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
                    <option value="9th">9th</option>
                    <option value="10th">10th</option>
                    <option value="11th">11th</option>
                    <option value="12th">12th</option> 
        </select>
         <br />
        Others:<input type="text", name="ograde" />
          </td>
    </tr>
    <tr>
      <td class="KT_th">(Optional) What is your ethnic background? <br />
                         (Choose all that apply)</td>
      <td align="left">
        <input type = "checkbox" name="race1" value = "African American"/>African American
        <input type = "checkbox" name="race2" value = "Native American"/>Native American <br />
        <input type = "checkbox" name="race3" value="Hispanic"/>Hispanic
        <input type = "checkbox" name="race4" value="Asian"/>Asian   
        <input type = "checkbox" name="race5" value="White(non-Hispanic)"/>White(non-Hispanic)
          </td>
    </tr>
       <tr>
      <td class="KT_th">
        Keynote Speaker:
       </td> <td align="left">
        <select name="keynote" id="keynote">
            <option value="" default="">Select one ...</option>
            <option value="Dull">Dull</option>
            <option value="Somewhat interesting">Somewhat Interesting</option>
            <option value="Just OK">Just OK</option>
            <option value="Really enjoyed most of it">Mostly Good</option>
            <option value="Fantastic">Fantastic</option>
        </select>  </td>
    </tr>
      <tr>
      <td class="KT_th">Workshop Session 1:</td>
      <td align="left">
          <select name="workshop" id="workshop" >
       <?php 
        require_once ("../../../conf/config.php");
        $sql = "SELECT title FROM interests where active='Y' order by title ";
        $res = mysql_query($sql) or die('Error: ' . mysql_error());
        $count = mysql_num_rows($res);
          echo "<option value = ''>Select one</option>";
        for ($i=0; $i < $count; $i++)
        {
          $op = htmlspecialchars(mysql_result($res, $i));
		// $op = mysql_result($res, $i);
          echo "<option value = '".$op."'>".$op."</option>";
		}
       ?>
        </select>  
          </td>
    </tr>   
       <tr>
      <td class="KT_th">Rate content of workshop (choose one):</td>
      <td align="left">
        <select name="rating" id="rating" >
            <option value="" default>Select one ...</option>
            <option value="Dull">Dull</option>
            <option value="Somewhat interesting">Somewhat Interesting</option>
            <option value="Just OK">Just OK</option>
            <option value="Really enjoyed most of it">Mostly Good</option>
            <option value="Fantastic">Fantastic</option>
        </select>  
     </td>
    </tr>
    <tr>
      <td class="KT_th">Rate difficulty of workshop (choose one):</td>
      <td align="left">
        <select name="diff" id="diff" >
            <option value="" default>Select one ...</option>
            <option value="Too Easy">Too Easy</option>
            <option value="Easy">Easy</option>
            <option value="About Right">Just Right</option>
            <option value="Difficult">Difficult</option>
            <option value="Too Difficult">Too Difficult</option>
        </select>   
       </td>
    </tr>
        <tr>
      <td class="KT_th">Workshop Session 2:</td>
      <td align="left">
          <select name="workshop2" id="workshop2" >
       <?php 
        require_once ("../../../conf/config.php");
        $sql = "SELECT title FROM interests where active='Y' order by title ";
        $res = mysql_query($sql) or die('Error: ' . mysql_error());
        $count = mysql_num_rows($res);
          echo "<option value = ''>Select one</option>";
        for ($i=0; $i < $count; $i++)
        {
          $op = htmlspecialchars(mysql_result($res, $i));
		// $op = mysql_result($res, $i);
          echo "<option value = '".$op."'>".$op."</option>";
		}
       ?>
        </select>  
          </td>
    </tr>   
    
    <tr>
      <td class="KT_th">Rate content of workshop (choose one):</td>
      <td align="left">
        <select name="rating2" id="rating" >
            <option value="" default>Select one ...</option>
            <option value="Dull">Dull</option>
            <option value="Somewhat interesting">Somewhat Interesting</option>
            <option value="Just OK">Just OK</option>
            <option value="Really enjoyed most of it">Mostly Good</option>
            <option value="Fantastic">Fantastic</option>
        </select>  
     </td>
    </tr>
    <tr>
      <td class="KT_th">Rate difficulty of workshop (choose one):</td>
      <td align="left">
        <select name="diff2" id="diff" >
            <option value="" default>Select one ...</option>
            <option value="Too Easy">Too Easy</option>
            <option value="Easy">Easy</option>
            <option value="About Right">Just Right</option>
            <option value="Difficult">Difficult</option>
            <option value="Too Difficult">Too Difficult</option>
        </select>   
       </td>
    </tr>
     <tr>
      <td class="KT_th"><label for="influence">Did this conference make you to take more <strong>Science, Technology, <br />
        Engineering and Mathematics</strong> (STEM) classes?</label></td>
      <td align="left"><p>
        <label>
          <input type="radio" name="influence" value="Yes" id="influence"  />
          Yes</label>
        <label>
          <input type="radio" name="influence" value="No" id="influence" />
          No</label>
      </p></td>
    </tr>
    <tr>
      <td class="KT_th"><label for="attitude">Did this conference change your attitude about STEM? </label></td>
      <td align="left"><p>
        <label>
          <input type="radio" name="attitude" value="Yes" id="attitude"  />
          Yes</label>
        <label>
          <input type="radio" name="attitude" value="No" id="attitude" />
          No</label>
      </p></td>
    </tr>
 
    <tr>
      <td class="KT_th"><p>Did your experience at EYH change your view of scientists, engineers,<br /> technologists and/or mathematicians? </p></td>
      <td width="482"><label>
        <input type="radio" name="view" value="Yes" id="view"  />
        Yes</label>
        <label>
          <input type="radio" name="view" value="No" id="view" />
    No</label>      
     
     </tr>
    <tr>
      <td class="KT_th"><p>Please comment on what you expected was ... :</p></td>
      <td align="left">
        <textarea name="expected" id="expected" value="" cols="60" rows="2" ></textarea>
        </td>
    </tr>
        <tr>
      <td class="KT_th"><p>Please comment on what you got ... : </p></td>
      <td align="left">
        <textarea name="got" id="got" value="" cols="60" rows="2" ></textarea>
        </td>
    </tr>
        <tr>
      <td class="KT_th"><p>Please comment on what next you will ... :</p></td>
      <td align="left">
        <textarea name="next_i_will" id="next_i_will" value="" cols="60" rows="2" ></textarea>
        </td>
    </tr>
        <tr>
      <td class="KT_th"><p>Please comment on what you wish to learn more ... :</td>
      <td align="left">
        <textarea name="wish_more" id="wish_more" value="" cols="60" rows="2" ></textarea>
        </td>
    </tr>
        <tr>
      <td class="KT_th"><p>Please comment on what the best part was ... :</p></td>
      <td align="left">
        <textarea name="best_part" id="best_part" value="" cols="60" rows="2" ></textarea>
        </td>
    </tr>
    <tr class="KT_buttons">
      <td class="KT_th">&nbsp;</td>
      <td class="KT_th" align = "left"><input type="submit" name="KT_Custom1" id="KT_Custom1" value="Submit" />
  <input name="Cancel" type="button" id="Cancel" onclick="MM_goToURL('parent','http://www.nmnwse.org/lawis/eyh/');
              return document.MM_returnValue" value="Cancel" />
 <input name="reset" type="reset" value="Start Over" 
               /></td>
    </tr>
  </table>
</form>
<p class="style7">&nbsp;</p>

<map name="Map" id="Map"><area shape="rect" coords="102,141,139,158" href="index.shtml" alt="Homw" />
<area shape="rect" coords="178,142,246,158" href="attendees.shtml" alt="Attendees" />
<area shape="rect" coords="283,141,357,158" href="volunteers.shtml" alt="Volunteers" />
<area shape="rect" coords="396,141,476,159" href="registration.shtml" alt="Workshop Registration Form" />
<area shape="rect" coords="515,141,576,156" href="contacts.shtml" alt="Contacts" />
<area shape="rect" coords="613,141,652,158" href="links.shtml" alt="Links" /><area shape="rect" coords="690,142,746,155" href="archives.shtml" alt="Archives" />
</map></body>
</html>
