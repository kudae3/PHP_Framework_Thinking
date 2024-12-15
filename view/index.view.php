<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
    <h3>Home Page</h3>
        <?php foreach($tasks as $task): ?>
            <?php 
                if($task->complete){
                    echo "<strike>$task->description</strike>";
                }
                else{
                    echo "<p>$task->description</p>";
                }     
            ?>
        <?php endforeach ?>
    </ul>
</body>
</html>