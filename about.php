<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != 'LoggedIn') {
    echo '<a href="login.php">You are not logged in. Login here</a>';
    exit;
}
?>
<html>
	<head>
		<style>

		</style>
		<link rel="stylesheet" href="everything.css">
	</head>
	<body>
		<div class="nav">
		  	<a href="video.php">videos</a>
			<a href="pictures.php">pictures</a>
			<a href="about.php">About</a>
			<a href="faq.php">faq</a>
			<a href="GetTheData.php">Get The Data</a>
			<a href="messageBoard.php">Message Board</a>
			<a href="addUser.php">add User</a>
			<a href="logout.php">Logout</a>
		</div><br>
		<h1>About Fallout</h1>
		<ol>
			<li class="text">Lucy MacLean</li>
			<li>Maximus</li>
			<li class="text">The Ghoul</li>
			<li>Barb Howard</li>
		</ol>
		<p id="info">
			Fallout is a TV series about a worldwide nuclear war. In this show, Lucy must go out of 
			her pretected bunker to find her captured father. on her adventure, she meets many new friends and 
			learns some valuable lessons.
		</p>
		<p>
		The reason I chose this media is because of how entertaining the show was. I watched the whole season 
		way too fast and was very dissapointed when it ended because I wanted it to continue. There is also a game of Fallout which I also 
		want to play.
		</p>
		<img src="Falloutphoto.jpg" alt="Fallout image" width="350px"> 
		<script>
			
		</script>
	</body>	
</html>
