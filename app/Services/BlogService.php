<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BlogRepository;
use App\Services\BaseService;

class BlogService extends BaseService
{
    /**
     * @var $BlogRepository
     */
    protected $BlogRepository;

    public function __construct(BlogRepository $BlogRepository)
    {
        $this->BlogRepository = $BlogRepository;
    }
}