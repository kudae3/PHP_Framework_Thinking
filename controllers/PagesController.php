<?php

class PagesController {
    
    public function index(){
        $tasks = App::get('database')->all('task');
        view('index', [
            'tasks' => $tasks
        ]);
    }

    public function about(){
        return view('About');
    }

    public function contact(){
        $users = App::get('database')->all('users');
        view('contact', [
            'users' => $users
        ]);
    }

    public function handleName(){
        App::get('database')->create([
            'name' => $_POST['username'] // Need to be real column name
        ], "users");
        
        header('Location: /contact');
    }

    public function handleTask(){
        App::get('database')->create([
            'description' => $_POST['task'],
            'complete' => false
        ], 'task');
        
        header('Location: /');
    }
}