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


      <! Science fair >
      <?php 
	 include("inNews/20190407_news.html"); 
	 ?>

      <! Note from NMNWSE President >
      <?php
        include("inNews/20190106_news.html");
        ?>
      
      <! IMPACT Award >
      <?php
        include("inNews/20181124_news.html");
        ?>
      
      <! Annual Meeting Invitation >
      <?php
        include("inNews/20180920_news.html");
        ?>

      <! Supercomputing Challenge >
      <?php
        include("inNews/20180520_news.html");
        ?>
      
      <! AAUW-NM Mission in Action award >
      <?php
        include("inNews/20170503_news.html");
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



