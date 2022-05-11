<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class BlogRepository extends BaseRepository
{
    public function __construct(Blog $model)
    {
        parent::__construct($model);
    }
}