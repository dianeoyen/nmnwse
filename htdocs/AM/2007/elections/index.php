<html>
<head>
<title>2008 NMNWSE Board Elections - Online Voting Form</title>
<?php
include("../../../Includes/pagetop1_nmnwse.php");
?>
2008 NMNWSE BOARD ELECTIONS
<br>Online Voting CLOSED
<br>YOU CAN VOTE AT MEETING
<?php
include("../../../Includes/pagetop2_nmnwse.php");
?>

<! --------------- >

<form method="post" action="/cgi-bin/formto.pl">
 
<P><img src="http://nmnwse.org/Images/r_hand.gif">&nbsp;<a href="notes.php">Click here for voting instructions and notes re alternate methods to vote, etc.</a>

<P><img src="http://nmnwse.org/Images/r_hand.gif">&nbsp;<a href="profiles.php">Click here for the candidate profiles.</a>

<P>
<b>This form is for:</b> <input type="text" name="Person" size="50">
(enter your name - see <a href="notes.php">instructions</a>)

<P>
<B>Are you currently a member in good standing, or will be by 27 Oct 2007?</B>
<blockquote>
<input type="radio" name="Member" value="Yes"> &nbsp; Yes<br>
<input type="radio" name="Member" value="No"> &nbsp; No<br>
<input type="radio" name="Member" value="Unsure"> &nbsp; Unsure
</blockquote>

<P>
<B>Your Votes:</B>
<br>You may vote for a given person only once, and must select a choice for each declared candidate (including not voting for them). You may vote for only 1 person for VP, only 1 person for Secretary, and up to 5 people for At-Large - including write-in's. Voting for more than allowed will invalidate your ballot.
<P>
<table border=1 cellpadding=5>
<tr>
<td valign="middle" align="center" rowspan="2">Name</td>
<td valign="middle" align="center" rowspan="2">Chapter</td>
<td colspan=3 valign="middle" align="center"> Position</td>
<td valign="middle" align="center" rowspan="2">not voting<br> for this<br> candidate</td>
</tr><tr>
<td valign="middle" align="center" bgcolor="#ccffff">VP/P-elect<br>(Vote for 1)</td>
<td valign="middle" align="center" bgcolor="#ffffcc">Sect<br>(Vote for 1)</td>
<td valign="middle" align="center" bgcolor="#ffccff">At-Large<br>(Vote for<br>&nbsp;up to 5)</td>
</tr>
<tr>
<td valign="top">Diane Albert</td>
<td valign="top">Central</td>
<td valign="top" align="center" bgcolor="#ccffff"><input type="radio" name="Albert" value="VP"> </td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center" bgcolor="#ffccff"><input type="radio" name="Albert" value="At-Large"> </td>
<td valign="top" align="center"><input type="radio" name="Albert" value="No"> </td>
</tr>
<tr>
<td valign="top">MB</td>
<td valign="top">Southern</td>
<td valign="top" align="center" bgcolor="#ccffff"><input type="radio" name="MB" value="VP"> </td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center" bgcolor="#ffccff"><input type="radio" name="MB" value="At-Large"> </td>
<td valign="top" align="center"><input type="radio" name="MB" value="No"> </td>
</tr>
<tr>
<td valign="top">Claudia Barreto</td>
<td valign="top">Central</td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center" bgcolor="#ffffcc"><input type="radio" name="Barreto" value="Sect"> </td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center"><input type="radio" name="Barreto" value="No"> </td>
</tr>
<tr>
<td valign="top">Wendee Brunish</td>
<td valign="top">Northern</td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center" bgcolor="#ffccff"><input type="radio" name="Brunish" value="At-Large"> </td>
<td valign="top" align="center"><input type="radio" name="Brunish" value="No"> </td>
</tr>
<tr>
<td valign="top">Cheri Burch</td>
<td valign="top">Central</td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center" bgcolor="#ffccff"><input type="radio" name="Burch" value="At-Large"> </td>
<td valign="top" align="center"><input type="radio" name="Burch" value="No"> </td>
</tr>
<tr>
<td valign="top">Jennifer Nisengard</td>
<td valign="top">Northern</td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center" bgcolor="#ffccff"><input type="radio" name="Nisengard" value="At-Large"> </td>
<td valign="top" align="center"><input type="radio" name="Nisengard" value="No"> </td>
</tr>
<tr>
<td valign="top">Megan Richardson</td>
<td valign="top">Southern</td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center">&nbsp;</td>
<td valign="top" align="center" bgcolor="#ffccff"><input type="radio" name="Richardson" value="At-Large"> </td>
<td valign="top" align="center"><input type="radio" name="Richardson" value="No"> </td>
</tr>
<tr>
<td valign="top" colspan=2>Write in No. 1<br>
<input type="text" name="WriteInName1" size="30">
</td>
<td valign="middle" align="center" bgcolor="#ccffff"><input type="radio" name="WriteInPos1" value="VP"> </td>
<td valign="middle" align="center" bgcolor="#ffffcc"><input type="radio" name="WriteInPos1" value="Sect"> </td>
<td valign="middle" align="center" bgcolor="#ffccff"><input type="radio" name="WriteInPos1" value="At-Large"> </td>
<td valign="middle" align="center">&nbsp; </td>
</tr>
<tr>
<td valign="top" colspan=2>Write in No. 2<br>
<input type="text" name="WriteInName2" size="30">
</td>
<td valign="middle" align="center" bgcolor="#ccffff"><input type="radio" name="WriteInPos2" value="VP"> </td>
<td valign="middle" align="center" bgcolor="#ffffcc"><input type="radio" name="WriteInPos2" value="Sect"> </td>
<td valign="middle" align="center" bgcolor="#ffccff"><input type="radio" name="WriteInPos2" value="At-Large"> </td>
<td valign="middle" align="center">&nbsp; </td>
</tr>
<tr>
<td valign="top" colspan=2>Write in No. 3<br>
<input type="text" name="WriteInName3" size="30">
</td>
<td valign="middle" align="center" bgcolor="#ccffff"><input type="radio" name="WriteInPos3" value="VP"> </td>
<td valign="middle" align="center" bgcolor="#ffffcc"><input type="radio" name="WriteInPos3" value="Sect"> </td>
<td valign="middle" align="center" bgcolor="#ffccff"><input type="radio" name="WriteInPos3" value="At-Large"> </td>
<td valign="middle" align="center">&nbsp; </td>
</tr>
<tr>
<td valign="top" colspan=2>Write in No. 4<br>
<input type="text" name="WriteInName4" size="30">
</td>
<td valign="middle" align="center" bgcolor="#ccffff"><input type="radio" name="WriteInPos4" value="VP"> </td>
<td valign="middle" align="center" bgcolor="#ffffcc"><input type="radio" name="WriteInPos4" value="Sect"> </td>
<td valign="middle" align="center" bgcolor="#ffccff"><input type="radio" name="WriteInPos4" value="At-Large"> </td>
<td valign="middle" align="center">&nbsp; </td>
</tr>
</table>

