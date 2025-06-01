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
	<h1>Fallout Main Characters </h1>
	<div>
		<div id="person1">
			<img id="lucy" src="lucyFallout.jpg" alt="image of Lucy from Fallout" width="350px">
			<p>Ella Purnell stars in Fallout as Lucy, an optimistic inhabitant of Vault 33 who ventures on a personal mission from the security of her underground facility to the unknown dangers of the wasteland above.</p>
		</div>
		<div id="person2">
			<img id="goodguy" src="goodguy.jpg" alt="image of the other good guy" width="350px">
			<p>Knight Maximus is a member of the Brotherhood of Steel in the Fallout TV series. He is one of the three main protagonists, the other two being Lucy and The Ghoul. His birth name is unknown, as the name Maximus was given to him by the Brotherhood.</p>
		</div>
		<div id="person3">
			<img id="evilguy" src="evilguy.jpg" alt="image of the evil dude" width="350px">
			<p>The Ghoul, real name Cooper Howard, is one of the protagonists in the Fallout TV series, the other two being Lucy and Maximus. He worked as a film actor before the Great War of 2077 and was transformed into a ghoul at some point in the years following it. By 2296, he has established a reputation as one of the most fearsome bounty hunters in the west.</p>
		</div>
	</div>
	</body>
</html>