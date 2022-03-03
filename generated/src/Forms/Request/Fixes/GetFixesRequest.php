<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Fixes;

class GetFixesRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $form = null;

    /**
     * @var string
     */
    public $field = null;

    /**
     * @var string
     */
    public $reason = null;

    /**
     * @var string
     */
    public $message = null;

    /**
     * @var string
     */
    public $locale = null;

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
        $this->_request_url = '/fixes';
        $this->_request_method = 'get';
        $this->form = new \Perfumer\Microservices\Undefined();
        $this->field = new \Perfumer\Microservices\Undefined();
        $this->reason = new \Perfumer\Microservices\Undefined();
        $this->message = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
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
        if (!$this->form instanceof \Perfumer\Microservices\Undefined) {
            $array['form'] = $this->form;
        }
        if (!$this->field instanceof \Perfumer\Microservices\Undefined) {
            $array['field'] = $this->field;
        }
        if (!$this->reason instanceof \Perfumer\Microservices\Undefined) {
            $array['reason'] = $this->reason;
        }
        if (!$this->message instanceof \Perfumer\Microservices\Undefined) {
            $array['message'] = $this->message;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
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