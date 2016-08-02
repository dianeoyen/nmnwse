<! ---------- footer -------- >


<?php
if($_GET['printable'] != 1){
echo "</td></tr></table>";
include("footer_sfeyh.php");
}
else{
include("footer_sfeyh_pr.php");
}
?>

<! ---------- end footer -------- >
