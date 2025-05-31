<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        margin: auto;
        text-align: center;
    }
</style>
<body>
    <form action="login.php" method="POST">
        <div><lable>UserName: </lable> <input type="text" name="username"></div>
        <div><lable>Password: </lable> <input type="password" name="password"></div>
        <div><input type="submit" value="submit"></div>

        <?php
        if(isset($_POST['username']) && isset($_POST['password'])){
            $login = false;
            $pdo = new PDO(dsn: 'sqlite:../sqlite/users.db');
            $sql = "SELECT * FROM users";
            $un = $_POST['username'];
            $pw = $_POST['password']; 
            $results = $pdo->query(query: $sql);
            foreach($results as $row){
            if(($row['userName'] == $un) && ($row['pass'] == $pw)){
                $login = true;
            };
        }
        if ($login == true){
            echo "Login Successful";
        }else{
             echo "Your attempt to hack this account has been reported to the FBI";
        }
        }
        ?>
    </form>
</body>
</html>