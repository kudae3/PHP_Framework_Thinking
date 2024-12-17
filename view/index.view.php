
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

<h3>Create New Todo</h3>
<form action="task" method="post">
    <input type="text" name="task" id="">
    <button type="submit">Add</button>
</form>

<?php require "Partials/footer.php" ?>
