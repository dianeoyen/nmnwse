<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title> NMNWSE New Mexico Network for Women in Science</title>
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
      
      <! NAV >
      <?php 
	 include("include/sidebar.php"); 
	 ?>

      <p class="mission">
	Encouraging women in science, engineering, and allied professions through outreach and networking
      </p>

      <p class="note">
	<a href="http://nmnwse.org/WhoWeAreNMNWSE.pdf">Who We Are</a> trifold brochure
      </p>

      <hr noshade>
      <!-- featured news here -->
      <!-- format:
	   <h2> News title </h2>
	   <p>
	     blurb
	   </p>
      -->

      <! AAUW-NM Mission in Action award >
      <?php
        include("inNews/20170503_news.html");
        ?>

      <! Supercomputing Challenge >
      <?php
        include("inNews/20170425_news.html");
        ?>

      <! Science fair >
      <?php 
	 include("inNews/201704_news.html"); 
	 ?>

      <! 2016 Impact! Award >
      <?php
	 include("inNews/201612_news.html");
	 ?>

      <h2>NMNWSE Has New Mailing Address</h2>
      <p>
	NMNWSE's new address is:<br><b>
	  &nbsp;&nbsp;&nbsp;&nbsp;NMNWSE<br>
	  &nbsp;&nbsp;&nbsp;&nbsp;PO Box 51926<br>
	  &nbsp;&nbsp;&nbsp;&nbsp;Albuquerque, NM 87181 </b><br>
      </p>

      <!-- more news -->
      <a href="http://nmnwse.org/inNews/index.php"><h2>More News</h2></a>

    </main>
    
    <!-- footer -->
    <footer>
      <?php 
	 include("include/pagefoot_nmnwse.php"); 
	 ?>
    </footer>

  </body>
</html>



