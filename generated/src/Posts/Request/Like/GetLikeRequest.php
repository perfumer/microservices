<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Like;

class GetLikeRequest extends \Perfumer\Microservices\Request
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

    /**
     * @var string
     */
    public $comment_id = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->rater_id = new \Perfumer\Microservices\Undefined();
        $this->post_id = new \Perfumer\Microservices\Undefined();
        $this->comment_id = new \Perfumer\Microservices\Undefined();
    }
}