<P>
<B>Comments</B>, if any: <br>
<br>
<textarea name="Comments" rows="2" cols="75" wrap="Virtual"></textarea> 
<br>


<P>
<table border=0 width=100%><tr><td align="left" valign="top">
<a href="profiles.php" target=_blank>Candidate Profiles</a>
<img src="http://nmnwse.org/Images/l_hand.gif">
</td>
<td align="right" valign="top"> <img src="http://nmnwse.org/Images/r_hand.gif"> <a href="profiles.php" target=_blank>Voting Instructions</a></td></tr></table>
<IMG SRC="http://nmnwse.org/Images/linefrill.gif" ALT="-----------" HEIGHT=5 WIDTH=100%>
<div align="right">
</div>
<table border=0 width="100%">
  <tr>
    <td align="left" valign="top">
           <table border=2 bgcolor="red"><tr><td>
              <a href="http://nmnwse.org/AM/2007/elections/">
                 <font size="-1" color="white"><B>&nbsp;CLEAR&nbsp;</B></font>
               </a>
           </td></tr></table>
    </td>
    <td align="center"> <font size="+2" color="#33CC00"><B>
       <! input type="submit" name="Submit1" value=" SUBMIT VOTE">
ONLINE VOTING CLOSED<br>
submit button removed


</B>
</font>
</td>
    <td align="right" valign="top"> <font size="-1" face="Arial, Helvetica">
       All fields are required<br>except write-ins<br>and comments.
    </font> </td>
</tr></table>

<!--SCRIPT CONFIGURATION SECTION -->
<input type="hidden" name="required"
value="Person,Member,Albert,MB,Barreto,Brunish,Burch,Nisengard,Richardson"> 
<input type="hidden" name="data_order"
value="Person,Member,Albert,MB,Barreto,Brunish,Burch,Nisengard,Richardson,WriteInName1,WriteInPos1,WriteInName2,WriteInPos2,WriteInName3,WriteInPos3,WriteInName4,WriteInPos4,Comments">
<input type="hidden" name="submit_to" value="">  <! add later >
<input type="hidden" name="form_id" value="NMNWSE 2008 Elections - Online Vote"> 
<input type="hidden" name="ok_url" value="http://nmnwse.org/AM/2007/elections/vote_thanks.htm"> 
<input type="hidden" name="not_ok_url" value="http://nmnwse.org/AM/2007/elections/vote_tryagain.htm"> 
<!--END OF SCRIPT CONFIGURATION SECTION -->

</form>


<! --------------- >

<?php
include("../../../Includes/pagebot_nmnwse.php");
?>
