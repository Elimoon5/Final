<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != 'LoggedIn') {
    echo '<a href="login.php">You are not logged in. Login here</a>';
    exit;
}
?>
<html>
	<style>

	</style>
		<link rel="stylesheet" href="../Final/everything.css">
	<head>
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
	<div>
	<h1>Videos</h1>
		<div>
			<label id="dropdown" for="falloutvids">Choose a video:</label>
			<select name="vids" id="vids">
			  <option value="vid1">Fallout Trailer</option>
			  <option value="vid2">Opening Scene</option>
			  <option value="vid3">Fallout Funny Clips</option>
			</select><br>
			<iframe id="trailer" width="300" height="200" src="https://www.youtube.com/embed/V-mugKDQDlg?si=ylL15wAs2iwH097s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			<iframe id="openingscene" width="300" height="200" src="https://www.youtube.com/embed/hJjIf7nwx6U?si=DlORBdOQ5b3thBuO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			<iframe id="funnyclips" width="300" height="200" src="https://www.youtube.com/embed/sCHRqYGLNDU?si=xc4ec-HVUQVIfbkb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
	</div>
		<script>
			function showVid() {
				document.getElementById("vid1").style.display = "none";
				document.getElementById("vid2").style.display = "none";
				document.getElementById("vid3").style.display = "none";

				var selectedVideo = document.getElementById("vids").value;

				if (selectedVideo) {
					document.getElementById(selectedVideo).style.display = "block";
				}
			}
		</script>
	</body>
</html>