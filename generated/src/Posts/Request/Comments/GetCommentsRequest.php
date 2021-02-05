<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Comments;

class GetCommentsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $author_id = null;

    /**
     * @var bool
     */
    public $is_removed = null;

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

    public function __construct()
    {
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->is_removed = new \Perfumer\Microservices\Undefined();
        $this->liked_at_from = new \Perfumer\Microservices\Undefined();
        $this->liked_at_to = new \Perfumer\Microservices\Undefined();
        $this->rated_at_from = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
    }
}
