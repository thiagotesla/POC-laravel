<?php

namespace App\Repositories;

use App\User;
use App\RepositoryInterfaces\IUserRepository;

class UserRepository implements IUserRepository
{
    public function usersByName()
    {
        return User::all()->sortBy('name');
    }
}
