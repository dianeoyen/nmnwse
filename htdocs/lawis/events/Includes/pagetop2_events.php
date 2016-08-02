
<?php
if($_GET['printable'] != 1){
  include("topbar2_events.php");
  echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td>";
  include("sidebar_events.php");
}else{
  include("topbar2_events_pr.php");
}
?>


