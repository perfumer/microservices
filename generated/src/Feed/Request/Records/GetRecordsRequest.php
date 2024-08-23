<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class GetRecordsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection;

    /**
     * @var string
     */
    public $sender;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $thread;

    /**
     * @var string
     */
    public $recipient;

    /**
     * @var string
     */
    public $search;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $is_read;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $order_field;

    /**
     * @var string
     */
    public $order_direction;

    /**
     * @var int
     */
    public $id_lt;

    /**
     * @var int
     */
    public $id_le;

    /**
     * @var int
     */
    public $id_gt;

    /**
     * @var int
     */
    public $id_ge;

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
        $array = [];
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->sender instanceof \Perfumer\Microservices\Undefined) {
            $array['sender'] = $this->sender;
        }
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->thread instanceof \Perfumer\Microservices\Undefined) {
            $array['thread'] = $this->thread;
        }
        if (!$this->recipient instanceof \Perfumer\Microservices\Undefined) {
            $array['recipient'] = $this->recipient;
        }
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->order instanceof \Perfumer\Microservices\Undefined) {
            $array['order'] = $this->order;
        }
        if (!$this->is_read instanceof \Perfumer\Microservices\Undefined) {
            $array['is_read'] = $this->is_read;
        }
        if (!$this->limit instanceof \Perfumer\Microservices\Undefined) {
            $array['limit'] = $this->limit;
        }
        if (!$this->offset instanceof \Perfumer\Microservices\Undefined) {
            $array['offset'] = $this->offset;
        }
        if (!$this->count instanceof \Perfumer\Microservices\Undefined) {
            $array['count'] = $this->count;
        }
        if (!$this->order_field instanceof \Perfumer\Microservices\Undefined) {
            $array['order_field'] = $this->order_field;
        }
        if (!$this->order_direction instanceof \Perfumer\Microservices\Undefined) {
            $array['order_direction'] = $this->order_direction;
        }
        if (!$this->id_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['id_lt'] = $this->id_lt;
        }
        if (!$this->id_le instanceof \Perfumer\Microservices\Undefined) {
            $array['id_le'] = $this->id_le;
        }
        if (!$this->id_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['id_gt'] = $this->id_gt;
        }
        if (!$this->id_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['id_ge'] = $this->id_ge;
        }

        return $array;
    }
}
