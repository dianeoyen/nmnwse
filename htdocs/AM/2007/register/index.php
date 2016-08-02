<html>
<head>
<title>2007 NMNWSE Annual Meeting and Technical Symposium - Registration Form</title>
<?php
include("../../../Includes/pagetop1_nmnwse.php");
?>
2007 Annual Meeting &amp; Technical Symposium
<br>26-27 Oct 2007, Clayton, NM
<br>Online Registration CLOSED
<BR>YOU CAN REGISTER AT MEETING
<?php
include("../../../Includes/pagetop2_nmnwse.php");
?>

<! --------------- >

<form method="post" action="/cgi-bin/formto.pl">
 
<?php
if($_GET['printable'] != 1){
  include("note1.php");
}else{
  include("note1_pr.php");
}
?>

<IMG SRC="http://nmnwse.org/Images/linefrill.gif" ALT="-----------" HEIGHT=5 WIDTH=100%>
<B>MEETING ATTENDEE INFORMATION:</b><br>
<sup>*</sup>First Name: <input type="text" name="Attendee_FirstName" size="30">
&nbsp; <sup>*</sup>Last Name: <input type="text" name="Attendee_LastName" size="30">
<br>
<sup>*</sup>Daytime Phone: <input type="text" name="Attendee_PhoneDay" size="25">
&nbsp; &nbsp;
 <sup>*</sup>Evening Phone: <input type="text" name="Attendee_PhoneEve" size="25">
<br>
<sup>*</sup>Email: &nbsp;  <input type="text" name="Attendee_Email" size="50"><br>
<sup>*</sup>Full Mailing address:<br>
<textarea name="Attendee_Address" rows="2" cols="75" wrap="Virtual">
</textarea>
<br>
<br>
<B><sup>*</sup>Would you be willing to run for the 2008 NMNWSE Board?</b> 
<br>&nbsp; &nbsp; &nbsp;  <input type="radio" name="Board_RunFor" value="Yes">   &nbsp; yes
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Board_RunFor" value="No">    &nbsp; no 
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Board_RunFor" value="Maybe">    &nbsp; maybe

<br>
<B>Will you attend the Sunday AM NMNWSE Board Meeting?</b>
<br>&nbsp; &nbsp; &nbsp;  <input type="radio" name="Board_AttendSun" value="Yes">   &nbsp; yes 
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Board_AttendSun" value="No">    &nbsp; no 
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Board_AttendSun" value="Maybe">    &nbsp; maybe 

<br> <B><sup>*</sup>Are you giving a paper in the technical session?</b>
<br>&nbsp; &nbsp; &nbsp;  <input type="radio" name="Paper_Give" value="Yes">   &nbsp; yes 
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Paper_Give" value="No">    &nbsp; no 
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Paper_Give" value="Maybe">    &nbsp; maybe 
<br>
If yes or maybe, please provide draft title and abstract: (or indicate if already sent to technical chair)
<br>
<textarea name="Paper_Details" rows="5" cols="75" wrap="Virtual">
</textarea>

<P>
<hr>
<B>CONFERENCE FEES:</B>
<?php
if($_GET['printable'] != 1){
  include("note2.php");
}
?>
<br>
<br>
<table border=1 cellspacing=0 cellpadding=5>
<tr>
   <td valign="middle" colspan=5 align="left"> 
      <b>REGISTRATION</b>
  </td>
</tr>
<tr>
   <td rowspan=2>
       &nbsp;
   </td><td valign="bottom" align="center" rowspan=2> 
     <sup>*</sup><b>Attendee:</b>
  </td><td valign="bottom" colspan=3 align="center" bgcolor="#ffffcc">
        <b>Accompanying persons<br>
  </td>
</tr>
<tr>
  <td valign="bottom" align="center" bgcolor="#ffffcc">
        <b>Adults</b>
  </td><td valign="middle" align="center" colspan=2 rowspan=3 bgcolor="#ffffcc">
        &nbsp;
  </td>
</tr>
<tr>
   <td valign="middle" align="center" >
       registration/person
   </td><td valign="middle" align="center">
        $40
  </td><td valign="middle" align="center" bgcolor="#ffffcc">
        $5
  </td>
