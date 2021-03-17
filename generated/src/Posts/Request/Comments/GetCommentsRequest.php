<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Comments;

class GetCommentsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $post_id = null;

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
     * @var string
     */
    public $rater_id = null;

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
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->post_id = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->is_removed = new \Perfumer\Microservices\Undefined();
        $this->liked_at_from = new \Perfumer\Microservices\Undefined();
        $this->liked_at_to = new \Perfumer\Microservices\Undefined();
        $this->rated_at_from = new \Perfumer\Microservices\Undefined();
        $this->rater_id = new \Perfumer\Microservices\Undefined();
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
