<?php

namespace Generated\Perfumer\Microservices\Events\Request\Event;

class SaveEventRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $organizer_id = null;

    /**
     * @var string
     */
    public $locale = null;

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
    public $html = null;

    /**
     * @var string
     */
    public $json = null;

    /**
     * @var string
     */
    public $opened_at = null;

    /**
     * @var string
     */
    public $closed_at = null;

    /**
     * @var string
     */
    public $apply_from = null;

    /**
     * @var string
     */
    public $apply_till = null;

    /**
     * @var string
     */
    public $published_at = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->organizer_id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->opened_at = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->apply_from = new \Perfumer\Microservices\Undefined();
        $this->apply_till = new \Perfumer\Microservices\Undefined();
        $this->published_at = new \Perfumer\Microservices\Undefined();
    }
}
