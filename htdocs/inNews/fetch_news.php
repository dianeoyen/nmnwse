<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title> NMNWSE News </title>
    <link rel="stylesheet" href="../css/nmnwse.css">
  </head>

  <body>
    <header>
      <?php
	 $banner_title = "NMNWSE News";
	 include("../include/pagetop_nmnwse.php");
	 ?>
    </header>

    <main>

    <?php
        include($news_item);
        ?>

    </main>

    <!-- footer -->
    <footer>
      <?php
	 include("../include/pagefoot_nmnwse.php");
	 ?>
    </footer>

  </body>
</html>
