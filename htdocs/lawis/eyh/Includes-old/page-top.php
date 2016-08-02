<link rel="stylesheet" href="/lawis/eyh/Includes/style.css" />
</head>
<body leftmargin=0 rightmargin=0 topmargin=0 bottommargin=0>
 
<table cellspacing=0 cellpadding=0>
<tr>
<td class=title width=150>
<a href="/lawis/eyh">
<img src="/lawis/eyh/Includes/eyh_logo.gif" alt="EYH Logo" />
</a>
</td>


<?php
if($_GET['printable'] != 1){
echo "<td class=title align=center width=100%>
<div id=\"title\">
<table border=0 cellpadding=0 cellspacing=0>
<tr><td>
Expanding Your Horizons
</td></tr>
</table></div>
</td>";

include("top_bar.php");
include("sidebar.php");
echo "<td class=main valign=top width=100%><table width=100%><tr><td width=100%>";
echo "<div align=right><a href='?printable=1'>Printable Version</a></div>";
}
else{
echo "<td align=center width=100%>
<div id=\"printable\">
<table border=0 cellpadding=0 cellspacing=0>
<tr class=printableL><td align=center>Expanding Your Horizons</td></tr>
<tr class=printableM><td>Los Alamos Women in Science (LAWIS)</td></tr>
<tr class=printableM><td>http://nmnwse.org/lawis/eyh</td></tr>
</table></div>
</td>";
echo "</tr></table><p>";
}
?>

