<?php

namespace Generated\Perfumer\Microservices\Events\Request\Events;

class GetEventsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $organizer_id = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var int
     */
    public $module_id = null;

    /**
     * @var string
     */
    public $author_id = null;

    /**
     * @var string
     */
    public $title = null;

    /**
     * @var string
     */
    public $image = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $format = null;

    /**
     * @var string
     */
    public $location = null;

    /**
     * @var string
     */
    public $opened_at_from = null;

    /**
     * @var string
     */
    public $opened_at_to = null;

    /**
     * @var string
     */
    public $closed_at_from = null;

    /**
     * @var string
     */
    public $closed_at_to = null;

    /**
     * @var string
     */
    public $apply_from_from = null;

    /**
     * @var string
     */
    public $apply_from_to = null;

    /**
     * @var string
     */
    public $apply_till_from = null;

    /**
     * @var string
     */
    public $apply_till_to = null;

    /**
     * @var string
     */
    public $published_at = null;

    /**
     * @var string
     */
    public $nb_invites_per_participant = null;

    /**
     * @var string
     */
    public $nb_invites = null;

    /**
     * @var bool
     */
    public $is_disabled = null;

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
        $this->_request_url = '/events';
        $this->_request_method = 'get';
        $this->organizer_id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->format = new \Perfumer\Microservices\Undefined();
        $this->location = new \Perfumer\Microservices\Undefined();
        $this->opened_at_from = new \Perfumer\Microservices\Undefined();
        $this->opened_at_to = new \Perfumer\Microservices\Undefined();
        $this->closed_at_from = new \Perfumer\Microservices\Undefined();
        $this->closed_at_to = new \Perfumer\Microservices\Undefined();
        $this->apply_from_from = new \Perfumer\Microservices\Undefined();
        $this->apply_from_to = new \Perfumer\Microservices\Undefined();
        $this->apply_till_from = new \Perfumer\Microservices\Undefined();
        $this->apply_till_to = new \Perfumer\Microservices\Undefined();
        $this->published_at = new \Perfumer\Microservices\Undefined();
        $this->nb_invites_per_participant = new \Perfumer\Microservices\Undefined();
        $this->nb_invites = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
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
        if (!$this->organizer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['organizer_id'] = $this->organizer_id;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }
        if (!$this->author_id instanceof \Perfumer\Microservices\Undefined) {
            $array['author_id'] = $this->author_id;
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
        if (!$this->opened_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at_from'] = $this->opened_at_from;
        }
        if (!$this->opened_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at_to'] = $this->opened_at_to;
        }
        if (!$this->closed_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at_from'] = $this->closed_at_from;
        }
        if (!$this->closed_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at_to'] = $this->closed_at_to;
        }
        if (!$this->apply_from_from instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_from_from'] = $this->apply_from_from;
        }
        if (!$this->apply_from_to instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_from_to'] = $this->apply_from_to;
        }
        if (!$this->apply_till_from instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_till_from'] = $this->apply_till_from;
        }
        if (!$this->apply_till_to instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_till_to'] = $this->apply_till_to;
        }
        if (!$this->published_at instanceof \Perfumer\Microservices\Undefined) {
            $array['published_at'] = $this->published_at;
        }
        if (!$this->nb_invites_per_participant instanceof \Perfumer\Microservices\Undefined) {
            $array['nb_invites_per_participant'] = $this->nb_invites_per_participant;
        }
        if (!$this->nb_invites instanceof \Perfumer\Microservices\Undefined) {
            $array['nb_invites'] = $this->nb_invites;
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
