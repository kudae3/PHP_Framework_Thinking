<?php

$db->create([
    'description' => $_POST['task'],
    'complete' => false
], 'task');

header('Location: /');