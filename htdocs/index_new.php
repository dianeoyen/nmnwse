<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title> NMNWSE New Mexico Network for Women in Science</title>
    <link rel="stylesheet" href="css/style_nmnwse.css">
    <link rel="stylesheet" href="css/nmnwse.css">
  </head>

  <body>
    <header>
      <?php
	 $banner_title = "NMNWSE Home";
	 include("include/pagetop_nmnwse.php");
      ?>
    </header>

  <main>

    <! Sidebar >
    <section>
      <?php include("include/sidebar.php"); ?>
    </section>

    <h3>
	Encouraging women in science, engineering, and allied professions through outreach and networking
    </h3>
    <img src="http://nmnwse.org/Images/bl_pin.gif">
    &nbsp;<a href="http://nmnwse.org/WhoWeAreNMNWSE.pdf">Who We Are</a> trifold brochure
    <hr noshade>

    <!-- featured news here -->

    <!--
	<h2> <a href="http://nmnwse.org/(link)"><font color="#cb6940">Title</font></a>
	</h2>
	Blurb
	<br>&nbsp;
	-->

    <! Supercomputing Challenge >
    <?php include("inNews/201608_news.htm"); ?>

    <h2><img src="http://nmnwse.org/Images/button.gif"> 
      <font color="#cb6940">NMNWSE Has New Mailing Address</font>
    </h2>
    NMNWSE's new address is:<br><b>
      &nbsp;&nbsp;&nbsp;&nbsp;NMNWSE<br>
      &nbsp;&nbsp;&nbsp;&nbsp;PO Box 51926<br>
      &nbsp;&nbsp;&nbsp;&nbsp;Albuquerque, NM 87181 </b><br>

    <! Science fair and SCC >
    <?php include("inNews/201604_news.htm"); ?>

    <h2><img src="http://nmnwse.org/Images/button.gif"> <a href="http://nmnwse.org/eyh"><font color="#cb6940">2016 NMNWSE Expanding Your Horizons (EYH) Conferences</font></a>
    </h2>
    <img src="http://nmnwse.org/Images/gr_dot.gif" height=10>
    &nbsp;Thanks to all who help make the NMNWSE EYH great experiences!

    <! IMPACT! Award >
    <h2><img src="http://nmnwse.org/Images/button.gif"> <a href="http://nmnwse.org/inNews/201510_news.htm"><font color="#cb6940">Laura Crossey selected as the 2015 IMPACT! Award winner</font></a>
    </h2>

    <!-- more news -->
  <P>
    <h2> 
      <img src="http://nmnwse.org/Images/r_hand.gif">&nbsp;
      <a href="http://nmnwse.org/inNews/index.php"><font color="#cb6940">More News</font></a>
    </h2>

  <P>
    <h2>
      <img src="http://nmnwse.org/Images/r_hand.gif">&nbsp;
      <a href="http://nmnwse.org/News.php"><font color="#cb6940">Newsletter Archive</font></a>
    </h2>

  </main>

  <!-- footer -->
  <footer>
    <?php include("Includes/pagebot_nmnwse.php"); ?>
  </footer>
</body>
</html>



