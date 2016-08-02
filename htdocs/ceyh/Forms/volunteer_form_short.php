<html>
<head>
  <title>NMNWSE Central Chapter EYH Conference - Online form for Presenters and other Volunteers</title>

<?php
include("../Includes/pagetop1_ceyh_p1.php");
?>
Online Form for New and Returning Volunteers
<?php
include("../Includes/pagetop2_ceyh_2011.php");
?>

<! ---------- main content -------- >

<font face="Arial,Helvetica">


<! -------- Albuquerque EYH ---------- >

<P><b>If you are interested in helping with NMNWSE Central Chapter Expanding Your Horizons conferences (CEYH), please complete the following information.</b> After submitting the form electronially, you will be contacted by a Planning Committee member to follow up on your interests. 
<!--
You will also be added to the planning committee listserver if you check that box in the general preference section below (or see the <a href="../volunteer.php">volunteer page</a> for instructions to add yourself).
This form can also be used to request being removed from our distribution, or to request information about NMNWSE membership and actitives.
</p>
<P>This form can be submitted at any time, but <b>workshop presenters must return it by Dec 15 for their workshop to be included in the EYH registration mailing</b>. Both new and returning volunteers are both welcome to use this form. 
-->

<p>If you are not directed to a page saying "Form Sucessfully Submitted" after clicking on the submit button, or you do not hear back from us within a week, likely there was an error and we may not have received it - in this case please either <a href="mailto:Central_EYH-L@list.unm.edu">email the planning committee directly</a> or print and send a hardcopy of the form to us at 
CEYH Planning c/o NMNWSE, PO Box 51926, Albuquerque, NM 87181.
<! vs Donna... >

<!--
<P>
<img src="http://nmnwse.org/Images/r_hand.gif">PAGE UNDER CONSTRUCTION - DO NOT USE
-->
<! --------------- >

<form method="post" action="/cgi-bin/formto.pl">

<P>
<table border=1 cellpadding=2><tr><td align="center" bgcolor="#45A1C8">
<B>YOUR CONTACT INFORMATION:</b><br>
</td></tr><tr><td>
<sup>*</sup><b>Name</b>: First <input type="text" name="FirstName" size="27">
&nbsp; Last:&nbsp;<input type="text" name="LastName" size="28">
<br><br><b><sup>*</sup>Preferred contact info:</b> 
 &nbsp;&nbsp;<input type="radio" name="PrefContactTime" value="Day">Day
&nbsp; &nbsp; &nbsp;
<input type="radio" name="PrefContactTime" value="Evening">Evening
&nbsp; &nbsp; &nbsp;
<input type="radio" name="PrefContactTime" value="Both">Both
<br>
<sup>*</sup>Phone: <input type="text" name="Pref_Phone" size="12">
&nbsp; &nbsp;
<sup>*</sup>Email: <input type="text" name="Pref_Email" size="44">
<br>
Mailing address (plus fax, pager, cell phone, etc if you wish to provide that):<br>
<textarea name="Pref_Address" rows="2" cols="70" wrap="Virtual">
</textarea>
<br><br><b>Alternate contact info:</b>
 &nbsp;&nbsp;<input type="radio" name="AltContactTime" value="Day">Day
&nbsp; &nbsp; &nbsp;
<input type="radio" name="AltContactTime" value="Evening">Evening
&nbsp; &nbsp; &nbsp;
<input type="radio" name="AltContactTime" value="Both">Both
<br>
  Phone:&nbsp;<input type="text" name="Alt_Phone" size="12">
&nbsp; &nbsp;
Email: &nbsp;  <input type="text" name="Alt_Email" size="44"><br>
Mailing address (plus any additional alternate contact information you wish to provide):<br>
<textarea name="Alt_Address" rows="2" cols="70" wrap="Virtual">
</textarea>
<br>
<br>
<B><sup>*</sup>Best way to reach you?</b> 
&nbsp; &nbsp; &nbsp;  <input type="radio" name="Contact_BestType" value="Phone">Phone
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Contact_BestType" value="Email">Email 
&nbsp; &nbsp; &nbsp;
<input type="radio" name="Contact_BestType" value="SnailMail">Regular Mail
<P>
<B>Badge Information</b>:<br> If you will be attending EYH (as a presenter or other volunteer), please enter your name,<br> title, employer, and occupational as you would like it to read on your badge
<br>
<textarea name="BadgeInfo" rows="4" cols="70" wrap="Virtual">
Name:
Title:
Employer:
Occupation:
</textarea>


