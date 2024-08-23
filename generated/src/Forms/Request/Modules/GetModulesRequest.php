<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Modules;

class GetModulesRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $applicant;

    /**
     * @var bool
     */
    public $is_archived;

    /**
     * @var bool
     */
    public $is_invisible_for_applicant;

    /**
     * @var bool
     */
    public $is_visible_for_roles;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $parent;

    /**
     * @var string
     */
    public $parents;

    /**
     * @var string
     */
    public $child;

    /**
     * @var string
     */
    public $children;

    /**
     * @var bool
     */
    public $root;

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

    /**
     * @var string
     */
    public $search;

    public function __construct()
    {
        $this->_request_url = '/modules';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->target = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->applicant = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->is_invisible_for_applicant = new \Perfumer\Microservices\Undefined();
        $this->is_visible_for_roles = new \Perfumer\Microservices\Undefined();
        $this->tag = new \Perfumer\Microservices\Undefined();
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
        $this->id_lt = new \Perfumer\Microservices\Undefined();
        $this->id_le = new \Perfumer\Microservices\Undefined();
        $this->id_gt = new \Perfumer\Microservices\Undefined();
        $this->id_ge = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->target instanceof \Perfumer\Microservices\Undefined) {
            $array['target'] = $this->target;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->applicant instanceof \Perfumer\Microservices\Undefined) {
            $array['applicant'] = $this->applicant;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }
        if (!$this->is_invisible_for_applicant instanceof \Perfumer\Microservices\Undefined) {
            $array['is_invisible_for_applicant'] = $this->is_invisible_for_applicant;
        }
        if (!$this->is_visible_for_roles instanceof \Perfumer\Microservices\Undefined) {
            $array['is_visible_for_roles'] = $this->is_visible_for_roles;
        }
        if (!$this->tag instanceof \Perfumer\Microservices\Undefined) {
            $array['tag'] = $this->tag;
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
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }

        return $array;
    }
}
