<?php
require_once('connect.php');

?>



<!DOCTYPE html>
<html>
    
    <head>
			<meta charset="utf-8">
			<title>PHP includes</title>
            <link rel="stylesheet" href="menu.css" type="text/css">
    </head>
    <body>

      <?php
	  //find current filename with $_SERVER superglobal
      $curpage = basename($_SERVER['PHP_SELF']);
      ?>
					
		<ul>
        	<!-- set current page 'active' -->
			<li><a href="p1.php" <?php if($curpage == 'p1.php') {echo 'class="active"'; } ?>>Page 1</a></li>	
			<li><a href="p2.php" <?php if($curpage == 'p2.php') {echo 'class="active"'; } ?>>Page 2</a></li>
			<li><a href="p3.php" <?php if($curpage == 'p3.php') {echo 'class="active"'; } ?>>Page 3</a></li>
			<li><a href="p4.php" <?php if($curpage == 'p4.php') {echo 'class="active"'; } ?>>Page 4</a></li>
		</ul>
		
	</body>
</html>
