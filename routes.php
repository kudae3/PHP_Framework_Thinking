<?php

Router::get('', ['PagesController', 'index']);
Router::get('about', ['PagesController', 'about']);
Router::get('contact', ['PagesController', 'contact']);
Router::post('name', ['PagesController', 'handleName']);
Router::post('task', ['PagesController', 'handleTask']);





