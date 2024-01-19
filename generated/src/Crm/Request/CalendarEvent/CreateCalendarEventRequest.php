<?php

namespace Generated\Perfumer\Microservices\Crm\Request\CalendarEvent;

class CreateCalendarEventRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $ticket;

    /**
     * @var string
     */
    public $booking_user;

    /**
     * @var string
     */
    public $booking_customer;

    /**
     * @var string
     */
    public $event_started_at;

    /**
     * @var string
     */
    public $event_ended_at;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/calendar-event';
        $this->_request_method = 'post';
        $this->category = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->booking_user = new \Perfumer\Microservices\Undefined();
        $this->booking_customer = new \Perfumer\Microservices\Undefined();
        $this->event_started_at = new \Perfumer\Microservices\Undefined();
        $this->event_ended_at = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
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
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
