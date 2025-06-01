<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        div {
            margin: auto;
            text-align: center;
        }
        p {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="everything.css">
</head>
<body>
    <form action="" method="POST">
        <div><label>Username: </label> <input type="text" name="username"></div><br>
        <div><label>Password: </label> <input type="password" name="password"></div><br>
        <div><input type="submit" value="submit"></div>

        <?php
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $pdo = new PDO('sqlite:../sqlite/comments.db');
            $results = $pdo->query("SELECT * FROM users");

            while ($row = $results->fetch()) {
                if ($row['userName'] == $_POST['username'] && $row['passWord'] == $_POST['password']) {
                    $_SESSION['loggedIn'] = 'LoggedIn';
                    $_SESSION['userID'] = $row['id'];
                    header("Location: about.php");
                    die;
                }
            }

            echo "<p>Wrong username or password<p>";
        }
        ?>
    </form>
</body>
</html>
