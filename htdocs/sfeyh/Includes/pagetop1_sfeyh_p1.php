<link rel="stylesheet" href="/sfeyh/Includes/style_sfeyh.css" /> 
</head>

<body leftmargin=10 rightmargin=10 topmargin=5 bottommargin=5 link="black" vlink="#444444" >

<?php
if($_GET['printable'] != 1){
  echo "<img src=\"http://nmnwse.org/sfeyh/Images/sfeyh_top_p1.jpg\" width=100%>";
  include("topbar1_sfeyh.php");
}
else{
  echo "<img src=\"http://nmnwse.org/sfeyh/Images/sfeyh_top_pr.jpg\" width=350 align=\"right\">";
  include("topbar1_sfeyh_pr.php");
}
?>


