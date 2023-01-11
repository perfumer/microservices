<?php

namespace Generated\Perfumer\Microservices\Crm\Request\CalendarEvents;

class GetCalendarEventsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $category = null;

    /**
     * @var string
     */
    public $user = null;

    /**
     * @var string
     */
    public $booking_user = null;

    /**
     * @var string
     */
    public $booking_customer = null;

    /**
     * @var string
     */
    public $min_date = null;

    /**
     * @var string
     */
    public $max_date = null;

    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $ticket_ne = null;

    /**
     * @var string
     */
    public $description = null;

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
    public $event_started_at_le = null;

    /**
     * @var string
     */
    public $event_started_at_lt = null;

    /**
     * @var string
     */
    public $event_started_at_ge = null;

    /**
     * @var string
     */
    public $event_started_at_gt = null;

    /**
     * @var string
     */
    public $event_ended_at_le = null;

    /**
     * @var string
     */
    public $event_ended_at_lt = null;

    /**
     * @var string
     */
    public $event_ended_at_ge = null;

    /**
     * @var string
     */
    public $event_ended_at_gt = null;

    /**
     * @var string
     */
    public $started_at_le = null;

    /**
     * @var string
     */
    public $started_at_lt = null;

    /**
     * @var string
     */
    public $started_at_ge = null;

    /**
     * @var string
     */
    public $started_at_gt = null;

    /**
     * @var string
     */
    public $search = null;

    public function __construct()
    {
        $this->_request_url = '/calendar-events';
        $this->_request_method = 'get';
        $this->category = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->booking_user = new \Perfumer\Microservices\Undefined();
        $this->booking_customer = new \Perfumer\Microservices\Undefined();
        $this->min_date = new \Perfumer\Microservices\Undefined();
        $this->max_date = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->ticket_ne = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
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
        $this->event_started_at_le = new \Perfumer\Microservices\Undefined();
        $this->event_started_at_lt = new \Perfumer\Microservices\Undefined();
        $this->event_started_at_ge = new \Perfumer\Microservices\Undefined();
        $this->event_started_at_gt = new \Perfumer\Microservices\Undefined();
        $this->event_ended_at_le = new \Perfumer\Microservices\Undefined();
        $this->event_ended_at_lt = new \Perfumer\Microservices\Undefined();
        $this->event_ended_at_ge = new \Perfumer\Microservices\Undefined();
        $this->event_ended_at_gt = new \Perfumer\Microservices\Undefined();
        $this->started_at_le = new \Perfumer\Microservices\Undefined();
        $this->started_at_lt = new \Perfumer\Microservices\Undefined();
        $this->started_at_ge = new \Perfumer\Microservices\Undefined();
        $this->started_at_gt = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->category instanceof \Perfumer\Microservices\Undefined) {
            $array['category'] = $this->category;
        }
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->booking_user instanceof \Perfumer\Microservices\Undefined) {
            $array['booking_user'] = $this->booking_user;
        }
        if (!$this->booking_customer instanceof \Perfumer\Microservices\Undefined) {
            $array['booking_customer'] = $this->booking_customer;
        }
        if (!$this->min_date instanceof \Perfumer\Microservices\Undefined) {
            $array['min_date'] = $this->min_date;
        }
        if (!$this->max_date instanceof \Perfumer\Microservices\Undefined) {
            $array['max_date'] = $this->max_date;
        }
        if (!$this->ticket instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket'] = $this->ticket;
        }
        if (!$this->ticket_ne instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_ne'] = $this->ticket_ne;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
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
        if (!$this->event_started_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['event_started_at_le'] = $this->event_started_at_le;
        }
        if (!$this->event_started_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['event_started_at_lt'] = $this->event_started_at_lt;
        }
        if (!$this->event_started_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['event_started_at_ge'] = $this->event_started_at_ge;
        }
        if (!$this->event_started_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['event_started_at_gt'] = $this->event_started_at_gt;
        }
        if (!$this->event_ended_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['event_ended_at_le'] = $this->event_ended_at_le;
        }
        if (!$this->event_ended_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['event_ended_at_lt'] = $this->event_ended_at_lt;
        }
        if (!$this->event_ended_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['event_ended_at_ge'] = $this->event_ended_at_ge;
        }
        if (!$this->event_ended_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['event_ended_at_gt'] = $this->event_ended_at_gt;
        }
        if (!$this->started_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['started_at_le'] = $this->started_at_le;
        }
        if (!$this->started_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['started_at_lt'] = $this->started_at_lt;
        }
        if (!$this->started_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['started_at_ge'] = $this->started_at_ge;
        }
        if (!$this->started_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['started_at_gt'] = $this->started_at_gt;
        }
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }

        return $array;
    }
}
