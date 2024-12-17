<?php

$db->create([
    'name' => $_POST['username'] // Need to be real column name
], "users");

header('Location: /contact');
