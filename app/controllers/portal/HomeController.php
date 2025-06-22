<?php

namespace app\controllers\portal;

use app\models\portal\User;

class HomeController {
    public function index(){
        $user = new User;
        $users = $user->all();

        dd($users);
    }

    public function create() {

    }

    public function store() {

    }

    public function show() {

    }

    public function edit($id) {
        
    }
}