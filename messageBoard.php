<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != 'LoggedIn') {
    echo '<a href="login.php">You are not logged in. Login here</a>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Message Board</h1>
    <div>
    <?php
        if (isset($_SESSION['loggedIn'])) {
            $pdo = new PDO('sqlite:../sqlite/comments.db');
            $userId = $_SESSION['userID'];
            $results = $pdo->query("SELECT msg FROM msgs WHERE userID = $userId");
            
            foreach ($results as $row) {
                echo "<p>" . $row['msg'] . "</p>"; 
            }
        } else {
            echo "You are not logged in.";
        }
    ?>
    </div>
</body>
</html>