</tr>
<tr>
   <td valign="middle" align="center" >
       &times; no. people
   </td><td valign="middle" align="center">
          <select name=Reg_Attendee>
          <option value="1">1 </option>
          <option value="0">0 </option>
          </select>
  </td><td valign="middle" align="center" bgcolor="#ffffcc">
          <select name=Reg_AccAdult>
          <option value="0">0 </option>
          <option value="1">1 </option>
          <option value="2">2 </option>
          <option value="3">3 </option>
          <option value="4+">4+ </option>
          </select>
  </td>
</tr>
<tr>
   <td valign="middle" colspan=5 align="left">
       <B>CONFERENCE DINNER</b> (Sat, Oct 27)
  </td>
</tr>
<tr>
   <td> 
       &nbsp;
   </td><td valign="bottom" align="center">
     <sup>*</sup><b>Attendee:</b>
  </td><td valign="bottom" align="center" bgcolor="#ffffcc">
        <b>Adults</b>
  </td><td valign="bottom" align="center" bgcolor="#ffffcc">
        <b>Children 8-18</b>
  </td><td valign="bottom" align="center" bgcolor="#ffffcc">
       <b>Children under 8</b>
  </td>
</tr>
<tr>
   <td valign="middle" align="center" >
       dinner/person
   </td><td valign="middle" align="center">
        $35
  </td><td valign="middle" align="center" bgcolor="#ffffcc">
        $35
  </td><td valign="middle" align="center" bgcolor="#ffffcc">
        $25
  </td><td valign="middle" align="center" bgcolor="#ffffcc">
       free
  </td>
</tr>
<tr>
   <td valign="middle" align="center" >
       &times; no. people
   </td><td valign="middle" align="center">
          <select name=Din_Attendee>
          <option value="1">1 </option>
          <option value="0">0 </option>
          </select>
  </td><td valign="middle" align="center" bgcolor="#ffffcc">
          <select name=Din_AccAdult>
          <option value="0">0 </option>
          <option value="1">1 </option>
          <option value="2">2 </option>
          <option value="3">3 </option>
          <option value="4+">4+ </option>
          </select>
  </td><td valign="middle" align="center" bgcolor="#ffffcc">
          <select name=Din_AccMinor>
          <option value="0">0 </option>
          <option value="1">1 </option>
          <option value="2">2 </option>
          <option value="3">3 </option>
          <option value="4+">4+ </option>
          </select>
  </td><td valign="middle" align="center" bgcolor="#ffffcc">
          <select name=Din_AccChild>
          <option value="0">0 </option>
          <option value="1">1 </option>
          <option value="2">2 </option>
          <option value="3">3 </option>
          <option value="4+">4+ </option>
          </select>
  </td>
</tr>
<tr>
   <td valign="middle" colspan=5 align="left">
       <B>ATTENDEE NMNWSE 2008 MEMBERSHIP</b><br>
          &nbsp; &nbsp;<select name=Fee_Membership>
          <option value="25">$25 regular</option>
          <option value="10">$10, retired</option>
          <option value="5">$5, student/unemployed</option>
          <option value="0">$0, not paying dues at this time</option>
          </select>
  </td>
</tr>
<tr>
   <td valign="middle" colspan=5 align="left">
       <B>+$10 late registration fee</b> (after Oct 1)
  </td>
</tr>
<tr>
   <td valign="middle" colspan=5 align="left">
       <B><sup>*</sup>REGISTRATION TOTAL</b>
