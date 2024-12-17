<?php
    
    $tasks = $db->all('task');
    require "view/index.view.php";