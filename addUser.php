<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    lable{
        font-size: 1.5em;
    }
    div{
        margin: auto;
        width: 50%;
    }
</style>
<body>
    <form action="addUser.php" method="POST">
        <h1></h1>
        <lable>New User: </lable> <input type="text" name="username">
        <lable>New Password: </lable> <input type="text" name="password">
        <input type="submit" value="submit">
    <div>
        <?php
            $pdo = new PDO(dsn: 'sqlite:../sqlite/comments.db');
            $sql_users = "SELECT * FROM users";
            $sql_msgs = "SELECT * FROM msgs";
            $un = $_POST['username'];
            $pw = $_POST['password'];
            $results = $pdo->query(query: $sql);
        ?>
    </div>
    </form>
</body>
</html>