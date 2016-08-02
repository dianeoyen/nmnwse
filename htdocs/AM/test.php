<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

 <p>Hello World</p>

 </body>
</html>


<P> PHPINFO
<p>
<?php phpinfo(); ?>

<P> SERVER
<p>
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<P> DATE?<br>
<?php
$thisyearsdate='2010';
echo "this years date {$thisyearsdate}";
?>
<br>
<?php
echo "this years date {$thisyearsdate}";
?>
<br>
<?php
echo "go to <a href=\"http://nmnwse.org/AM/{$thisyearsdate}\">AM {$thisyearsdate}</a> try";
?>


 </body>
</html>


