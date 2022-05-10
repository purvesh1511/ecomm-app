<?php

namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialRepository
{
    /**
     * @var Post
     */
    protected $testimonial;

    /**
     * TestimonialRepository constructor.
     *
     * @param Post $testimonial
     */
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    /**
     * Get all posts.
     *
     * @return Testimonial $testimonial
     */
    public function getAll()
    {
        return $this->testimonial->get();
    }

    /**
     * Get post by id
     *
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->testimonial->where('id', $id)->get();
    }

    /**
     * Save Post
     *
     * @param $data
     * @return Post
     */
    public function save($data)
    {
        $post = $this->testimonial->create($data);
        return $post;
    }

    /**
     * Update Post
     *
     * @param $data
     * @return Post
     */
    public function update($data, $id)
    {
        $post = $this->testimonial->find($id);
        $post->update($data);
        return $post;
    }

    /**
     * Update Post
     *
     * @param $data
     * @return Post
     */
    public function delete($id)
    {
        $post = $this->post->find($id);
        $post->delete();
        return $post;
    }

}