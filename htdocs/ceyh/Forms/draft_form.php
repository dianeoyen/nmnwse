<html>
<head>
  <title>NMNWSE Central Chapter EYH Conference - Online Form</title>

<?php
include("../Includes/pagetop1_ceyh.php");
?>
Draft Online Form
<?php
include("../Includes/pagetop2_ceyh.php");
?>

<! ---------- main content -------- >

<font face="Arial,Helvetica">


<! -------- Albuquerque EYH Online Form  ---------- >
<P>
<img src="http://nmnwse.org/Images/r_hand.gif">PAGE UNDER CONSTRUCTION - DO NOT USE

<! --------------- >

<form method="post" action="/cgi-bin/formto.pl">

<P>
<B>YOUR CONTACT INFORMATION:</b><br>
<sup>*</sup>First Name: <input type="text" name="FirstName" size="30">
&nbsp; <sup>*</sup>Last&nbsp;Name:&nbsp;<input type="text" name="LastName" size="30">
<br><b>Preferred contact info:</b>
<br>
<sup>*</sup>Phone: <input type="text" name="Pref_Phone" size="25">
&nbsp; &nbsp;
<sup>*</sup>Email: <input type="text" name="Pref_Email" size="50">
<br>
Mailing address:<br>
<textarea name="Pref_Address" rows="2" cols="75" wrap="Virtual">
</textarea>
<br><b>Alternate contact info:</b>
<br>
  Phone:&nbsp;<input type="text" name="Alt_Phone" size="25">
&nbsp; &nbsp;
Email: &nbsp;  <input type="text" name="Alt_Email" size="50"><br>
Mailing address (plus any additional alternate contact information you wish to provide):<br>
<textarea name="Alt_Address" rows="2" cols="75" wrap="Virtual">
</textarea>
<br>
<br>
<B><sup>*</sup>Best way to reach you?</b> 
<br>&nbsp; &nbsp; &nbsp;  <input type="radio" name="Contact_Type" value="Phone">   &nbsp; Phone
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Contact_Type" value="Email">    &nbsp; Email 
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Contact_Type" value="SnailMail">    &nbsp; Regular Mail
<br>
<B>Best time to reach you?</b> 
<br>&nbsp; &nbsp; &nbsp;  <input type="radio" name="Contact_Time" value="Morning">   &nbsp; Morning (8-12am)
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Contact_Time" value="Afternoon">    &nbsp; Afternoon (1-5pm)
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Contact_Time" value="Evening">    &nbsp; Evening (7-9pm)

<P>
<B>PREFERENCES:</b>
<br>
Please check all that apply, and
 use the comment  box below if you would like to provide further details on your preferences.
<P>
<input type="checkbox" name="EYHlistserv" value="AddMe"> &nbsp; <B>I would like to be added to the Central EYH Listserver</B>
<br>
<input type="checkbox" name="CentralEmail" value="AddMe"> &nbsp; <B>I would like to be added to the NMNWSE Central Chapter distribution for other Albuquerque-area NMNWSE activties</B>
<br>
<input type="checkbox" name="NMNWSEactivities" value="ContactMe"> &nbsp; <B>Please contact me about other NMNWSE activities</B>
<br>
<input type="checkbox" name="NMNWSElistserv" value="AddMe"> &nbsp; <B>I would like to be added to the NMNWSE statewide Listserver</B>
<br>
<input type="checkbox" name="NMNWSEmembership" value="ContactMe"> &nbsp; <B>Please contact me about NMNWSE membership</B>
<br>

<!--
Sample dropdown
<select name=SampleDropdown>
<option value="NA">0 </option>
<option value="=1*70">1 </option>
<option value="=2*70">2 </option>
<option value="=3*70">3 </option>
<option value="(4+)*70">4+ </option>
</select>
-->



<P>
<B>Other Comments:</B> <br>
Please enter any additional information you wish to provide <br>
<textarea name="AdditionalComments" rows="4" cols="75" wrap="Virtual"></textarea>
<br>

<IMG SRC="http://nmnwse.org/Images/linefrill.gif" ALT="-----------" HEIGHT=5 WIDTH=100%>
<div align="right">
</div>
<table border=0 width="100%">
  <tr>
    <td align="left" valign="top">
           <table border=2 bgcolor="red"><tr><td>
              <a href="http://nmnwse.org/ceyh/Forms/index.php">
                 <font size="-1" color="white"><B>&nbsp;CLEAR&nbsp;</B></font>
               </a>
           </td></tr></table>
    </td>
    <td align="center"> <font size="+2" color="#33CC00"><B>
       <! input type="submit" name="Submit1" value=" SUBMIT FORM" >
Submit button removed <br> form not yet live <! for test use only >
</B>

</font>
</td>
    <td align="right" valign="top"> <font size="-1">
       <sup>*</sup>Required Field
    </font> </td>
</tr></table>

<!--SCRIPT CONFIGURATION SECTION -->
<input type="hidden" name="required"
value="FirstName,LastName,
Pref_Phone,Pref_Email,Contact_Type
"> 

<input type="hidden" name="data_order"
value="FirstName,LastName,
Pref_Phone,Pref_Email,Pref_Address,
Alt_Phone,Alt_Email,Alt_Address,
Contact_Type,Contact_Time,
EYHlistserv,CentralEmail,NMNWSEactivities,NMNWSElistserv,NMNWSEmembership,
AdditionalComments
">
<input type="hidden" name="submit_to" value="webmaster@nmnwse.org"> 
<input type="hidden" name="form_id" value="NMNWSE Central EYH - Online Form"> 
<input type="hidden" name="ok_url" value="http://nmnwse.org/ceyh/Forms/ceyh_form_thanks.php"> 
<input type="hidden" name="not_ok_url" value="http://nmnwse.org/ceyh/Forms/ceyh_form_tryagain.php"> 
<!--END OF SCRIPT CONFIGURATION SECTION -->

</form>


<br> &nbsp;
</font>
<! ---------- end main content -------- >

<?php
include("../Includes/pagebot_ceyh.php");
?>
