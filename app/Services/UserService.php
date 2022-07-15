<?php

namespace App\Services;

use App\RepositoryInterfaces\IUserRepository;
use App\User;

class UserService
{
    private $userRepo;

    public function __construct(IUserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }



    public function index()
    {
        return $this->userRepo->usersByName();
    }
}
