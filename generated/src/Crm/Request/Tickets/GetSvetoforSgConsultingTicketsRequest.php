<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Tickets;

class GetSvetoforSgConsultingTicketsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $leading_tracker;

    /**
     * @var int
     */
    public $customer_id;

    /**
     * @var int
     */
    public $user_id;

    /**
     * @var int
     */
    public $tracker_id;

    /**
     * @var int
     */
    public $lead_tracker_id;

    /**
     * @var int
     */
    public $process_state_id;

    /**
     * @var int
     */
    public $week;

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
    public $meeting_date_at_le;

    /**
     * @var string
     */
    public $meeting_date_at_lt;

    /**
     * @var string
     */
    public $meeting_date_at_ge;

    /**
     * @var string
     */
    public $meeting_date_at_gt;

    /**
     * @var string
     */
    public $search;

    public function __construct()
    {
        $this->_request_url = '/svetofor/sg/consulting';
        $this->_request_method = 'get';
        $this->leading_tracker = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->tracker_id = new \Perfumer\Microservices\Undefined();
        $this->lead_tracker_id = new \Perfumer\Microservices\Undefined();
        $this->process_state_id = new \Perfumer\Microservices\Undefined();
        $this->week = new \Perfumer\Microservices\Undefined();
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
        $this->meeting_date_at_le = new \Perfumer\Microservices\Undefined();
        $this->meeting_date_at_lt = new \Perfumer\Microservices\Undefined();
        $this->meeting_date_at_ge = new \Perfumer\Microservices\Undefined();
        $this->meeting_date_at_gt = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->leading_tracker instanceof \Perfumer\Microservices\Undefined) {
            $array['leading_tracker'] = $this->leading_tracker;
        }
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->tracker_id instanceof \Perfumer\Microservices\Undefined) {
            $array['tracker_id'] = $this->tracker_id;
        }
        if (!$this->lead_tracker_id instanceof \Perfumer\Microservices\Undefined) {
            $array['lead_tracker_id'] = $this->lead_tracker_id;
        }
        if (!$this->process_state_id instanceof \Perfumer\Microservices\Undefined) {
            $array['process_state_id'] = $this->process_state_id;
        }
        if (!$this->week instanceof \Perfumer\Microservices\Undefined) {
            $array['week'] = $this->week;
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
        if (!$this->meeting_date_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['meeting_date_at_le'] = $this->meeting_date_at_le;
        }
        if (!$this->meeting_date_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['meeting_date_at_lt'] = $this->meeting_date_at_lt;
        }
        if (!$this->meeting_date_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['meeting_date_at_ge'] = $this->meeting_date_at_ge;
        }
        if (!$this->meeting_date_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['meeting_date_at_gt'] = $this->meeting_date_at_gt;
        }
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }

        return $array;
    }
}
