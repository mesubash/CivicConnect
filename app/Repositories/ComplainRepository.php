<?php
namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\ComplainRepositoryInterface;
use App\Models\Complain;

class ComplainRepository extends EloquentRepository implements ComplainRepositoryInterface 
{
 
    public function getModel()
    {
        return \App\Models\Complain::class;
    }
    public function findByComplainId($complain_id)
    {
        return Complain::where('complain_id', $complain_id)->get();
    }
}