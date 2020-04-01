<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>XSS attack </title>
   </head>
   
   <body style="margin-top: 100px;text-align: center;font-family: lato;">
   	<div class="container" style="width: 1300px;border: 1px solid #CCC;border-radius: 2px;margin-left: auto;">
   		<br><br>
   		<div class="header">
   			<img src="cross-site-scripting-xss.jpg" alt="xss attack header" style="width: 80%;">
   			<h1>Cross site scripting</h1>
   		</div>
   		<form action="search.php" method="get" autocomplete="off">
   			<label>what is your name</label>
   			<input type="text" name="query" style="font-size: 24px;width: 500px;">
   			<input type="submit" value="Go" style="font-size: 24px; ">
   		</form>
   		<br><br>
   		<h2><a href = "logout.php">Sign Out</a></h2>
   	</div>
      
      
   </body>
   
</html>