<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class GetRecordsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var string
     */
    public $sender = null;

    /**
     * @var string
     */
    public $user = null;

    /**
     * @var string
     */
    public $thread = null;

    /**
     * @var string
     */
    public $recipient = null;

    /**
     * @var string
     */
    public $search = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    /**
     * @var string
     */
    public $order = null;

    /**
     * @var string
     */
    public $is_read = null;

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
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->sender = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->order = new \Perfumer\Microservices\Undefined();
        $this->is_read = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
        $this->id_lt = new \Perfumer\Microservices\Undefined();
        $this->id_le = new \Perfumer\Microservices\Undefined();
        $this->id_gt = new \Perfumer\Microservices\Undefined();
        $this->id_ge = new \Perfumer\Microservices\Undefined();
    }
}
