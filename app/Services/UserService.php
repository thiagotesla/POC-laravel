<?php

namespace App\Services;

use App\User;

class UserService
{
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        $users=User::all()->sortBy('title');
        return $users;
    }
}
