<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Post;

class DislikePostRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $rater_id = null;

    /**
     * @var string
     */
    public $post_id = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->rater_id = new \Perfumer\Microservices\Undefined();
        $this->post_id = new \Perfumer\Microservices\Undefined();
    }
}
