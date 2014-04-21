<html>
<title> Anonymous World </title>
<link rel="stylesheet" href="style.css">
<header class="1">
<img class="logo" src="logoMKIII.png" width = "150" height="75">
<br>
<h1 class="header"> Welcome to Anon: Anonymous World </h1>
<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>
<ul class="navbar">
	<li><a class="nav1" href="index.php">Home</a></li>
	<li><a class="nav2" href="posts.php">Posts</a></li>
	<!--<li><a class="nav3" href="privacy.php">Privacy</a></li>-->
	<li><a class="nav3" href="games.php">Games</a></li>
	<li><a class="nav4" href="about_us.php">About Us</a></li>
</ul>
</header>
<body class="home">
<div class="login">
<?php
if(! ini_get('date.timezone') )
{
	date_default_timezone_set('America/New_York');
}

include 'core.php';
require 'dbconnect.php';

if(loggedin()){
	$firstname = getfield('firstname');
	$surname = getfield('surname');
	$rank = rank($_SESSION['user_name']);
	echo "You are logged in $rank $firstname.";
?>
<form method="link" action="login/logout.php"> 
	<input type="submit" value="Logout Here"></form>
</div>
<br><br>
<div id="div1">
<br><br><br>
<img src="Koala.jpg" height="300" width="400" style="border: 1px black solid; border-radius:10px;">
<h2>Enjoy The Site!</h2>
</div>
<div id="div2">
<div class="friends">
<?php
	friends($here);
?>
</div>
<div class="chat">
<?php
	chat($here);	
?>
</div>
</div>
<!--
<div id="div1">
<br><br><br><br>
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

<a href="upload/">Uploads In Here</a>
<p> Right click "Save Link As..." to save a file from the uploads folder.</p>

</div>
-->
<div class="loginform">
<?php
}
else{
	include 'login/login_form.php';
	echo '</div><br><br><h2 class="SecondHeader"style ="text-align:center;"> Please login to view this page. </h2>';
}
?>
</div>
</body>
</html>
