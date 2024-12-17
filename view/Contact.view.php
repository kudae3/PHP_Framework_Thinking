<?php require "Partials/header.php" ?>
    <h3>Contact Page</h3>

    <h4>Users</h4>
    <?php foreach($users as $user): ?>
        <li>
            <?php echo $user->name ?>
        </li>
    <?php endforeach; ?>

    <form action="/name" method="post">
        <input type="text" name="username" id="">
        <button type="submit">Submit</button>
    </form>
<?php require "Partials/footer.php" ?>
