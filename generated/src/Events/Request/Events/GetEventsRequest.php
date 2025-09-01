<?php

namespace Generated\Perfumer\Microservices\Events\Request\Events;

class GetEventsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $module_id;

    /**
     * @var array
     */
    public $regions = [
    ];

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $nb_invites_per_participant;

    /**
     * @var int
     */
    public $nb_invites;

    /**
     * @var bool
     */
    public $is_scheduled;

    /**
     * @var bool
     */
    public $is_disabled;

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
    public $opened_at_le;

    /**
     * @var string
     */
    public $opened_at_lt;

    /**
     * @var string
     */
    public $opened_at_ge;

    /**
     * @var string
     */
    public $opened_at_gt;

    /**
     * @var string
     */
    public $closed_at_le;

    /**
     * @var string
     */
    public $closed_at_lt;

    /**
     * @var string
     */
    public $closed_at_ge;

    /**
     * @var string
     */
    public $closed_at_gt;

    /**
     * @var string
     */
    public $apply_from_le;

    /**
     * @var string
     */
    public $apply_from_lt;

    /**
     * @var string
     */
    public $apply_from_ge;

    /**
     * @var string
     */
    public $apply_from_gt;

    /**
     * @var string
     */
    public $apply_till_le;

    /**
     * @var string
     */
    public $apply_till_lt;

    /**
     * @var string
     */
    public $apply_till_ge;

    /**
     * @var string
     */
    public $apply_till_gt;

    /**
     * @var string
     */
    public $published_at_le;

    /**
     * @var string
     */
    public $published_at_lt;

    /**
     * @var string
     */
    public $published_at_ge;

    /**
     * @var string
     */
    public $published_at_gt;

    /**
     * @var string
     */
    public $search;

    public function __construct()
    {
        $this->_request_url = '/events';
        $this->_request_method = 'get';
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->regions = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->format = new \Perfumer\Microservices\Undefined();
        $this->location = new \Perfumer\Microservices\Undefined();
        $this->nb_invites_per_participant = new \Perfumer\Microservices\Undefined();
        $this->nb_invites = new \Perfumer\Microservices\Undefined();
        $this->is_scheduled = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
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
        $this->opened_at_le = new \Perfumer\Microservices\Undefined();
        $this->opened_at_lt = new \Perfumer\Microservices\Undefined();
        $this->opened_at_ge = new \Perfumer\Microservices\Undefined();
        $this->opened_at_gt = new \Perfumer\Microservices\Undefined();
        $this->closed_at_le = new \Perfumer\Microservices\Undefined();
        $this->closed_at_lt = new \Perfumer\Microservices\Undefined();
        $this->closed_at_ge = new \Perfumer\Microservices\Undefined();
        $this->closed_at_gt = new \Perfumer\Microservices\Undefined();
        $this->apply_from_le = new \Perfumer\Microservices\Undefined();
        $this->apply_from_lt = new \Perfumer\Microservices\Undefined();
        $this->apply_from_ge = new \Perfumer\Microservices\Undefined();
        $this->apply_from_gt = new \Perfumer\Microservices\Undefined();
        $this->apply_till_le = new \Perfumer\Microservices\Undefined();
        $this->apply_till_lt = new \Perfumer\Microservices\Undefined();
        $this->apply_till_ge = new \Perfumer\Microservices\Undefined();
        $this->apply_till_gt = new \Perfumer\Microservices\Undefined();
        $this->published_at_le = new \Perfumer\Microservices\Undefined();
        $this->published_at_lt = new \Perfumer\Microservices\Undefined();
        $this->published_at_ge = new \Perfumer\Microservices\Undefined();
        $this->published_at_gt = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }
        if (!$this->regions instanceof \Perfumer\Microservices\Undefined) {
            $array['regions'] = $this->regions;
        }
        if (!$this->title instanceof \Perfumer\Microservices\Undefined) {
            $array['title'] = $this->title;
        }
        if (!$this->image instanceof \Perfumer\Microservices\Undefined) {
            $array['image'] = $this->image;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->format instanceof \Perfumer\Microservices\Undefined) {
            $array['format'] = $this->format;
        }
        if (!$this->location instanceof \Perfumer\Microservices\Undefined) {
            $array['location'] = $this->location;
        }
        if (!$this->nb_invites_per_participant instanceof \Perfumer\Microservices\Undefined) {
            $array['nb_invites_per_participant'] = $this->nb_invites_per_participant;
        }
        if (!$this->nb_invites instanceof \Perfumer\Microservices\Undefined) {
            $array['nb_invites'] = $this->nb_invites;
        }
        if (!$this->is_scheduled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_scheduled'] = $this->is_scheduled;
        }
        if (!$this->is_disabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_disabled'] = $this->is_disabled;
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
        if (!$this->opened_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at_le'] = $this->opened_at_le;
        }
        if (!$this->opened_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at_lt'] = $this->opened_at_lt;
        }
        if (!$this->opened_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at_ge'] = $this->opened_at_ge;
        }
        if (!$this->opened_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at_gt'] = $this->opened_at_gt;
        }
        if (!$this->closed_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at_le'] = $this->closed_at_le;
        }
        if (!$this->closed_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at_lt'] = $this->closed_at_lt;
        }
        if (!$this->closed_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at_ge'] = $this->closed_at_ge;
        }
        if (!$this->closed_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at_gt'] = $this->closed_at_gt;
        }
        if (!$this->apply_from_le instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_from_le'] = $this->apply_from_le;
        }
        if (!$this->apply_from_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_from_lt'] = $this->apply_from_lt;
        }
        if (!$this->apply_from_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_from_ge'] = $this->apply_from_ge;
        }
        if (!$this->apply_from_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_from_gt'] = $this->apply_from_gt;
        }
        if (!$this->apply_till_le instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_till_le'] = $this->apply_till_le;
        }
        if (!$this->apply_till_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_till_lt'] = $this->apply_till_lt;
        }
        if (!$this->apply_till_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_till_ge'] = $this->apply_till_ge;
        }
        if (!$this->apply_till_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_till_gt'] = $this->apply_till_gt;
        }
        if (!$this->published_at_le instanceof \Perfumer\Microservices\Undefined) {
            $array['published_at_le'] = $this->published_at_le;
        }
        if (!$this->published_at_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['published_at_lt'] = $this->published_at_lt;
        }
        if (!$this->published_at_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['published_at_ge'] = $this->published_at_ge;
        }
        if (!$this->published_at_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['published_at_gt'] = $this->published_at_gt;
        }
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }

        return $array;
    }
}
