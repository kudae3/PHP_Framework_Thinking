<?php

App::get('database')->create([
    'description' => $_POST['task'],
    'complete' => false
], 'task');

header('Location: /');