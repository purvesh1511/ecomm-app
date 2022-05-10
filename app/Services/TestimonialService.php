<?php

namespace App\Services;

use App\Models\Testimonial;
use App\Repositories\TestimonialRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class TestimonialService
{
    /**
     * @var $testimonialRepository
     */
    protected $testimonialRepository;

    /**
     * TestimonialService constructor.
     *
     * @param TestimonialRepository $testimonialRepository
     */
    public function __construct(TestimonialRepository $testimonialRepository)
    {
        $this->testimonialRepository = $testimonialRepository;
    }

    /**
     * Delete post by id.
     *
     * @param $id
     * @return String
     */
    public function deleteById($id)
    {
        $result = $this->testimonialRepository->delete($id);
        return $result;

    }

    /**
     * Get all post.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->testimonialRepository->getAll();
    }

    /**
     * Get post by id.
     *
     * @param $id
     * @return String
     */
    public function getById($id)
    {
        return $this->testimonialRepository->getById($id);
    }

    /**
     * Update post data
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function updatePost($data, $id)
    {
        $result = $this->testimonialRepository->update($data, $id);
        return $result;

    }

    /**
     * Validate post data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function savePostData($data)
    {
        $result = $this->testimonialRepository->save($data);
        return $result;
    }

}