</td></tr>
<!--
<tr><td align="center" bgcolor="#45A1C8">
<B>GENERAL PREFERENCES:</b>
</td></tr><tr><td>
<B>Please check all that apply.</b>
&nbsp;If you are interested in helping with the Central Chapter EYH as a<br>
conference organizer, workshop presenter, day-of helper, etc, or if you have other comments,<br>
 <b>please use the relevant sections below to provide further details.</b>
<P>
<table><tr><td valign="top">
  <input type="checkbox" name="CEYHthisYear" value="ContactMeThisYear"> 
    </td><td valign="top">
  <B>I would like to help with this spring's CEYH</B>
</td></tr><tr><td valign="top">
  <input type="checkbox" name="CEYHsponsor" value="Interested"> 
    </td><td valign="top">
  <B>I am interested in sponsoring EYH</B>
</td></tr><tr><td valign="top">
  <input type="checkbox" name="CEYHnextYear" value="ContactMeNextYear"> 
    </td><td valign="top">
  <B>I am busy this year but please keep me in the loop for CEYH next spring</B>
</td></tr><tr><td valign="top">
  <input type="checkbox" name="CEYHnoInterest" value="DoNotContactMe"> 
    </td><td valign="top">
  <B>I can no longer help - Please remove me from your contact lists and listservers</B>
</td></tr><tr><td valign="top">
  <input type="checkbox" name="EYHlistserv" value="AddMe"> 
    </td><td valign="top">
  <B>I would like to be added to the Central EYH Listserver</B>
</td></tr><tr><td valign="top">
  <input type="checkbox" name="CentralEmail" value="AddMe"> 
    </td><td valign="top">
  <B>I would like to be added to the NMNWSE Central Chapter distribution for other<br> Albuquerque-area NMNWSE activties</B>
</td></tr><tr><td valign="top">
  <input type="checkbox" name="NMNWSEactivities" value="ContactMe"> 
    </td><td valign="top">
  <B>Please contact me about other NMNWSE activities</B>
</td></tr><tr><td valign="top">
  <input type="checkbox" name="NMNWSElistserv" value="AddMe"> 
    </td><td valign="top">
  <B>I would like to be added to the NMNWSE statewide Listserver</B>
</td></tr><tr><td valign="top">
  <input type="checkbox" name="NMNWSEmembership" value="ContactMe"> 
    </td><td valign="top">
  <B>Please contact me about NMNWSE membership</B>
</td></tr></table>

</td></tr>
-->
<!--
<tr><td align="center" bgcolor="#45A1C8">
<B>CONFERENCE COMMITTEE / ADVANCE PLANNING VOLUNTEERS:</b>
</td></tr><tr><td>

<input type="checkbox" name="CEYHComm" value="GeneralPlanningInterest"> &nbsp; <B>I would like to be involved with EYH advance planning</B>
<div style="margin-left: 30 px;">
specific advance-planning interest areas (check all that apply):
<table><tr><td valign="top">
<input type="checkbox" name="CEYHCommMember" value="Yes"> Planning Committee Member
<br>
<input type="checkbox" name="CEYHCommStudents" value="Yes"> Student Program Planning
<br>
<input type="checkbox" name="CEYHCommAdult" value="Yes"> Adult Program Planning
<br>
<input type="checkbox" name="CEYHCommSpeakers" value="Yes"> Presenter/Speaker Coord
<br>
<input type="checkbox" name="CEYHCommDayOf" value="Yes"> Day-of Coordination
</td><td valign="top">
<input type="checkbox" name="CEYHCommPublicity" value="Yes"> Publicity
<br>
<input type="checkbox" name="CEYHCommSchools" value="Yes"> Contacting Schools
<br>
<input type="checkbox" name="CEYHCommYouthOrg" value="Yes"> Contacting Youth Orgs
<br>
<input type="checkbox" name="CEYHCommWeb" value="Yes"> Website
<br>
<input type="checkbox" name="CEYHCommGraphics" value="Yes"> Graphic Design
</td><td valign="top">
<input type="checkbox" name="CEYHCommFundRaising" value="Yes"> Fundraising
<br>
<input type="checkbox" name="CEYHCommLogistics" value="Yes"> Facilities/Logistics
<br>
<input type="checkbox" name="CEYHCommFood" value="Yes"> Food Coordination
<br>
<input type="checkbox" name="CEYHCommOther" value="Yes"> Other (specify):<br><input type="text" name="CEYHCommOtherType" size="30">
</tr></table>
</div>

