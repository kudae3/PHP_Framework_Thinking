
<?php require "Partials/header.php" ?>
    
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

<?php require "Partials/footer.php" ?>
