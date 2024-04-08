<?php
namespace App\Repositories;
interface RepositoryInterface{
    
    public function create(array $attributes);
    
    public function getModel();
    
    public function setModel();

    public function findOrfail($id);
}