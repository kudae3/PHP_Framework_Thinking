<?php
    
    $tasks = App::get('database')->all('task');
    view('index', [
        'tasks' => $tasks
    ]);