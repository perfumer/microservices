<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Record;

class CreateRecordRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var string
     */
    public $recipient = null;

    /**
     * @var string
     */
    public $websocket_channel = null;

    /**
     * @var string
     */
    public $badge_user = null;

    /**
     * @var string
     */
    public $sender = null;

    /**
     * @var string
     */
    public $thread = null;

    /**
     * @var string
     */
    public $title = null;

    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $image = null;

    /**
     * @var string
     */
    public $created_at = null;

    /**
     * @var string
     */
    public $payload = null;

    public function __construct()
    {
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->websocket_channel = new \Perfumer\Microservices\Undefined();
        $this->badge_user = new \Perfumer\Microservices\Undefined();
        $this->sender = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->created_at = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }
}
