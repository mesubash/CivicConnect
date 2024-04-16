<?php
namespace App\Repositories;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\EloquentRepository;
use App\Models\User;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{

    public function getModel()
    {
        return User::class;
    }
}