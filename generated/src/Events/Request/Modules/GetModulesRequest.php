<?php

namespace Generated\Perfumer\Microservices\Events\Request\Modules;

class GetModulesRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $ticket_crm_module = null;

    /**
     * @var bool
     */
    public $is_archived = null;

    /**
     * @var bool
     */
    public $is_scheduled = null;

    /**
     * @var string
     */
    public $parent = null;

    /**
     * @var string
     */
    public $parents = null;

    /**
     * @var string
     */
    public $child = null;

    /**
     * @var string
     */
    public $children = null;

    /**
     * @var bool
     */
    public $root = null;

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
        $this->_request_url = '/modules';
        $this->_request_method = 'get';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->ticket_crm_module = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->is_scheduled = new \Perfumer\Microservices\Undefined();
        $this->parent = new \Perfumer\Microservices\Undefined();
        $this->parents = new \Perfumer\Microservices\Undefined();
        $this->child = new \Perfumer\Microservices\Undefined();
        $this->children = new \Perfumer\Microservices\Undefined();
        $this->root = new \Perfumer\Microservices\Undefined();
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
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->ticket_crm_module instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_crm_module'] = $this->ticket_crm_module;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }
        if (!$this->is_scheduled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_scheduled'] = $this->is_scheduled;
        }
        if (!$this->parent instanceof \Perfumer\Microservices\Undefined) {
            $array['parent'] = $this->parent;
        }
        if (!$this->parents instanceof \Perfumer\Microservices\Undefined) {
            $array['parents'] = $this->parents;
        }
        if (!$this->child instanceof \Perfumer\Microservices\Undefined) {
            $array['child'] = $this->child;
        }
        if (!$this->children instanceof \Perfumer\Microservices\Undefined) {
            $array['children'] = $this->children;
        }
        if (!$this->root instanceof \Perfumer\Microservices\Undefined) {
            $array['root'] = $this->root;
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
