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
		body{
			font-size: 30px;
		}
		.nav {
			font-size: 16px;
		}
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
	<ol>
		<li><a href="#canon">Is the Fallout TV show canon?</a></li>
		<li><a href="#bombs">Who dropped the bombs?</a></li>
		<li><a href="#ghouls">What are ghouls?</a></li>
		<li><a href="#shady">What happened to Shady Sands?</a></li>
		<li><a href="#vault">What’s the story with Vault 31 and Vault 32?</a></li>
		<li><a href="#level">What happens in Vault 4, level 12?</a></li>
		<li><a href="#neck">What is in Dr. Wilzig’s neck?</a></li>
		<li><a href="#shoe">Did Maximus booby trap the shoe?</a></li>
		<li><a href="#ending">What happens in the Fallout ending?</a></li>
		<li><a href="#season">Will there be a Fallout season 2?</a></li>
	</ol>
	
	
	
	
	<h3 id="canon">Is the Fallout TV show canon?</h3>
	<p>The first question a lot of people want to know is whether or not Fallout is canon. In other words, does it relate to events from the show? The answer, emphatically, is yes. In December, Fallout producer Graham Wagner told IGN, “We kind of told ourselves, this is Fallout 5, this is just another installation, and we're starting with fresh snow."</p>
	<h3 id="bombs">Who dropped the bombs?</h3>
	<p>Fallout is mostly set in the aftermath of a nuclear war. But how did it start, and who dropped the bombs? In episode eight, we have our answer: Vault-Tec. During a flashback, Walton Goggins’ Cooper eavesdrops on a meeting in which Vault-Tec bigwigs discuss nuking the world in order to sell places in their vaults.</p>
	<h3 id="ghouls">What are ghouls?</h3>
	<p>There’s both a practical and a philosophical answer to the question ‘what are ghouls?’ Practically, ghouls are humans who’ve been exposed to huge levels of radiation, and become feral if not dosed with drugs. Philosophically, there’s a human still in there, desperately trying to fend off their cannibalistic urges.</p>
	<h3 id="shady">What happened to Shady Sands?</h3>
	<p>Shady Sands is a town in The New California Republic, set up after the initial waves of bombs dropped. Once home to 34,000 people, it was wiped up by another wave of bombing. Lucy discovers a homage to the vast enclave in episode five, and starts to question her identity as a Vault Dweller tasked with repopulating a supposedly barren world.</p>
	<h3 id="vault">What’s the story with Vault 31 and Vault 32?</h3>
	<p>Vault 31 and Vault 32 form a mutually beneficial society with Vault 33. However, in episode eight, Norm discovers thousands of Vault-Tec executives frozen deep within Vault 31. They’re loyal Vault-Tec employees who are soon going to thaw out and take over the vaults.</p>
	<h3 id="level">What happens in Vault 4, level 12?</h3>
	<p>In Fallout, every vault is different. They’re not so much shelters for humanity to survive in but testing grounds in which Vault-Tec conduct ghastly science experiments. The overseer of Vault 4 warns Lucy not to visit level 12, but she ignores him and discovers humans are being bred with irradiated animals.</p>
	<h3 id="neck">What is in Dr. Wilzig’s neck?</h3>
	<p>Dr. Wilzig injects himself with a weird, glowing microchip in episode two. Apparently, it’s vitally important, because he asks Lucy to sever his head and deliver it to Moldaver. In episode eight, we finally learn what that microchip is: a cold fusion device able to power up the entire state.</p>
	<h3 id="shoe">Did Maximus booby trap the shoe?</h3>
	<p>In episode one, Brotherhood of Steel member Dane suffers a debilitating injury when she puts her foot in a shoe rigged with a spring-loaded knife. Fingers point to Maximus, who initially looks guilty. However, it’s revealed Dane inflicted the injury on herself to avoid getting sent on a mission.</p>
	<h3 id="ending">What happens in the Fallout ending?</h3>
	<p>In the eighth and final episode of Fallout, Lucy finally finds her father, Hank, who’s revealed to have dropped the bomb on Shady Sands and turned his wife - Lucy’s mother - into a ghoul. Moldaver gets the chip from Dr. Wilzig’s neck and restores power, while Hank flees to New Vegas in a suit of power armor. The Ghoul and Lucy give chase.</p>
	<h3 id="season">Will there be a Fallout season 2?</h3>
	<p>Prime Video will almost certainly follow-up Fallout with a second season, given its critical success (94% on Rotten Tomatoes). Also, a Fallout season 2 potential filming location was revealed when news broke it was offered a $25 million tax credit to film in California.
	Finally, as Wagner tells SFX, "There’s piles and piles of stuff we want to do. We wanted to slow our roll and not do it all in eight episodes, because we’re talking about thousands of hours of gameplay."</p>
			

	</body>
</html>