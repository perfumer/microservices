<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Signatures;

class GetSignaturesRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $document = null;

    /**
     * @var string
     */
    public $thread = null;

    /**
     * @var string
     */
    public $tag = null;

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
        $this->_request_url = '/signatures';
        $this->_request_method = 'get';
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
        $this->tag = new \Perfumer\Microservices\Undefined();
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
        'document' => $this->document,
        'thread' => $this->thread,
        'tag' => $this->tag,
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
