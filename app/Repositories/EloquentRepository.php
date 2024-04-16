<?php
namespace App\Repositories;
use App\Repositories\RepositoryInterface;
abstract class EloquentRepository implements RepositoryInterface
{
   protected $model;

   public function __construct()
   {
      $this->setModel();
   }

  abstract public function getModel();
   
  public function setModel()
  {
   $this->model=app()->make($this->getModel());
  }

  public function create(array $arrtibutes)
  {
   $this->model->create($arrtibutes);
  }
  public function find($id)
  {
      $result=$this->model->find($id);
      if($result)
      {
         $this->model=$result;
      }
      return $result;
  }
}