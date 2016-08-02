<html>
<head>
<title>Registration: Student-pre</title>
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
        gfname    = SFName;
        glname    = SLName;
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

function newHttpRequest () {
        var http_request = false;

        if (window.XMLHttpRequest) {
                http_request = new XMLHttpRequest();
                if (http_request.overrideMimeType) {
                        http_request.overrideMimeType('text/xml');
                }
        } else if (window.ActiveXObject) {
                try {
                        http_request = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                        try {
                                http_request = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {}
                }
        }

        if (!http_request) {
                window.alert("Your browser is not supported by this application. To perform this operation, you will need to use a relatively modern version of Internet Explorer, Firefox, Safari, or other common web browser.");
        }

        return http_request;
} 

function checkStudent(SFName,SLName) {
        var http_request = newHttpRequest();
        if (!http_request) return;

        http_request.open('POST', 'http://nmnwse.org/lawis/eyh/registration/chkstudent.php', false);
        http_request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        http_request.send('SFName=' + SFName+'&SLName='+SLName);

        // Make sure we got a good response
        if (http_request.status != 200) {
                window.alert('There was a problem with the request.');
                return;
        }

        // Parse out the resource node information
        var response = http_request.responseText;
    // Use http_request.responseXML to get an XML doc instead of plain text, if you want

    // do something with response - check for true or false based on results of database check
	//alert("response is"+response);
	if(response==0)
	{
		alert("\""+SFName+" "+SLName+"\" cannot be found in the registration records.  Please make sure your sposor has registered you and then try again.  If you are sure your sponsor has registered you, make sure your name is spelled correctly or try to enter your first name without nicknames.");
		return false;
	}
	else if(response==1)
	{
		//alert("one!");
		return true;
	}
	else
	{
		alert("There is a problem with uniqueness in the registration records.  Please report this error.");
		return false;
	}
} 

</script>

</head>

<body>
Students: Your adult sponsor must register you first.  You can use this form to check if you have been registered.  Enter your first and last name, and click 'Check Registration'.  Your name must match the name your sponsor used when registering you.<p>

<form method="post" name="regform" action="student.php">
 <table width="1000" border="0" cellpadding="7" cellspacing="1">
 <tr><td colspan="2">Required fields are marked with *<br><br></td></tr>
 <tr> 
   <td width="100">First Name*</td> 
   <td> 
    <input name="SFName" type="text" id="SFName" size="30" maxlength="30"></td>
 </tr>
 <tr> 
   <td width="100">Last Name*</td> 
   <td> 
    <input name="SLName" type="text" id="SLName" size="30" maxlength="30"></td>
 </tr>
  <tr> 
   <td width="100">&nbsp;</td>
   <td>
    <input name="btnSign" type="button" id="btnSign" value="Check Registration" onClick="if(checkForm()&&checkStudent(top.document.regform.SFName.value,top.document.regform.SLName.value)) top.document.regform.submit();"></td>
 </tr>
</table>
</form>
<br>
<br>

<?php
include("reg-help.php");
include("../Includes/page-bot.php");
?>

