<?php

namespace Generated\Perfumer\Microservices\Events\Request\Participants;

class GetParticipantsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $event_id;

    /**
     * @var bool
     */
    public $is_scheduled;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $customer;

    /**
     * @var string
     */
    public $nb_invites;

    /**
     * @var string
     */
    public $module_id;

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
    public $event_opened_at_le;

    /**
     * @var string
     */
    public $event_opened_at_lt;

    /**
     * @var string
     */
    public $event_opened_at_ge;

    /**
     * @var string
     */
    public $event_opened_at_gt;

    /**
     * @var string
     */
    public $event_closed_at_le;

    /**
     * @var string
     */
    public $event_closed_at_lt;

    /**
     * @var string
     */
    public $event_closed_at_ge;

    /**
     * @var string
     */
    public $event_closed_at_gt;

    /**
     * @var string
     */
    public $created_at_le;

    /**
     * @var string
     */
    public $created_at_lt;

    /**
     * @var string
     */
    public $created_at_ge;

    /**
     * @var string
     */
    public $created_at_gt;

    /**
     * @var string
     */
    public $updated_at_le;

    /**
     * @var string
     */
    public $updated_at_lt;

    /**
     * @var string
     */
    public $updated_at_ge;

    /**
     * @var string
     */
    public $updated_at_gt;

    /**
     * @var string
     */
    public $search;

    public function __construct()
    {
        $this->_request_url = '/participants';
        $this->_request_method = 'get';
        $this->event_id = new \Perfumer\Microservices\Undefined();
        $this->is_scheduled = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->nb_invites = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
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
        $this->event_opened_at_le = new \Perfumer\Microservices\Undefined();
        $this->event_opened_at_lt = new \Perfumer\Microservices\Undefined();
        $this->event_opened_at_ge = new \Perfumer\Microservices\Undefined();
        $this->event_opened_at_gt = new \Perfumer\Microservices\Undefined();
        $this->event_closed_at_le = new \Perfumer\Microservices\Undefined();
        $this->event_closed_at_lt = new \Perfumer\Microservices\Undefined();
        $this->event_closed_at_ge = new \Perfumer\Microservices\Undefined();
        $this->event_closed_at_gt = new \Perfumer\Microservices\Undefined();
        $this->created_at_le = new \Perfumer\Microservices\Undefined();
        $this->created_at_lt = new \Perfumer\Microservices\Undefined();
        $this->created_at_ge = new \Perfumer\Microservices\Undefined();
        $this->created_at_gt = new \Perfumer\Microservices\Undefined();
        $this->updated_at_le = new \Perfumer\Microservices\Undefined();
        $this->updated_at_lt = new \Perfumer\Microservices\Undefined();
        $this->updated_at_ge = new \Perfumer\Microservices\Undefined();
        $this->updated_at_gt = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->event_id instanceof \Perfumer\Microservices\Undefined) {
            $array['event_id'] = $this->event_id;
        }
        if (!$this->is_scheduled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_scheduled'] = $this->is_scheduled;
        }
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->customer instanceof \Perfumer\Microservices\Undefined) {
            $array['customer'] = $this->customer;
        }
        if (!$this->nb_invites instanceof \Perfumer\Microservices\Undefined) {
            $array['nb_invites'] = $this->nb_invites;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
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
        if (!$this->event_opened_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['event_opened_at_le'] = $this->event_opened_at_le;
        }
        if (!$this->event_opened_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['event_opened_at_lt'] = $this->event_opened_at_lt;
        }
        if (!$this->event_opened_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['event_opened_at_ge'] = $this->event_opened_at_ge;
        }
        if (!$this->event_opened_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['event_opened_at_gt'] = $this->event_opened_at_gt;
        }
        if (!$this->event_closed_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['event_closed_at_le'] = $this->event_closed_at_le;
        }
        if (!$this->event_closed_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['event_closed_at_lt'] = $this->event_closed_at_lt;
        }
        if (!$this->event_closed_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['event_closed_at_ge'] = $this->event_closed_at_ge;
        }
        if (!$this->event_closed_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['event_closed_at_gt'] = $this->event_closed_at_gt;
        }
        if (!$this->created_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_le'] = $this->created_at_le;
        }
        if (!$this->created_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_lt'] = $this->created_at_lt;
        }
        if (!$this->created_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_ge'] = $this->created_at_ge;
        }
        if (!$this->created_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_gt'] = $this->created_at_gt;
        }
        if (!$this->updated_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['updated_at_le'] = $this->updated_at_le;
        }
        if (!$this->updated_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['updated_at_lt'] = $this->updated_at_lt;
        }
        if (!$this->updated_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['updated_at_ge'] = $this->updated_at_ge;
        }
        if (!$this->updated_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['updated_at_gt'] = $this->updated_at_gt;
        }
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }

        return $array;
    }
}
