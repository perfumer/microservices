<?php

namespace Generated\Perfumer\Microservices\Events\Request\Events;

class GetConnectorEventsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $parent = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var bool
     */
    public $is_archived = null;

    /**
     * @var bool
     */
    public $is_deep = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var string
     */
    public $id_key = null;

    /**
     * @var string
     */
    public $organizer_id_key = null;

    /**
     * @var string
     */
    public $modules_key = null;

    /**
     * @var string
     */
    public $opened_at_key = null;

    /**
     * @var string
     */
    public $closed_at_key = null;

    /**
     * @var string
     */
    public $apply_from_key = null;

    /**
     * @var string
     */
    public $apply_till_key = null;

    /**
     * @var string
     */
    public $published_at_key = null;

    /**
     * @var string
     */
    public $is_registration_open_key = null;

    /**
     * @var string
     */
    public $status_key = null;

    /**
     * @var string
     */
    public $format_key = null;

    /**
     * @var string
     */
    public $location_key = null;

    /**
     * @var string
     */
    public $author_id_key = null;

    /**
     * @var string
     */
    public $image_key = null;

    /**
     * @var string
     */
    public $title_key = null;

    /**
     * @var string
     */
    public $description_key = null;

    /**
     * @var string
     */
    public $html_key = null;

    /**
     * @var string
     */
    public $json_key = null;

    public function __construct()
    {
        $this->parent = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->is_deep = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->id_key = new \Perfumer\Microservices\Undefined();
        $this->organizer_id_key = new \Perfumer\Microservices\Undefined();
        $this->modules_key = new \Perfumer\Microservices\Undefined();
        $this->opened_at_key = new \Perfumer\Microservices\Undefined();
        $this->closed_at_key = new \Perfumer\Microservices\Undefined();
        $this->apply_from_key = new \Perfumer\Microservices\Undefined();
        $this->apply_till_key = new \Perfumer\Microservices\Undefined();
        $this->published_at_key = new \Perfumer\Microservices\Undefined();
        $this->is_registration_open_key = new \Perfumer\Microservices\Undefined();
        $this->status_key = new \Perfumer\Microservices\Undefined();
        $this->format_key = new \Perfumer\Microservices\Undefined();
        $this->location_key = new \Perfumer\Microservices\Undefined();
        $this->author_id_key = new \Perfumer\Microservices\Undefined();
        $this->image_key = new \Perfumer\Microservices\Undefined();
        $this->title_key = new \Perfumer\Microservices\Undefined();
        $this->description_key = new \Perfumer\Microservices\Undefined();
        $this->html_key = new \Perfumer\Microservices\Undefined();
        $this->json_key = new \Perfumer\Microservices\Undefined();
    }
}
