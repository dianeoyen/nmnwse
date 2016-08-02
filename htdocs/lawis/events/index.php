<html>
<head>
  <title>LAWIS Events - Main</title>

<?php
include("Includes/pagetop_events.php");
?>

<! ---------- main content -------- >

<?php
if($_GET['printable'] != 1){ 
echo"<font size=\"-1\">(for events of other organizations, see the <a href=\"events_other.php\">Other Events</a> link in the sidebar)";
}
?>

<?php
include("events_lawis_details.htm");
?>

<! ---------- end main content -------- >

<?php
include("Includes/pagebot_events.php");
?>

<! -------------- end ----------------- >