</td></tr>
-->
<tr><td align="center" bgcolor="#45A1C8">
<B>DAY-OF VOLUNTEERS:</b> (other than presenters)
</td></tr><tr><td>
<input type="checkbox" name="CEYHDayOf" value="DayOfHelp_General"> &nbsp; <B>I'd like to help on the day of EYH</B> (not as presenter).
<div style="margin-left: 30 px;">
preferred task: <input type="checkbox" name="DayOfHelp_Reg" value="Registration"> Registration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="DayOfHelp_Gofer" value="Go-fer"> Go-fer  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="DayOfHelp_Any" value="Any"> Anywhere you can use me
</div>

</td></tr>
<!--
<tr><td align="center" bgcolor="#45A1C8">
<B>STUDENT WORKSHOP PRESENTERS:</b>
</td></tr><tr><td>
<P>
<input type="checkbox" name="Workshop" value="Present"> &nbsp; <B>I would like to do a Student Workshop</B>
<div style="margin-left: 30 px;">
<B>Workshop presenters please note:</b><br>
<div style="margin-left: 10 px;">
<b>Please submit your completed form by December 15</b> in order for your workshop to be included <br>
 in the EYH registration mailing.  A complete list of workshops on the registration mailing has proven <br>
 invaluable in our effort to attract out typical attendance of 200 girls.  Receipt of your form will be <br>
 promptly acknowledged via email - make sure you hear back from us!  Look for your workshop at <br>
 <a href="http://nmnwse.org/ceyh">www.nmnwse.org/ceyh</a>. Workshops are 50 minutes. When entering your scheduling preferences <br>
 below, <b>please allow us as much flexibility as possible</b>.
</div>
<br>
<b>Title for your workshop</b> (something catchy):<br>
&nbsp;&nbsp;<input type="text" name="WorkshopTitle" size="70">
<br>
<br>
<b>Brief description</b>:
<br>
&nbsp;&nbsp;<textarea name="WorkshopDetails" rows="3" cols="70" wrap="Virtual">
</textarea>
<br>
<br>
<b>Requirements</b>:
<div style="margin-left: 10 px;">
 Please enter any special physical requirements or equipment needs for your workshop.<br>
 (AV equipment is  very limited.  Blackboards, overheads, screens are provided.)
<br>
<textarea name="WorkshopNeeds" rows="2" cols="70" wrap="Virtual">
</textarea>
</div>
<br>
<b>Scheduling Preferences:</b>
<div style="margin-left: 10 px;">
<table border=1><tr>
        <td valign="middle" align="center"> 
   </td><td valign="middle" align="center"> <b>Session 1</b>
   </td><td valign="middle" align="center"> <b>Session 2</b>
   </td><td valign="middle" align="center"> <b>Session 3</b>
</td></tr><tr>
        <td valign="middle" align="center"> Start Time
   </td><td valign="middle" align="center"> 9-ish 
   </td><td valign="middle" align="center"> 10-ish 
   </td><td valign="middle" align="center"> 11-ish 
</td></tr><tr> 
        <td valign="middle" align="center"> Are you<br> available?
   </td><td valign="middle" align="center"> <input type="radio" name="Workshop1_Avail" value="Yes">Yes
            &nbsp;/&nbsp; <input type="radio" name="Workshop1_Avail" value="No">No
   </td><td valign="middle" align="center"> <input type="radio" name="Workshop2_Avail" value="Yes">Yes
            &nbsp;/&nbsp; <input type="radio" name="Workshop2_Avail" value="No">No
   </td><td valign="middle" align="center"> <input type="radio" name="Workshop3_Avail" value="Yes">Yes
            &nbsp;/&nbsp; <input type="radio" name="Workshop3_Avail" value="No">No
</td></tr><tr> 
        <td valign="middle" align="center"> # sessions<br> you could do?
   </td><td valign="middle" align="center" colspan=3>
      <input type="radio" name="Workshop_MaxSess" value="1">only 1 session&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="Workshop_MaxSess" value="2">2 sessions&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="Workshop_MaxSess" value="3">all 3 sessions
