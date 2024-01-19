<?php

namespace Generated\Perfumer\Microservices\Events\Request\Reviews;

class GetReviewsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $author_id;

    /**
     * @var string
     */
    public $event_id;

    /**
     * @var string
     */
    public $rating;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $event_title;

    /**
     * @var string
     */
    public $event_modules;

    /**
     * @var string
     */
    public $event_format;

    /**
     * @var string
     */
    public $event_created_at_to;

    /**
     * @var string
     */
    public $event_created_at_from;

    /**
     * @var string
     */
    public $event_opened_at_from;

    /**
     * @var string
     */
    public $event_opened_at_to;

    /**
     * @var string
     */
    public $event_closed_at_from;

    /**
     * @var string
     */
    public $event_closed_at_to;

    /**
     * @var string
     */
    public $event_apply_from_from;

    /**
     * @var string
     */
    public $event_apply_from_to;

    /**
     * @var string
     */
    public $event_apply_till_from;

    /**
     * @var string
     */
    public $event_apply_till_to;

    /**
     * @var string
     */
    public $created_at_from;

    /**
     * @var string
     */
    public $created_at_to;

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
    public $search;

    public function __construct()
    {
        $this->_request_url = '/reviews';
        $this->_request_method = 'get';
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->event_id = new \Perfumer\Microservices\Undefined();
        $this->rating = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->event_title = new \Perfumer\Microservices\Undefined();
        $this->event_modules = new \Perfumer\Microservices\Undefined();
        $this->event_format = new \Perfumer\Microservices\Undefined();
        $this->event_created_at_to = new \Perfumer\Microservices\Undefined();
        $this->event_created_at_from = new \Perfumer\Microservices\Undefined();
        $this->event_opened_at_from = new \Perfumer\Microservices\Undefined();
        $this->event_opened_at_to = new \Perfumer\Microservices\Undefined();
        $this->event_closed_at_from = new \Perfumer\Microservices\Undefined();
        $this->event_closed_at_to = new \Perfumer\Microservices\Undefined();
        $this->event_apply_from_from = new \Perfumer\Microservices\Undefined();
        $this->event_apply_from_to = new \Perfumer\Microservices\Undefined();
        $this->event_apply_till_from = new \Perfumer\Microservices\Undefined();
        $this->event_apply_till_to = new \Perfumer\Microservices\Undefined();
        $this->created_at_from = new \Perfumer\Microservices\Undefined();
        $this->created_at_to = new \Perfumer\Microservices\Undefined();
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
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->author_id instanceof \Perfumer\Microservices\Undefined) {
            $array['author_id'] = $this->author_id;
        }
        if (!$this->event_id instanceof \Perfumer\Microservices\Undefined) {
            $array['event_id'] = $this->event_id;
        }
        if (!$this->rating instanceof \Perfumer\Microservices\Undefined) {
            $array['rating'] = $this->rating;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->event_title instanceof \Perfumer\Microservices\Undefined) {
            $array['event_title'] = $this->event_title;
        }
        if (!$this->event_modules instanceof \Perfumer\Microservices\Undefined) {
            $array['event_modules'] = $this->event_modules;
        }
        if (!$this->event_format instanceof \Perfumer\Microservices\Undefined) {
            $array['event_format'] = $this->event_format;
        }
        if (!$this->event_created_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['event_created_at_to'] = $this->event_created_at_to;
        }
        if (!$this->event_created_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['event_created_at_from'] = $this->event_created_at_from;
        }
        if (!$this->event_opened_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['event_opened_at_from'] = $this->event_opened_at_from;
        }
        if (!$this->event_opened_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['event_opened_at_to'] = $this->event_opened_at_to;
        }
        if (!$this->event_closed_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['event_closed_at_from'] = $this->event_closed_at_from;
        }
        if (!$this->event_closed_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['event_closed_at_to'] = $this->event_closed_at_to;
        }
        if (!$this->event_apply_from_from instanceof \Perfumer\Microservices\Undefined) {
            $array['event_apply_from_from'] = $this->event_apply_from_from;
        }
        if (!$this->event_apply_from_to instanceof \Perfumer\Microservices\Undefined) {
            $array['event_apply_from_to'] = $this->event_apply_from_to;
        }
        if (!$this->event_apply_till_from instanceof \Perfumer\Microservices\Undefined) {
            $array['event_apply_till_from'] = $this->event_apply_till_from;
        }
        if (!$this->event_apply_till_to instanceof \Perfumer\Microservices\Undefined) {
            $array['event_apply_till_to'] = $this->event_apply_till_to;
        }
        if (!$this->created_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_from'] = $this->created_at_from;
        }
        if (!$this->created_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_to'] = $this->created_at_to;
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
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }

        return $array;
    }
}
