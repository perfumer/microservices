<?php

namespace Generated\Perfumer\Microservices\Crm\Request\CalendarEvent;

class UpsertCalendarEventRequest extends \Perfumer\Microservices\Request
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
    public $ticket = null;

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
    public $event_started_at = null;

    /**
     * @var string
     */
    public $event_ended_at = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/calendar-event';
        $this->_request_method = 'put';
        $this->category = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->booking_user = new \Perfumer\Microservices\Undefined();
        $this->booking_customer = new \Perfumer\Microservices\Undefined();
        $this->event_started_at = new \Perfumer\Microservices\Undefined();
        $this->event_ended_at = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
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
        if (!$this->ticket instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket'] = $this->ticket;
        }
        if (!$this->booking_user instanceof \Perfumer\Microservices\Undefined) {
            $array['booking_user'] = $this->booking_user;
        }
        if (!$this->booking_customer instanceof \Perfumer\Microservices\Undefined) {
            $array['booking_customer'] = $this->booking_customer;
        }
        if (!$this->event_started_at instanceof \Perfumer\Microservices\Undefined) {
            $array['event_started_at'] = $this->event_started_at;
        }
        if (!$this->event_ended_at instanceof \Perfumer\Microservices\Undefined) {
            $array['event_ended_at'] = $this->event_ended_at;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
