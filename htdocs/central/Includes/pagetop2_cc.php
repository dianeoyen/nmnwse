<?php
if($_GET['printable'] != 1){
  include("topbar2_cc.php");
  echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td>";
  include("sidebar_cc.php");
}else{
  include("topbar2_cc_pr.php");
}
?>


