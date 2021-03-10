<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Posts;

class GetPostsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $title = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $author_id = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $is_disabled = null;

    /**
     * @var string
     */
    public $liked_at_from = null;

    /**
     * @var string
     */
    public $liked_at_to = null;

    /**
     * @var string
     */
    public $rated_at_from = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    /**
     * @var int
     */
    public $count = null;

    /**
     * @var string
     */
    public $order_field = null;

    /**
     * @var string
     */
    public $order_direction = null;

    /**
     * @var int
     */
    public $id_lt = null;

    /**
     * @var int
     */
    public $id_le = null;

    /**
     * @var int
     */
    public $id_gt = null;

    /**
     * @var int
     */
    public $id_ge = null;

    public function __construct()
    {
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
        $this->liked_at_from = new \Perfumer\Microservices\Undefined();
        $this->liked_at_to = new \Perfumer\Microservices\Undefined();
        $this->rated_at_from = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
        $this->id_lt = new \Perfumer\Microservices\Undefined();
        $this->id_le = new \Perfumer\Microservices\Undefined();
        $this->id_gt = new \Perfumer\Microservices\Undefined();
        $this->id_ge = new \Perfumer\Microservices\Undefined();
    }
}
