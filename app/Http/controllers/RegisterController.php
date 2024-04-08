<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;

class RegisterController {

    private User $user;

    public function create(): void
    {
        view('register.create');
    }

    public function store(): void
    {
        password_hash();

        if ($this->user) {
            Response::redirect('/jiris');
        } else {
            Response::abort(Response::NOT_FOUND);
        }
    }
}