</td></tr><tr> 
        <td valign="middle" align="center"> Preferred<br> age range?
   </td><td valign="middle" align="center" colspan=3>
      <input type="radio" name="Workshop_Grades" value="Middlw">Middle Sch.&nbsp;&nbsp;
      <input type="radio" name="Workshop_Grades" value="High">High Sch.&nbsp;&nbsp;
      <input type="radio" name="Workshop_Grades" value="Either_DiffSess">Either (diff sess)&nbsp;&nbsp;
      <input type="radio" name="Workshop_Grades" value="Both_SameSess">Both (same sess)
</td></tr><tr> 
        <td valign="middle" align="center"> Preferred<br> class size?
   </td><td valign="middle" align="center" colspan=3>
      <input type="radio" name="Workshop_Size" value="Small">small (<8)&nbsp;&nbsp;&nbsp;
      <input type="radio" name="Workshop_Size" value="Med">medium&nbsp;&nbsp;&nbsp;
      <input type="radio" name="Workshop_Size" value="Large">large (>15)&nbsp;&nbsp;&nbsp;
      Max size:<input type="text" name="WorkshopSizeMax" size="4">


</td></tr></table>
</div>
<br>
<b>Workshop Category:</b>
<br>
Please indicate the field most relevant to your workshop:
<div style="margin-left: 10 px;">
<table><tr><td valign="top">
<input type="radio" name="WorkshopType" value="Archaeology">&nbsp; Archaeology/Anthropology
<br><input type="radio" name="WorkshopType" value="Architecture">&nbsp; Architecture
<br><input type="radio" name="WorkshopType" value="Astronomy">&nbsp; Astronomy/Space Science
<br><input type="radio" name="WorkshopType" value="Biology">&nbsp; Biology
<br><input type="radio" name="WorkshopType" value="Chemistry">&nbsp; Chemistry
<br><input type="radio" name="WorkshopType" value="CivilEng">&nbsp; Civil Engineering
<br><input type="radio" name="WorkshopType" value="ClinicPsych">&nbsp; Clinical Psychology/Counseling
<br><input type="radio" name="WorkshopType" value="CompSci">&nbsp; Computer Science/Engineering
<br><input type="radio" name="WorkshopType" value="Econ">&nbsp; Economics
<br><input type="radio" name="WorkshopType" value="EE">&nbsp; Electrical Engineering
<br><input type="radio" name="WorkshopType" value="Environ">&nbsp; Environment
</td><td valign="top">
<input type="radio" name="WorkshopType" value="AppPsych">&nbsp; Experimental/Applied Psychology
<br><input type="radio" name="WorkshopType" value="Finance">&nbsp; Finance
<br><input type="radio" name="WorkshopType" value="Geol">&nbsp; Geology/Earth Science
<br><input type="radio" name="WorkshopType" value="Law">&nbsp; Law
<br><input type="radio" name="WorkshopType" value="Math">&nbsp; Mathematics
<br><input type="radio" name="WorkshopType" value="MechE">&nbsp; Mechanical Engineering
<br><input type="radio" name="WorkshopType" value="Medicine">&nbsp; Medicine
<br><input type="radio" name="WorkshopType" value="Physics">&nbsp; Physics
<br><input type="radio" name="WorkshopType" value="Vet">&nbsp; Veterinary Medicine
<br><input type="radio" name="WorkshopType" value="Other">&nbsp; Other (please specify)
<br><input type="text" name="WorkshopTypeOther" size="30">
</tr></table>
</div>

</td></tr><tr><td align="center" bgcolor="#45A1C8">
<B>ADULT PROGRAM PRESENTERS:</b>
</td></tr><tr><td>
<input type="checkbox" name="AdultProgram" value="Present"> &nbsp; <B>I would like to make a presentation to the Adult Participants</B>
<p>
<div style="margin-left: 30 px;">
<table><tr><td Valign="top">
<b>Type of presentation:</b>
<br>
<input type="radio" name="AdultProgType" value="EncourinMathSci"> Encouraging students to participate in math and science</B>
<br>
<input type="radio" name="AdultProgType" value="CareerPrep"> Career Preparation--getting the right education and job</B>
</td><td valign="top">
<input type="radio" name="AdultProgType" value="ObtainCollegeFund"> Obtaining college funding
<br>
<input type="radio" name="AdultProgType" value="NonTradCareers"> Non-Traditional Career Choices
<br>
<input type="radio" name="AdultProgType" value="ClassroomDemos"> Science Demos for the Classroom
</td><tr>
<tr><td Valign="top" colspan=2>
<input type="radio" name="AdultProgType" value="Other"> Other:<input type="text" name="AdultProgTypeOther" size="60">
</td></tr></table>
<br>
<B>Presentation details:</b>
Please enter brief description. If you have a catchy title for your presentation,
<br> or have special physical requirements or equipment needs for your workshop, please also enter
<br> that.  (AV equipment is  very limited.  Blackboards, overheads, screens are provided.)
<br>
<textarea name="AdultProgDetails" rows="4" cols="70" wrap="Virtual">
</textarea>
</div>

