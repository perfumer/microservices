<?php

namespace Generated\Perfumer\Microservices\Events\Request\Schedules;

class GetSchedulesRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user;

    /**
     * @var int
     */
    public $module_id;

    /**
     * @var int
     */
    public $week_day;

    /**
     * @var string
     */
    public $format;

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
    public $id;

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
    public $date_le;

    /**
     * @var string
     */
    public $date_lt;

    /**
     * @var string
     */
    public $date_ge;

    /**
     * @var string
     */
    public $date_gt;

    /**
     * @var string
     */
    public $search;

    public function __construct()
    {
        $this->_request_url = '/schedules';
        $this->_request_method = 'get';
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->week_day = new \Perfumer\Microservices\Undefined();
        $this->format = new \Perfumer\Microservices\Undefined();
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
        $this->date_le = new \Perfumer\Microservices\Undefined();
        $this->date_lt = new \Perfumer\Microservices\Undefined();
        $this->date_ge = new \Perfumer\Microservices\Undefined();
        $this->date_gt = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }
        if (!$this->week_day instanceof \Perfumer\Microservices\Undefined) {
            $array['week_day'] = $this->week_day;
        }
        if (!$this->format instanceof \Perfumer\Microservices\Undefined) {
            $array['format'] = $this->format;
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
        if (!$this->date_le instanceof \Perfumer\Microservices\Undefined) {
            $array['date_le'] = $this->date_le;
        }
        if (!$this->date_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['date_lt'] = $this->date_lt;
        }
        if (!$this->date_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['date_ge'] = $this->date_ge;
        }
        if (!$this->date_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['date_gt'] = $this->date_gt;
        }
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }

        return $array;
    }
}
