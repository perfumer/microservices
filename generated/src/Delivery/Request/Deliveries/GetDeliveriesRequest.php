<?php

namespace Generated\Perfumer\Microservices\Delivery\Request\Deliveries;

class GetDeliveriesRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var bool
     */
    public $has_email = null;

    /**
     * @var bool
     */
    public $has_sms = null;

    /**
     * @var bool
     */
    public $has_feed = null;

    /**
     * @var string
     */
    public $status = null;

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
        $this->_request_url = '/deliveries';
        $this->_request_method = 'get';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->has_email = new \Perfumer\Microservices\Undefined();
        $this->has_sms = new \Perfumer\Microservices\Undefined();
        $this->has_feed = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
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

    public function getBody(): array
    {
        return [
        'name' => $this->name,
        'has_email' => $this->has_email,
        'has_sms' => $this->has_sms,
        'has_feed' => $this->has_feed,
        'status' => $this->status,
        'limit' => $this->limit,
        'offset' => $this->offset,
        'count' => $this->count,
        'order_field' => $this->order_field,
        'order_direction' => $this->order_direction,
        'id_lt' => $this->id_lt,
        'id_le' => $this->id_le,
        'id_gt' => $this->id_gt,
        'id_ge' => $this->id_ge,
        ];
    }
}
