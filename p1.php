<?php
//you need to require the connect.php file on every page so that when you connect to the remote server (in One.com) the browser can read it
require_once('connect.php');

?>

<!DOCTYPE html>
<html>
    
    <head>
			<meta charset="utf-8">
			<title></title>
    </head>
    <body>
    
			<?php $curpage = 'p1.php';?>
			<?php include 'menu.php'; ?>
	
			<h1>Page 1</h1>
			<p>This is page 1</p>
			
			
			<?php require 'footer.php'; ?>
			
			
			
	</body>
</html>