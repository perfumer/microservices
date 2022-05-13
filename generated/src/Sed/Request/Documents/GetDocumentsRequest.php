<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Documents;

class GetDocumentsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $module = null;

    /**
     * @var string
     */
    public $template = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $author_id = null;

    /**
     * @var string
     */
    public $ticket_id = null;

    /**
     * @var string
     */
    public $signed_at_from = null;

    /**
     * @var string
     */
    public $signed_at_to = null;

    /**
     * @var array
     */
    public $signers = [
    ];

    /**
     * @var string
     */
    public $created_at_from = null;

    /**
     * @var string
     */
    public $created_at_to = null;

    /**
     * @var string
     */
    public $updated_at_from = null;

    /**
     * @var string
     */
    public $updated_at_to = null;

    /**
     * @var string
     */
    public $type = null;

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

    public function __construct()
    {
        $this->_request_url = '/documents';
        $this->_request_method = 'get';
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->template = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->signed_at_from = new \Perfumer\Microservices\Undefined();
        $this->signed_at_to = new \Perfumer\Microservices\Undefined();
        $this->signers = new \Perfumer\Microservices\Undefined();
        $this->created_at_from = new \Perfumer\Microservices\Undefined();
        $this->created_at_to = new \Perfumer\Microservices\Undefined();
        $this->updated_at_from = new \Perfumer\Microservices\Undefined();
        $this->updated_at_to = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
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
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->template instanceof \Perfumer\Microservices\Undefined) {
            $array['template'] = $this->template;
        }
        if (!$this->status instanceof \Perfumer\Microservices\Undefined) {
            $array['status'] = $this->status;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->author_id instanceof \Perfumer\Microservices\Undefined) {
            $array['author_id'] = $this->author_id;
        }
        if (!$this->ticket_id instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_id'] = $this->ticket_id;
        }
        if (!$this->signed_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['signed_at_from'] = $this->signed_at_from;
        }
        if (!$this->signed_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['signed_at_to'] = $this->signed_at_to;
        }
        if (!$this->signers instanceof \Perfumer\Microservices\Undefined) {
            $array['signers'] = $this->signers;
        }
        if (!$this->created_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_from'] = $this->created_at_from;
        }
        if (!$this->created_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_to'] = $this->created_at_to;
        }
        if (!$this->updated_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['updated_at_from'] = $this->updated_at_from;
        }
        if (!$this->updated_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['updated_at_to'] = $this->updated_at_to;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
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

        return $array;
    }
}
