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
</head>
<body>
   
    <div id="stuff">
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