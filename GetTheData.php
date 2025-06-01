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
    <style>
        h1{
            color: purple;
        }
        #stuff{
            margin: auto;
            text-align: center;
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
		</div>
    <div id="stuff"><br>
    <h1>Get the Data</h1>
    <?php
        $pdo = new PDO(dsn: 'sqlite:../sqlite/characters.db');
        $sql = "SELECT * FROM chr";
        $rows = $pdo->query(query: $sql);
        $found = false;
            foreach ($rows as $row){
                $found = true;
                echo "<h2>" . $row['chrtr'] . "</h2>";
                echo "<p>" . $row['descrip'] . "</p>"."<br>";
                if ($row['id']==2){
                echo "<p>This is the second Character</p><br>";
                }
            }
            if (!$found){
                echo 'No characters found';
            }
            
        echo "All Done";
        ?>
    </div>
</body>
</html>