<?php

namespace Generated\Perfumer\Microservices\Events\Request\Events;

class GetConnectorEventsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $parent = null;

    /**
     * @var string
     */
    public $except_id = null;

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
    public $is_disabled = null;

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
        $this->_request_url = '/connector/events';
        $this->_request_method = 'get';
        $this->parent = new \Perfumer\Microservices\Undefined();
        $this->except_id = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
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
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->parent instanceof \Perfumer\Microservices\Undefined) {
            $array['parent'] = $this->parent;
        }
        if (!$this->except_id instanceof \Perfumer\Microservices\Undefined) {
            $array['except_id'] = $this->except_id;
        }
        if (!$this->limit instanceof \Perfumer\Microservices\Undefined) {
            $array['limit'] = $this->limit;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }
        if (!$this->is_disabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_disabled'] = $this->is_disabled;
        }
        if (!$this->is_deep instanceof \Perfumer\Microservices\Undefined) {
            $array['is_deep'] = $this->is_deep;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->id_key instanceof \Perfumer\Microservices\Undefined) {
            $array['id_key'] = $this->id_key;
        }
        if (!$this->organizer_id_key instanceof \Perfumer\Microservices\Undefined) {
            $array['organizer_id_key'] = $this->organizer_id_key;
        }
        if (!$this->modules_key instanceof \Perfumer\Microservices\Undefined) {
            $array['modules_key'] = $this->modules_key;
        }
        if (!$this->opened_at_key instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at_key'] = $this->opened_at_key;
        }
        if (!$this->closed_at_key instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at_key'] = $this->closed_at_key;
        }
        if (!$this->apply_from_key instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_from_key'] = $this->apply_from_key;
        }
        if (!$this->apply_till_key instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_till_key'] = $this->apply_till_key;
        }
        if (!$this->published_at_key instanceof \Perfumer\Microservices\Undefined) {
            $array['published_at_key'] = $this->published_at_key;
        }
        if (!$this->is_registration_open_key instanceof \Perfumer\Microservices\Undefined) {
            $array['is_registration_open_key'] = $this->is_registration_open_key;
        }
        if (!$this->status_key instanceof \Perfumer\Microservices\Undefined) {
            $array['status_key'] = $this->status_key;
        }
        if (!$this->format_key instanceof \Perfumer\Microservices\Undefined) {
            $array['format_key'] = $this->format_key;
        }
        if (!$this->location_key instanceof \Perfumer\Microservices\Undefined) {
            $array['location_key'] = $this->location_key;
        }
        if (!$this->author_id_key instanceof \Perfumer\Microservices\Undefined) {
            $array['author_id_key'] = $this->author_id_key;
        }
        if (!$this->image_key instanceof \Perfumer\Microservices\Undefined) {
            $array['image_key'] = $this->image_key;
        }
        if (!$this->title_key instanceof \Perfumer\Microservices\Undefined) {
            $array['title_key'] = $this->title_key;
        }
        if (!$this->description_key instanceof \Perfumer\Microservices\Undefined) {
            $array['description_key'] = $this->description_key;
        }
        if (!$this->html_key instanceof \Perfumer\Microservices\Undefined) {
            $array['html_key'] = $this->html_key;
        }
        if (!$this->json_key instanceof \Perfumer\Microservices\Undefined) {
            $array['json_key'] = $this->json_key;
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
