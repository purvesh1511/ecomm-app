<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;

class BaseService
{
    public $Repository;

    function __construct(BaseRepository $repository) {
        $this->repository = $repository;
    }
    public function getAll()
    {
        return $this->repository->all();
    }

    public function getPaginate()
    {
        return $this->repository->paginate(15);
    }

    public function create(array $data){
        return $this->repository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->repository->update($id,$data);
    }
    
    public function findById($id)
    {
        return $this->repository->findorFail($id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
