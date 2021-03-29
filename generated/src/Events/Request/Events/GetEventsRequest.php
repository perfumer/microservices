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
}
