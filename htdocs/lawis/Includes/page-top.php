<link rel="stylesheet" href="/lawis/Includes/style.css" />
</head>
<body leftmargin=0 rightmargin=0 topmargin=0 bottommargin=0>
 
<table cellspacing=0 cellpadding=0 border=0>
<tr>
<?php
if($_GET['printable'] != 1){
echo "<td width=150 class=titlep>";
}else{
echo "<td width=150 class=printableM>";
}
?>
<img src="/lawis/Logos/LAWIS4a_mud.gif" border=0 class="decoration" />
</td>


<?php
if($_GET['printable'] != 1){


echo "<td class=title align=center width=100% >
<div id=\"title\">
<table border=0 cellpadding=0 cellspacing=0 class=title>
<tr><td class=title align=center>
<! ---- web version ----- >
<h2>Los Alamos Women in Science</h2>
<font size=-1>
<I>Northern Chapter of the
<br>
<a href=\"http://nmnwse.org\">New Mexico Network for
Women in Science and Engineering</a></I>
<br>P.O. Box Box 564,
Los Alamos, NM 87544
</font>

</td>
</tr>
</table></div>
</td>
<td align=right class=titlep><img src=\"/lawis/Logos/NMNWSE4a_mud.gif\" border=0 class=\"decoration\" /> 
</td>
</tr>";

include("top_bar.php");
include("sidebar.php");
echo "<td valign=top width=100% colspan=2><table width=100%><tr><td width=100% class=main>";
echo "<div align=right>&nbsp;</div>";

}
else{


echo "<td align=center width=100%>
<div id=\"printable\">
<table border=0 cellpadding=0 cellspacing=0>
<! ---- print version ----- >
<tr class=printableM><td align=center>Los Alamos Women in Science
<br>
http://nmnwse.org/lawis
</td></tr><tr class=printableM><td align=center>
<font size=-1>
P.O. Box Box 564,
Los Alamos, NM 87544
<br><br><I>Northern Chapter of the
<br>
<a href=\"http://nmnwse.org\">New Mexico Network for
Women in Science and Engineering</a></I>
</font>
</td></tr>
</table></div>
</td>
<td align=right class=printableM><img src=\"/lawis/Logos/NMNWSE4a_mud.gif\" border=0 class=\"decoration\" /> 
</td>";
echo "</tr></table><p>";


}
?>

