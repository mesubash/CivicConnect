<?php
namespace App\Repositories;
use App\Repositories\ProfileRepositoryInterface;
use App\Repositories\EloquentRepository;
use App\Models\profiles;

class ProfileRepository extends EloquentRepository implements ProfileRepositoryInterface
{

    public function getModel()
    {
        return profiles::class;
    }
    public function findByUserId($user_id)
    {
        return profiles::where('user_id',$user_id)->get();
    }
}