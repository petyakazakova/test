<?php
//this is a link to the connect.php file while actually makes the connection to the remote server - while makes it able to put a real http link
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
	  //find current filename with $_SERVER superglobal - we need that because this is how we know the current file (page in our case) and after we know that - we do the styling with CSS to make it clear which page is active
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