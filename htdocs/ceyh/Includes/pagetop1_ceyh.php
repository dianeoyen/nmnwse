<link rel="stylesheet" href="/ceyh/Includes/style_ceyh.css" /> 
</head>

<body leftmargin=10 rightmargin=10 topmargin=5 bottommargin=5 link="black" vlink="#444444" >

<?php
if($_GET['printable'] != 1){
  echo "<img src=\"http://nmnwse.org/ceyh/Images/ceyh_top.jpg\" width=100%>";
  include("topbar1_ceyh.php");
}
else{
  echo "<img src=\"http://nmnwse.org/ceyh/Images/ceyh_top_pr.jpg\" width=350 align=\"right\">";
  include("topbar1_ceyh_pr.php");
}
?>


