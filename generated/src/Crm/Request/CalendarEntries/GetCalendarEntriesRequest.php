<?php

namespace Generated\Perfumer\Microservices\Crm\Request\CalendarEntries;

class GetCalendarEntriesRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user = null;

    /**
     * @var string
     */
    public $category = null;

    /**
     * @var string
     */
    public $calendar = null;

    /**
     * @var int
     */
    public $week_day = null;

    /**
     * @var string
     */
    public $date = null;

    /**
     * @var bool
     */
    public $users_only = null;

    /**
     * @var bool
     */
    public $calendars_only = null;

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
        $this->_request_url = '/calendar-entries';
        $this->_request_method = 'get';
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->category = new \Perfumer\Microservices\Undefined();
        $this->calendar = new \Perfumer\Microservices\Undefined();
        $this->week_day = new \Perfumer\Microservices\Undefined();
        $this->date = new \Perfumer\Microservices\Undefined();
        $this->users_only = new \Perfumer\Microservices\Undefined();
        $this->calendars_only = new \Perfumer\Microservices\Undefined();
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
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->category instanceof \Perfumer\Microservices\Undefined) {
            $array['category'] = $this->category;
        }
        if (!$this->calendar instanceof \Perfumer\Microservices\Undefined) {
            $array['calendar'] = $this->calendar;
        }
        if (!$this->week_day instanceof \Perfumer\Microservices\Undefined) {
            $array['week_day'] = $this->week_day;
        }
        if (!$this->date instanceof \Perfumer\Microservices\Undefined) {
            $array['date'] = $this->date;
        }
        if (!$this->users_only instanceof \Perfumer\Microservices\Undefined) {
            $array['users_only'] = $this->users_only;
        }
        if (!$this->calendars_only instanceof \Perfumer\Microservices\Undefined) {
            $array['calendars_only'] = $this->calendars_only;
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
