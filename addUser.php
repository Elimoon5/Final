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
</head>
<style>
    label{
        font-size: 1.5em;
    }
    div{
        margin: auto;
        width: 50%;
    }
</style>
<link rel="stylesheet" href="everything.css">
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
    <form action="addUser.php" method="POST">
        <h1></h1><br><br>
        <label>New User: </label> <input type="text" name="username">
        <label>New Password: </label> <input type="text" name="password">
        <input type="submit" value="submit">
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pdo = new PDO('sqlite:../sqlite/comments.db');
            $un = $_POST['username'];
            $pw = $_POST['password'];
            $sql = "SELECT * FROM users WHERE username = '$un'";
            $result = $pdo->query($sql);
            if($result && $result->fetch()) {
                echo "User already exists.";
            }
            else{
                $insert = "INSERT INTO users (username, password) VALUES ('$un', '$pw')";
                    if ($pdo->exec($insert)) {
                        echo "New user added.";
                    } else {
                        echo "Error adding user.";
                    }
            }
        }
        ?>
    </div>
    </form>
</body>
</html>