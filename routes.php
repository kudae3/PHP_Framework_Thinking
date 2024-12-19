<?php

use controllers\PagesController;

Router::get('', [PagesController::class, 'index']);
Router::get('about', [PagesController::class, 'about']);
Router::get('contact', [PagesController::class, 'contact']);
Router::post('name', [PagesController::class, 'handleName']);
Router::post('task', [PagesController::class, 'handleTask']);





