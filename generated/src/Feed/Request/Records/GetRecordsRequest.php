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
        $this->_request_url = '/records';
        $this->_request_method = 'get';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->sender = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->order = new \Perfumer\Microservices\Undefined();
        $this->is_read = new \Perfumer\Microservices\Undefined();
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
        'collection' => $this->collection,
        'sender' => $this->sender,
        'user' => $this->user,
        'thread' => $this->thread,
        'recipient' => $this->recipient,
        'search' => $this->search,
        'id' => $this->id,
        'order' => $this->order,
        'is_read' => $this->is_read,
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
