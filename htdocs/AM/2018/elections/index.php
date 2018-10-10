<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>NMNWSE Elections for Oct 2018-Oct 2019 Board - Online Voting Form</title>
    <link rel="stylesheet" href="../../../css/nmnwse.css">
  </head>

  <body>
    <header>
      <?php
        $banner_title = "NMNWSE Elections for Oct 2018 - Oct 2019 Board";
        include("../../../include/pagetop_nmnwse.php");
        ?>
    </header>

    
    <main>

      <?php
        include("../../../include/sidebar.php");
        ?>

      <form method="post" action="/cgi-bin/formto.pl">
 
        <p>
          <ul>
            <li>
              <a href="notes.php">Voting instructions and notes on alternate methods to vote</a>
            </li>
            <li>
              Online voting opens 3 Oct 2018 and closes 19 Oct 2018.
            </li>
            <li>
              In person voting takes place Saturday, 20 Oct 2018, at the Annual Business Meeting in Albuquerque.
            </li>
            <li>
              <a href="profiles.php">Candidate profiles</a>
            </li>
          </ul>
        </p>

        <p>
          <center>
            <font size="+3" color="red"> <! #33CC00 ><B>
                <!--
                    <img src="http://nmnwse.org/Images/button.gif" height="12">
                    
                    ONLINE VOTING CLOSED
                    -->
                <!--
                    DRAFT - VOTING NOT YET OPEN
                  -->
                
                <img src="http://nmnwse.org/Images/button.gif" height="12">
                <input type="submit" name="Submit1" value=" SUBMIT VOTE">
                <img src="http://nmnwse.org/Images/button.gif" height="12">
                
            </B> </font>
            <!--
                <br> You can instead vote in person at the annual meeting.
                -->
          </center>
        </p>

        <center>
          <IMG SRC="http://nmnwse.org/Images/linefrill.gif" ALT="-----------" HEIGHT=5 WIDTH=30%>
        </center>


        <P>
          <b><sup>*</sup>This form is for:</b> <input type="text" name="Person" size="50">
          (enter your name - see <a href="notes.php">instructions</a>)
        </p>
        
        <P>
          <B><sup>*</sup>Are you currently a member in good standing, or will be by 21 Oct 2018?</B>
          <blockquote>
            <input type="radio" name="Member" value="Yes">Yes&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="Member" value="No">No&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="Member" value="Unsure">Unsure
          </blockquote>
        </p>

        <p>
          <B>Your Votes:</B>
          <br>You may vote for a given person only once, and must select a choice for each declared candidate (including not voting for them). You may vote for only 1 person for each of President, Vice-President, and Treasurer, and up to 5 people for At-Large. Write-in's, as well as volunteers to be "late additions to slate", are very welcome!
        </p>
        <P>
          <table border=1 cellpadding=5>
            <tr><td colspan=7 valign="center" align="center" bgcolor="#ccccff">Board Positions</td><tr>
            <tr>
              <td valign="middle" align="center" rowspan="2">Name</td>
              <td valign="middle" align="center" rowspan="2">Chapter</td>
              <td colspan=4 valign="middle" align="center"> Position</td>
              <td valign="middle" align="center" rowspan="2">not voting<br> for this<br> candidate</td>
            </tr>
            <tr>
              <td valign="middle" align="center" bgcolor="#ccffcc">Pres<br>(Vote for 1)</td>
              <td valign="middle" align="center" bgcolor="#ccffff">VP/P-elect<br>(Vote for 1)</td>
              <td valign="middle" align="center" bgcolor="#ffffcc">Treas<br>(Vote for 1)</td>
              <td valign="middle" align="center" bgcolor="#ffccff">At-Large<br>(Vote for<br>&nbsp;up to 5)</td>
            </tr>
            <tr>
              <td valign="top"><sup>*</sup>Rebecca Galves</td>
              <td valign="top">Southern</td>
              <td valign="top" align="center" bgcolor="#ccffcc"><input type="radio" name="Galves" value="Pres"> </td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center"><input type="radio" name="Galves" value="No"> </td>
            </tr>

            <tr>
              <td valign="top"><sup>*</sup>Nanette Founds</td>
              <td valign="top">Central</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center" bgcolor="#ccffff"><input type="radio" name="Founds" value="VP"> </td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center"><input type="radio" name="Founds" value="No"> </td>
            </tr>

            <tr>
              <td valign="top"><sup>*</sup>Jeanne Banks</td>
              <td valign="top">Central</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center" bgcolor="#ffffcc"><input type="radio" name="Banks" value="Treas"> </td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center"><input type="radio" name="Banks" value="Treas"> </td>
            </tr>
            
            <tr>
              <td valign="top"><sup>*</sup>Tinka Gammel</td>
              <td valign="top">Central</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center" bgcolor="#ffccff"><input type="radio" name="Gammel" value="At-Large"> </td>
              <td valign="top" align="center"><input type="radio" name="Gammel" value="No"> </td>
            </tr>
            
            <tr>
              <td valign="top"><sup>*</sup>Yolanda Jones King</td>
              <td valign="top">Central</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center" bgcolor="#ffccff"><input type="radio" name="King" value="At-Large"> </td>
              <td valign="top" align="center"><input type="radio" name="King" value="No"> </td>
            </tr>

            <tr>
              <td valign="top" colspan=2>Write in No. 1<br>
                <input type="text" name="WriteInName1" size="30">
              </td>
              <td valign="middle" align="center" bgcolor="#ccffcc"><input type="radio" name="WriteInPos1" value="Pres"> </td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <!--
                  <td valign="middle" align="center" bgcolor="#ccffff"><input type="radio" name="WriteInPos1" value="VP"> </td>
              <td valign="middle" align="center" bgcolor="#ffffcc"><input type="radio" name="WriteInPos1" value="Sect"> </td>
              -->
              <td valign="middle" align="center" bgcolor="#ffccff"><input type="radio" name="WriteInPos1" value="At-Large"> </td>
              <td valign="middle" align="center">&nbsp; </td>
            </tr>
            <tr>
              <td valign="top" colspan=2>Write in No. 2<br>
                <input type="text" name="WriteInName2" size="30">
              </td>
              <!--
                  <td valign="middle" align="center" bgcolor="#ccffcc"><input type="radio" name="WriteInPos2" value="Pres"> </td>
                  -->
              <td valign="top" align="center">&nbsp;</td>
              <td valign="middle" align="center" bgcolor="#ccffff"><input type="radio" name="WriteInPos2" value="VP"> </td>
              <td valign="top" align="center">&nbsp;</td>
              <!--
                  <td valign="middle" align="center" bgcolor="#ffffcc"><input type="radio" name="WriteInPos2" value="Sect"> </td>
                  -->
              <td valign="middle" align="center" bgcolor="#ffccff"><input type="radio" name="WriteInPos2" value="At-Large"> </td>
              <td valign="middle" align="center">&nbsp; </td>
            </tr>
            <tr>
              <td valign="top" colspan=2>Write in No. 3<br>
                <input type="text" name="WriteInName3" size="30">
              </td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <!--
                  <td valign="middle" align="center" bgcolor="#ccffcc"><input type="radio" name="WriteInPos3" value="Pres"> </td>
              <td valign="middle" align="center" bgcolor="#ccffff"><input type="radio" name="WriteInPos3" value="VP"> </td>
              -->
              <td valign="middle" align="center" bgcolor="#ffffcc"><input type="radio" name="WriteInPos3" value="Treas"> </td>
              <td valign="middle" align="center" bgcolor="#ffccff"><input type="radio" name="WriteInPos3" value="At-Large"> </td>
              <td valign="middle" align="center">&nbsp; </td>
            </tr>
            <tr>
              <td valign="top" colspan=2>Write in No. 4<br>
                <input type="text" name="WriteInName4" size="30">
              </td>
              <! orange: ffcc66, gr: 99ff99, ccffcc lighter >
              <!--
                  <td valign="middle" align="center" bgcolor="#ccffcc"><input type="radio" name="WriteInPos4" value="Pres"> </td>
              <td valign="middle" align="center" bgcolor="#ccffff"><input type="radio" name="WriteInPos4" value="VP"> </td>
              <td valign="middle" align="center" bgcolor="#ffffcc"><input type="radio" name="WriteInPos4" value="Sect"> </td>
              -->
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="top" align="center">&nbsp;</td>
              <td valign="middle" align="center" bgcolor="#ffccff"><input type="radio" name="WriteInPos4" value="At-Large"> </td>
              <td valign="middle" align="center">&nbsp; </td>
            </tr>
          </table>
        </p>
        
        <p>
          <B>Comments</B>, if any: <br>
          <br>
          <textarea name="Comments" rows="2" cols="75" wrap="Virtual"></textarea> 
          <br>
        </p>


        <p>
          <IMG SRC="http://nmnwse.org/Images/linefrill.gif" ALT="-----------" HEIGHT=5 WIDTH=100%>
          <!--
              <div align="right">
              </div>
              -->
        </p>
        <table border=0 width="100%">
          <tr>
            <td align="left" valign="top">
              <table border=2 bgcolor="red"><tr><td>
                    <a href="http://nmnwse.org/AM/2018/elections/">
                      <font size="-1" color="white"><B>&nbsp;CLEAR&nbsp;</B></font>
                    </a>
                </td></tr>
              </table>
            </td>
            <td align="center"> <font size="+2" color="red"><B>  <! green=#33CC00 >
                  <img src="http://nmnwse.org/Images/button.gif" height="12">
                  
                  <input type="submit" name="Submit1" value="SUBMIT VOTE">
                  
                  <img src="http://nmnwse.org/Images/button.gif" height="12">
                  
                  <!--
                      VOTING CLOSED 
                      <img src="http://nmnwse.org/Images/button.gif" height="12">
                      <br> submit button removed
                      <br>You may vote in person at the Annual Meeting
                      -->
                  <!--
                      DRAFT - VOTING NOT YET OPEN
                    -->
              </B> </font>
              <!-- <br> see top of page for call-in instructions. -->
              <!-- 
                   <br> or by call-in, see <a href="notes.php">notes</a>.
                   <br>VOTING NOT YET OPEN <br> SUBMIT BUTTON FOR TEST PURPOSES ONLY
                   VOTING NOT YET OPEN<br> submit button removed
                   -->
            </td>
            <td align="right" valign="top"> <font size="-1" face="Arial, Helvetica">
                <sup>*</sup>Required Field<br>
                All fields are required<br>except write-ins<br>and comments.
            </font> </td>
          </tr>
        </table>

        
        <!--SCRIPT CONFIGURATION SECTION -->
        <input type="hidden" name="required"
               value="Person,Member,Galves,Founds,Banks,Gammel,King">
        <input type="hidden" name="data_order"
               value="Person,Member,Galves,Founds,Banks,Gammel,King,WriteInName1,WriteInPos1,WriteInName2,WriteInPos2,WriteInName3,WriteInPos3,WriteInName4,WriteInPos4,Comments">
        <input type="hidden" name="submit_to" value="webmaster@nmnwse.org">  <! insert valid later > 
        <input type="hidden" name="form_id" value="Oct 2018 NMNWSE Board Elections - Online Vote"> 
        <input type="hidden" name="ok_url" value="http://nmnwse.org/AM/2018/elections/vote_thanks.htm"> 
        <input type="hidden" name="not_ok_url" value="http://nmnwse.org/AM/2018/elections/vote_tryagain.htm"> 
        <!--END OF SCRIPT CONFIGURATION SECTION -->

      </form>

    </main>

    <footer>

      <?php
        include("../../../include/pagefoot_nmnwse.php");
        ?>
    </footer>
  </body>
</html>