<br>
&nbsp; &nbsp; <input type="text" name="Fee_Total" size="15">
<br>(add above - apologies I don't know how to do this automatically)
  </td>
</tr>
</table>
<br>
<B>Name(s) of accompanying persons</b>, if any (used for nametags at reception and dinner). <br>
<input type="text" name="AccompanyPerson_Names" size="75">
<P>
<B>Do you wish to apply for a meeting scholarship?</b><br>
&nbsp; &nbsp; &nbsp; <input type="radio" name="Scholarship" value="Needed">   &nbsp; yes 
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Scholarship" value="no">    &nbsp; no 
<br>
If yes, please provide justification (a limited number will be awarded based on need and whether presenting a paper):<br>
<textarea name="Scholarship_Details" rows="5" cols="75" wrap="Virtual"></textarea>
<br>
If applying for a scholarship, please contact the <a href="http://nmnwse.org/AM/2007/contacts.php">meeting registrar</a> for scholarship status prior to sending
<?php
if($_GET['printable'] != 1){
 echo "a check for your conference fees - give us at least one week to review your request.";
}else{
 echo "your check.";
}
?>


<P>
<hr>
<B>ACCOMMODATIONS:</B> <br>
<P>
<B>On own.</B> Please see the <a href="http://nmnwse.org/AM/2007/hotel.php">conference hotel page</a> for hotel contact info and further details.
<br>
  <input type="checkbox" name="Roommate" value="Interested">-<B>Check here if you would like to be contacted about sharing a room.</b>
<?php
if($_GET['printable'] != 1){
  include("note3.php");
}
?>

<P>
<hr>

<B>PREFERENCES:</b>
<br>
 Please use the comment  box below or fill in the <a
href="http://nmnwse.org/AM/2007/survey">interest survey</a> if you would like to provide further details on your preferences.
<P>
<input type="checkbox" name="ChildCare" value="Desired"> &nbsp; <B>interested in childcare</B>
<br>
<input type="checkbox" name="AccompanyPersonProgram" value="Desired"> &nbsp; <B>interested in accompanying persons program</B><br>
<?php
if($_GET['printable'] != 1){
  include("note4.php");
}
?>

<P>
<B>Dietary Restrictions / Special Accommodations Needed / Other Comments:</B> <br>
Please enter any additional information you wish us to consider when planning this event (e.g., wheelchair access needed).<br>
<textarea name="AdditionalComments" rows="4" cols="75" wrap="Virtual"></textarea>
<br>

<IMG SRC="http://nmnwse.org/Images/linefrill.gif" ALT="-----------" HEIGHT=5 WIDTH=100%>
<div align="right">
</div>
<table border=0 width="100%">
  <tr>
    <td align="left" valign="top">
           <table border=2 bgcolor="red"><tr><td>
              <a href="http://nmnwse.org/AM/2007/register/">
                 <font size="-1" color="white"><B>&nbsp;CLEAR&nbsp;</B></font>
               </a>
           </td></tr></table>
    </td>
    <td align="center"> <font size="+2" color="#33CC00"><B>
       <! input type="submit" name="Submit1" value=" SUBMIT FORM">
       
ONLINE REGISTRATION CLOSED<br> submit button removed
</B>
</font>
<!--
<font size="+1" color="#33CC00"><br>(don't forget to print a copy<br> to send with your check<br>to complete the registration process)
    </font>
-->
</td>
    <td align="right" valign="top"> <font size="-1">
       <sup>*</sup>Required Field
    </font> </td>
</tr></table>

<!--SCRIPT CONFIGURATION SECTION -->
<input type="hidden" name="required"
value="Attendee_FirstName,Attendee_LastName,Attendee_PhoneDay,Attendee_PhoneEve,
Attendee_Email,Attendee_Address,Board_RunFor,Paper_Give,Reg_Attendee,Din_Attendee,Fee_Total"> 
<input type="hidden" name="data_order"
value="Attendee_FirstName,Attendee_LastName, Attendee_PhoneDay, Attendee_PhoneEve,
Attendee_Email,Attendee_Address, Board_RunFor,
Board_AttendSun,Paper_Give, Paper_Details, 
Reg_Attendee,Reg_AccAdult,
Din_Attendee,Din_AccAdult,Din_AccMinor,Din_AccChild, AccompanyPerson_Names, 
Fee_Membership,Fee_Total,Scholarship,Scholarship_Details,
Roommate,ChildCare,AccompanyPersonProgram,AdditionalComments
">
<input type="hidden" name="submit_to" value=""> 
<input type="hidden" name="form_id" value="NMNWSE 2007 Ann Mtg - Online Registration"> 
<input type="hidden" name="ok_url" value="http://nmnwse.org/AM/2007/register/register_thanks.htm"> 
<input type="hidden" name="not_ok_url" value="http://nmnwse.org/AM/2007/register/register_tryagain.htm"> 
<!--END OF SCRIPT CONFIGURATION SECTION -->

</form>


<! --------------- >

<?php
include("../../../Includes/pagebot_nmnwse.php");
?>


