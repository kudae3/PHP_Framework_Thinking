<?php

$users = App::get('database')->all('users');
view('contact', [
    'users' => $users
]);