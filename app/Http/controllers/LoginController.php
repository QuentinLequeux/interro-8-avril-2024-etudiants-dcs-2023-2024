<?php

namespace App\Http\Controllers;

use App\Models\User;
use Core\Exceptions\FileNotFoundException;
use http\Env\Response;

class LoginController {

    private User $user;

    public function __construct()
    {
        try {
            $this->user = new User(base_path('.env.local.ini'));
        } catch (FileNotFoundException $exception) {
            die($exception->getMessage());
        }
    }

    public function create(): void
    {
        view('register.create');
    }

    public function store(): void
    {


        if ($this->user) {
            Response::redirect('/jiris');
        } else {
            Response::abort(Response::NOT_FOUND);
        }
    }
}
