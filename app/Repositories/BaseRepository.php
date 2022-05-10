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
        try {
            return $this->modal->all();
        } catch (\Exception $e) {
            log_error($e);
        }
    }
    public function getPaginate()
    {
        try {
            return $this->modal->paginate(15);
        } catch (\Exception $e) {
            log_error($e);
        }
    }
    public function findById($id)
    {
        try {
            return $this->modal->findOrFail($id);
        } catch (\Exception $e) {
            log_error($e);
        }
    }
    public function delete($id)
    {
        try {
            return $this->modal->delete($id);
        } catch (\Exception $e) {
            log_error($e);
        }
    }
}
