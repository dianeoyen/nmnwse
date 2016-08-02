<html>
<head>
<title>Registration: Sponsor-pre</title>
<?php
include("../Includes/page-top.php");
?>

<script language="JavaScript">
/*
    This function is called when
    the 'Submit Registration' button is pressed
    Output : true if all input are correct, false otherwise
*/
function checkForm()
{
    // the variables below are assigned to each
    // form input 
    var gfname, glname;

    with(window.document.regform)
    {
        gfname    = FName;
        glname    = LName;
    }
    


    // if name is empty alert the visitor
    if(trim(gfname.value) == '')
    {
        alert('Please enter your first name');
        if (window.focus) {gfname.focus();}
        return false;
    }
    else if(trim(glname.value) == '')
    {
        alert('Please enter your last name');
        if (window.focus) {glname.focus();}
        return false;
    }
    else 
    {

       // when all input are correct 
       // return true so the form will submit  
       return true;
    }
}

/*
Strip whitespace from the beginning and end of a string
Input  : a string
Output : the trimmed string
*/
function trim(str)
{
    return str.replace(/^\s+|\s+$/g,'');
}

</script>
</head>

<body>
Sponsors: You may use this form to register yourself or update your information.  It will also allow you to register students, if you are bringing any.  Please do not use the 'back button' on your browser during this process.  You will have the opportunity to print a confirmation of registration at the end.  If you are bringing students you will need to print (or write down) the permission slips for the students.<br>   Enter your first and last name, and click 'Continue'.<p>

<form method="post" name="regform" action="sponsor.php">
 <table width="1000" border="0" cellpadding="7" cellspacing="1">
 <tr><td colspan="2">Required fields are marked with *<br><br></td></tr>
 <tr> 
   <td width="100">First Name*</td> 
   <td> 
    <input name="FName" type="text" id="FName" size="30" maxlength="30"></td>
 </tr>
 <tr> 
   <td width="100">Last Name*</td> 
   <td> 
    <input name="LName" type="text" id="LName" size="30" maxlength="30"></td>
 </tr>
  <tr> 
   <td width="100">&nbsp;</td>
   <td>
    <input name="btnSign" type="button" id="btnSign" value="Continue" onClick="if(checkForm()) top.document.regform.submit();"></td>
 </tr>
</table>
</form>
<br>
<br>

<?php
include("reg-help.php");
include("../Includes/page-bot.php");
?>

