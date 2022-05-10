<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    public $model;
    function __construct(Model $modal) {
        $this->modal = $modal;
    }
    public function getAll()
    {
        return $this->model->all();
    }

    public function getPaginate()
    {
        return $this->modal->paginate(15);
    }

    public function create(array $data){
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        return $this->model->find($id)->update($data);
    }
    
    public function findById($id)
    {
        return $this->model->findorFail($id);
    }

    public function delete($id)
    {
        return $this->modal->delete($id);
    }
}
