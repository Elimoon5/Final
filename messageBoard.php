<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Message Board</h1>
    <div>
        <?php
            if($_SESSTION["LoggedIn"]){
                echo "User is now logged in";
            }
            else{
                echo "You are not logged in";
            };
        ?>
    </div>
</body>
</html>