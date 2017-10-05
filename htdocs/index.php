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

      <! 2017 Fall Newsletter >
      <?php
        include("inNews/20171005_news.html");
        ?>

      <! 2017 IMPACT! Award >
      <?php
	 include("inNews/20170823_news.html");
	 ?>

      <! 2017 IMPACT! Award >
      <?php
	 include("inNews/20170603_news.html");
	 ?>

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



