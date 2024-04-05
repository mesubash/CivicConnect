<?php
namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\ComplainRepositoryInterface;

class ComplainRepository extends EloquentRepository implements ComplainRepositoryInterface 
{
 
    public function getModel()
    {
        return \App\Models\Complain::class;
    }
   


}