</td></tr><tr><td align="center" bgcolor="#45A1C8">
<B>KEYNOTE SPEAKER:</b>
</td></tr><tr><td>
<input type="checkbox" name="Keynote" value="Speaker"> &nbsp; <B>I am interested in being or would like to suggest a Keynote Speaker</B>
<div style="margin-left: 30 px;">
please enter topic, and contact information if you are suggesting someone else.
<br>
<textarea name="KeynoteDetails" rows="4" cols="70" wrap="Virtual">
</textarea>
<br>
Note that as the keynote must be selected early, your suggestion may be considered for a<br> future conference rather than the current one.
</div>


</td></tr>
-->
<tr><td align="center" bgcolor="#45A1C8">
<B>OTHER COMMENTS</b>
</td></tr><tr><td>
<B>OTHER COMMENTS:</B>
<div style="margin-left: 30 px;">
Please enter any additional information you wish to provide <br>
<textarea name="AdditionalComments" rows="4" cols="70" wrap="Virtual"></textarea>
</div>
</td></tr><tr><td align="center" bgcolor="#45A1C8">
<B>&nbsp &nbsp</b>
</td></tr></table>
<table border=0 width="100%">
  <tr>
    <td align="left" valign="top">
           <table border=2 bgcolor="red"><tr><td>
              <a href="http://nmnwse.org/ceyh/Forms/volunteer_form.php">
                 <font size="-1" color="white"><B>&nbsp;CLEAR&nbsp;</B></font>
               </a>
           </td></tr></table>
    </td>
    <td align="center"> <font size="+2" color="#33CC00"><B>
       <input type="submit" name="Submit1" value=" SUBMIT FORM" >
<!--
<br>
Do not use <br> for test use only
-->
 <! Submit button removed - form not yet live >
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
PrefContactTime,
Pref_Phone,Pref_Email,Contact_BestType
"> 
<input type="hidden" name="data_order"
value="FirstName,
LastName,
PrefContactTime,
Pref_Phone,
Pref_Email,
Pref_Address,
AltContactTime,
Alt_Phone,
Alt_Email,
Alt_Address,
Contact_BestType,
BadgeInfo,
DayOfHelp_General,
DayOfHelp_Reg,
DayOfHelp_Gofer,
DayOfHelp_Any,
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

<!--
CEYHthisYear,
CEYHsponsor,
CEYHnextYear,
CEYHnoInterest,
EYHlistserv,
CentralEmail,
NMNWSEactivities,
NMNWSElistserv,
NMNWSEmembership,
-->
<!--
CEYHComm,
CEYHCommMember,
CEYHCommStudents,
CEYHCommAdult,
CEYHCommSpeakers,
CEYHCommDayOf,
CEYHCommPublicity,
CEYHCommSchools,
CEYHCommYouthOrg,
CEYHCommWeb,
CEYHCommGraphics,
CEYHCommFundRaising,
CEYHCommLogistics,
CEYHCommFood,
CEYHCommOther,
CEYHCommOtherType,
-->
<!--
Workshop,
WorkshopTitle,
WorkshopDetails,
WorkshopNeeds,
Workshop1_Avail,
Workshop2_Avail,
Workshop3_Avail,
Workshop_MaxSess,
Workshop_Grades,
Workshop_Size,
WorkshopSizeMax,
WorkshopType,
WorkshopTypeOther,
AdultProgram,
AdultProgType,
AdultProgTypeOther,
AdultProgDetails,
Keynote,
KeynoteDetails,
-->
<!--
CEYH Planning c/o Kelly Collins, 7908 Northridge Ave NE, Albuquerque, NM 87109.
-->
