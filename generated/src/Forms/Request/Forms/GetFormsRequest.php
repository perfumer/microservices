<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Forms;

class GetFormsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $customer_id = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var int
     */
    public $ticket_id = null;

    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var array
     */
    public $fields = [
    ];

    /**
     * @var string
     */
    public $tag = null;

    /**
     * @var string
     */
    public $formatting = null;

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
    public $id = null;

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

    /**
     * @var string
     */
    public $created_at_le = null;

    /**
     * @var string
     */
    public $created_at_lt = null;

    /**
     * @var string
     */
    public $created_at_ge = null;

    /**
     * @var string
     */
    public $created_at_gt = null;

    public function __construct()
    {
        $this->_request_url = '/forms';
        $this->_request_method = 'get';
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->fields = new \Perfumer\Microservices\Undefined();
        $this->tag = new \Perfumer\Microservices\Undefined();
        $this->formatting = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->id_lt = new \Perfumer\Microservices\Undefined();
        $this->id_le = new \Perfumer\Microservices\Undefined();
        $this->id_gt = new \Perfumer\Microservices\Undefined();
        $this->id_ge = new \Perfumer\Microservices\Undefined();
        $this->created_at_le = new \Perfumer\Microservices\Undefined();
        $this->created_at_lt = new \Perfumer\Microservices\Undefined();
        $this->created_at_ge = new \Perfumer\Microservices\Undefined();
        $this->created_at_gt = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->ticket_id instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_id'] = $this->ticket_id;
        }
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->fields instanceof \Perfumer\Microservices\Undefined) {
            $array['fields'] = $this->fields;
        }
        if (!$this->tag instanceof \Perfumer\Microservices\Undefined) {
            $array['tag'] = $this->tag;
        }
        if (!$this->formatting instanceof \Perfumer\Microservices\Undefined) {
            $array['formatting'] = $this->formatting;
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
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
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
        if (!$this->created_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_le'] = $this->created_at_le;
        }
        if (!$this->created_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_lt'] = $this->created_at_lt;
        }
        if (!$this->created_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_ge'] = $this->created_at_ge;
        }
        if (!$this->created_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_gt'] = $this->created_at_gt;
        }

        return $array;
    }
}
