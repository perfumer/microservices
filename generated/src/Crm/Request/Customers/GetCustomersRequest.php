<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Customers;

class GetCustomersRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var array
     */
    public $group = [
    ];

    /**
     * @var string
     */
    public $last_name = null;

    /**
     * @var string
     */
    public $first_name = null;

    /**
     * @var string
     */
    public $mid_name = null;

    /**
     * @var string
     */
    public $full_name = null;

    /**
     * @var string
     */
    public $email = null;

    /**
     * @var string
     */
    public $phone = null;

    /**
     * @var string
     */
    public $iin = null;

    /**
     * @var string
     */
    public $bin = null;

    /**
     * @var string
     */
    public $iin_bin = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var bool
     */
    public $is_disabled = null;

    /**
     * @var string
     */
    public $code = null;

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
    public $tag = null;

    /**
     * @var string
     */
    public $telegram_chat_id = null;

    /**
     * @var string
     */
    public $telegram_username = null;

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

    /**
     * @var string
     */
    public $last_login_at_le = null;

    /**
     * @var string
     */
    public $last_login_at_lt = null;

    /**
     * @var string
     */
    public $last_login_at_ge = null;

    /**
     * @var string
     */
    public $last_login_at_gt = null;

    public function __construct()
    {
        $this->_request_url = '/customers';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->last_name = new \Perfumer\Microservices\Undefined();
        $this->first_name = new \Perfumer\Microservices\Undefined();
        $this->mid_name = new \Perfumer\Microservices\Undefined();
        $this->full_name = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->bin = new \Perfumer\Microservices\Undefined();
        $this->iin_bin = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->created_at_from = new \Perfumer\Microservices\Undefined();
        $this->created_at_to = new \Perfumer\Microservices\Undefined();
        $this->tag = new \Perfumer\Microservices\Undefined();
        $this->telegram_chat_id = new \Perfumer\Microservices\Undefined();
        $this->telegram_username = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
        $this->id_lt = new \Perfumer\Microservices\Undefined();
        $this->id_le = new \Perfumer\Microservices\Undefined();
        $this->id_gt = new \Perfumer\Microservices\Undefined();
        $this->id_ge = new \Perfumer\Microservices\Undefined();
        $this->last_login_at_le = new \Perfumer\Microservices\Undefined();
        $this->last_login_at_lt = new \Perfumer\Microservices\Undefined();
        $this->last_login_at_ge = new \Perfumer\Microservices\Undefined();
        $this->last_login_at_gt = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->group instanceof \Perfumer\Microservices\Undefined) {
            $array['group'] = $this->group;
        }
        if (!$this->last_name instanceof \Perfumer\Microservices\Undefined) {
            $array['last_name'] = $this->last_name;
        }
        if (!$this->first_name instanceof \Perfumer\Microservices\Undefined) {
            $array['first_name'] = $this->first_name;
        }
        if (!$this->mid_name instanceof \Perfumer\Microservices\Undefined) {
            $array['mid_name'] = $this->mid_name;
        }
        if (!$this->full_name instanceof \Perfumer\Microservices\Undefined) {
            $array['full_name'] = $this->full_name;
        }
        if (!$this->email instanceof \Perfumer\Microservices\Undefined) {
            $array['email'] = $this->email;
        }
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
        }
        if (!$this->iin instanceof \Perfumer\Microservices\Undefined) {
            $array['iin'] = $this->iin;
        }
        if (!$this->bin instanceof \Perfumer\Microservices\Undefined) {
            $array['bin'] = $this->bin;
        }
        if (!$this->iin_bin instanceof \Perfumer\Microservices\Undefined) {
            $array['iin_bin'] = $this->iin_bin;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->is_disabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_disabled'] = $this->is_disabled;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->created_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_from'] = $this->created_at_from;
        }
        if (!$this->created_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_to'] = $this->created_at_to;
        }
        if (!$this->tag instanceof \Perfumer\Microservices\Undefined) {
            $array['tag'] = $this->tag;
        }
        if (!$this->telegram_chat_id instanceof \Perfumer\Microservices\Undefined) {
            $array['telegram_chat_id'] = $this->telegram_chat_id;
        }
        if (!$this->telegram_username instanceof \Perfumer\Microservices\Undefined) {
            $array['telegram_username'] = $this->telegram_username;
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
        if (!$this->last_login_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['last_login_at_le'] = $this->last_login_at_le;
        }
        if (!$this->last_login_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['last_login_at_lt'] = $this->last_login_at_lt;
        }
        if (!$this->last_login_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['last_login_at_ge'] = $this->last_login_at_ge;
        }
        if (!$this->last_login_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['last_login_at_gt'] = $this->last_login_at_gt;
        }

        return $array;
    }
}
